<?php
/*/

Midaval - TdA24 Nominační kolo API

/*/

header("Content-Type: application/json; charset=utf-8");

$servername = "127.0.0.1";
$username = "databaze";
$password = getenv('DB_PASSWORD');
$dbname = "lecturerdb";

try {
    // Připojení k databázi
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Zpracování GET požadavku při zadaném UUID
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["uuid"])) {
        // $uuid = $_GET["uuid"];
        $stmt = $conn->prepare("SELECT * FROM lecturers WHERE uuid = ?");
        $stmt->bind_param("s", $uuid); 
        $stmt->execute();
        $result = $stmt->get_result();

        $lecturer = $result->fetch_assoc();

        if ($lecturer) {
            // Dekódování složitějších objektů
            $lecturer["tags"] = json_decode($lecturer["tags"]);
            $lecturer["contact"] = json_decode($lecturer["contact"], true);

            if (
                json_last_error() !== JSON_ERROR_NONE ||
                !is_array($lecturer["tags"])
            ) {
                $lecturer["tags"] = [];
            }

            if (
                json_last_error() !== JSON_ERROR_NONE ||
                !is_array($lecturer["contact"])
            ) {
                $lecturer["contact"] = [];
            }

            echo json_encode($lecturer, JSON_PRETTY_PRINT);
        } else {
            http_response_code(404);
            echo '{"code": 404, "message": "User not found"}';
        }
    } elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
        $result = $conn->query("SELECT * FROM lecturers");

        $lecturers = [];
        while ($row = $result->fetch_assoc()) {
            $row["tags"] = json_decode($row["tags"]);
            $row["contact"] = json_decode($row["contact"], true);

            if (
                json_last_error() !== JSON_ERROR_NONE ||
                !is_array($row["tags"])
            ) {
                $row["tags"] = [];
            }

            if (
                json_last_error() !== JSON_ERROR_NONE ||
                !is_array($row["contact"])
            ) {
                $row["contact"] = [];
            }

            $lecturers[] = $row;
        }

        if (count($lecturers) > 0) {
            echo json_encode($lecturers, JSON_PRETTY_PRINT);
        } else {
            echo json_encode((object) [], JSON_PRETTY_PRINT);
        }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
$jsonData = file_get_contents('php://input');

		$data = json_decode($jsonData, true);
		$_REQUEST = $data;
$uuid = isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : generateRandomUUID();
$title_before = isset($_REQUEST['title_before']) ? $_REQUEST['title_before'] : null;
$first_name = $_REQUEST['first_name'];
$middle_name = isset($_REQUEST['middle_name']) ? $_REQUEST['middle_name'] : null;
$last_name = $_REQUEST['last_name'];
$title_after = isset($_REQUEST['title_after']) ? $_REQUEST['title_after'] : null;
$picture_url = isset($_REQUEST['picture_url']) ? $_REQUEST['picture_url'] : null;
$location = isset($_REQUEST['location']) ? $_REQUEST['location'] : null;
$claim = isset($_REQUEST['claim']) ? $_REQUEST['claim'] : null;
$bio = isset($_REQUEST['bio']) ? $_REQUEST['bio'] : null;
$tags = $_REQUEST['tags'];
$price_per_hour = isset($_REQUEST['price_per_hour']) ? $_REQUEST['price_per_hour'] : null;
$contact = $_REQUEST['contact'];

$tagsArray = [];

foreach ($tags as $tag) {
    $tagUUID = generateRandomUUID();
    $tagsArray[] = [
        'uuid' => $tagUUID,
        'name' => $tag['name'],
    ];
}

$contactString = json_encode($contact);

$tagsString = json_encode($tagsArray);

$sql = "INSERT INTO lecturers (uuid, title_before, first_name, middle_name, last_name, title_after, picture_url, location, claim, bio, tags, price_per_hour, contact)
VALUES ('$uuid', '$title_before', '$first_name', '$middle_name', '$last_name', '$title_after', '$picture_url', '$location', '$claim', '$bio', '$tagsString', '$price_per_hour', '$contactString')";

if ($conn->query($sql) === TRUE) {
    $response = $data;
    $response['uuid'] = $uuid;
    $response['tags'] = $tagsArray;

    $jsonResponse = json_encode($response);

    echo $jsonResponse;
		} else {
			echo "Error: " . $sql + $conn->error;
		}

		$conn->close();
} elseif ($_SERVER["REQUEST_METHOD"] === "PUT" && isset($_GET["uuid"])) {
    $uuid = $_GET["uuid"];
    $putdata = file_get_contents("php://input");
    $data = json_decode($putdata, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid JSON format"]);
        exit();
    }

    $setCommands = [];
    $bindParams = ["uuid" => $uuid];

    foreach ($data as $key => $value) {
        if ($key !== "uuid") {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            $setCommands[] = "$key = ?";
            $bindParams[$key] = is_array($value) ? json_encode($value) : $value;
        }
    }

    $setCommands = implode(", ", $setCommands);
    $updateQuery = "UPDATE lecturers SET $setCommands WHERE uuid = :uuid";

    $stmt = $conn->prepare($updateQuery);

    foreach ($bindParams as $param => &$paramValue) {
        $stmt->bindParam(":$param", $paramValue);
    }

    $stmt->execute();
    $conn->close();

    http_response_code(200);
    echo json_encode(["message" => "Lecturer updated successfully"]);
    exit();
} elseif ($_SERVER["REQUEST_METHOD"] === "DELETE" && isset($_GET["uuid"])) {
    $uuid = $_GET["uuid"];

    $selectStmt = $conn->prepare("SELECT * FROM lecturers WHERE uuid = ?");
    $selectStmt->bind_param("s", $uuid);
    $selectStmt->execute();
    $result = $selectStmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        http_response_code(404);
        echo json_encode(["code" => 404, "message" => "User not found"]);
        exit();
    }

    $deleteStmt = $conn->prepare("DELETE FROM lecturers WHERE uuid = ?");
    $deleteStmt->bind_param("s", $uuid);
    $deleteStmt->execute();

    $rowsAffected = $deleteStmt->affected_rows;

    if ($rowsAffected > 0) {
        http_response_code(204);
    } else {
        http_response_code(404);
        echo json_encode(["code" => 404, "message" => "User not found"]);
    }

    $deleteStmt->close();
    $selectStmt->close();
    $conn->close();
    exit();
} else {
		http_response_code(400);
		echo json_encode(["error" => "Invalid request method"]);
		exit();
	}
} catch (Exception $e) {
	http_response_code(500);
	echo json_encode(["error" => $e->getMessage()], JSON_FORCE_OBJECT);
}
function generateRandomUUID()
{
	return sprintf(
		'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0x0fff) | 0x4000,
		mt_rand(0, 0x3fff) | 0x8000,
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff)
	);
}
