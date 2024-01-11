<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
        $uuid = $_GET["uuid"];
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
$input_data = file_get_contents('php://input');
$data = json_decode($input_data, true);

    $sql = "INSERT INTO lecturers (uuid, title_before, first_name, middle_name, last_name, title_after, picture_url, location, claim, bio, tags, price_per_hour, contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param(
        "sssssssssssis",
        $data['uuid'],
        $data['title_before'],
        $data['first_name'],
        $data['middle_name'],
        $data['last_name'],
        $data['title_after'],
        $data['picture_url'],
        $data['location'],
        $data['claim'],
        $data['bio'],
        json_encode($data['tags']),
        $data['price_per_hour'],
        json_encode($data['contact'])
    );

    // Execute the statement
    $stmt->execute();

    // Display the entire person's information
    echo json_encode($data);

    // Close the connection
    $stmt->close();
    $conn->close();
} catch (mysqli_sql_exception $e) {
    // Log the error instead of displaying it in production
    echo "Error: " . $e->getMessage();
}
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

	$conn->close();
} catch (Exception $e) {
	http_response_code(500);
	echo json_encode(["error" => $e->getMessage()], JSON_FORCE_OBJECT);
}
