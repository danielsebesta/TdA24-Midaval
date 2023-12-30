<?php
/*/

Midaval - TdA24 Nominační kolo API

/*/

header("Content-Type: application/json; charset=utf-8");

try {
	// Připojení se na databázi
	$db = new SQLite3("database.db");

	// Zpracování GET požadavku při zadaném UUID
	if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["uuid"])) {
		$uuid = $_GET["uuid"];
		$stmt = $db->prepare("SELECT * FROM lecturers WHERE uuid = :uuid");
		$stmt->bindParam(":uuid", $uuid);
		$result = $stmt->execute();

		$lecturer = $result->fetchArray(SQLITE3_ASSOC);

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
			echo '{';
			echo '"code": 404,';
			echo '"message": "User not found"';
			echo '}';
		}
		// Zpracování GET požadavku bez zadaného UUID
	} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
		$result = $db->query("SELECT * FROM lecturers");

		$lecturers = [];
		while ($row = $result->fetchArray(SQLITE3_ASSOC)) {

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
		// Zpracování POST požadavku
	} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata, true);

		if (json_last_error() !== JSON_ERROR_NONE) {
			throw new Exception("Invalid JSON format");
		}

		$data["tags"] = json_encode($data["tags"]);
		$data["contact"] = json_encode($data["contact"]);

		$db = new SQLite3("database.db");

		$stmt = $db->prepare(
			"INSERT INTO lecturers (uuid, title_before, first_name, middle_name, last_name, title_after, picture_url, location, claim, bio, tags, price_per_hour, contact) VALUES (:uuid, :title_before, :first_name, :middle_name, :last_name, :title_after, :picture_url, :location, :claim, :bio, :tags, :price_per_hour, :contact)"
		);

		$stmt->bindValue(":uuid", $data["uuid"]);
		$stmt->bindValue(":title_before", $data["title_before"]);
		$stmt->bindValue(":first_name", $data["first_name"]);
		$stmt->bindValue(":middle_name", $data["middle_name"]);
		$stmt->bindValue(":last_name", $data["last_name"]);
		$stmt->bindValue(":title_after", $data["title_after"]);
		$stmt->bindValue(":picture_url", $data["picture_url"]);
		$stmt->bindValue(":location", $data["location"]);
		$stmt->bindValue(":claim", $data["claim"]);
		$stmt->bindValue(":bio", $data["bio"]);
		$stmt->bindValue(":tags", $data["tags"]);
		$stmt->bindValue(":price_per_hour", $data["price_per_hour"]);
		$stmt->bindValue(":contact", $data["contact"]);

		$result = $stmt->execute();


		$insertedId = $db->lastInsertRowID();


		$selectStmt = $db->prepare("SELECT * FROM lecturers WHERE rowid = :id");
		$selectStmt->bindValue(":id", $insertedId);
		$selectResult = $selectStmt->execute();
		$lecturer = $selectResult->fetchArray(SQLITE3_ASSOC);

		$db->close();

		http_response_code(200);
		echo json_encode($lecturer);
		exit();
		// Zpracování PUT požadavku při zadaném UUID
	} elseif ($_SERVER["REQUEST_METHOD"] === "PUT" && isset($_GET["uuid"])) {
		$uuid = $_GET["uuid"];
		$putdata = file_get_contents("php://input");
		$data = json_decode($putdata, true);

		if (json_last_error() !== JSON_ERROR_NONE) {
			throw new Exception("Invalid JSON format");
		}

		$setCommands = [];
		foreach ($data as $key => $value) {
			if ($key !== "uuid") {
				if (is_array($value)) {
					$value = json_encode($value);
				}
				$setCommands[] = "$key = :$key";
			}
		}
		$setCommands = implode(", ", $setCommands);

		$stmt = $db->prepare(
			"UPDATE lecturers SET $setCommands WHERE uuid = :uuid"
		);
		$stmt->bindParam(":uuid", $uuid);
		foreach ($data as $key => $value) {

			if ($key !== "uuid") {

				$stmt->bindValue(
					":$key",
					is_array($value) ? json_encode($value) : $value
				);
			}
		}
		$stmt->execute();

		$db->close();

		http_response_code(200);
		echo json_encode(["message" => "Lecturer updated successfully"]);
		exit();
	} elseif ($_SERVER["REQUEST_METHOD"] === "DELETE" && isset($_GET["uuid"])) {
		$uuid = $_GET["uuid"];

		$stmt = $db->prepare("SELECT * FROM lecturers WHERE uuid = :uuid");
		$stmt->bindParam(":uuid", $uuid);
		$result = $stmt->execute();

		$row = $result->fetchArray(SQLITE3_ASSOC);
		if (!$row) {

			http_response_code(404);
			echo '{';
			echo '"code": 404,';
			echo '"message": "User not found"';
			echo '}';
			exit();
		}

		$deleteStmt = $db->prepare("DELETE FROM lecturers WHERE uuid = :uuid");
		$deleteStmt->bindParam(":uuid", $uuid);
		$deleteStmt->execute();

		$rowsAffected = $db->changes();

		$db->close();

		if ($rowsAffected > 0) {
			http_response_code(204);
		} else {
			http_response_code(404);
			echo '{';
			echo '"code": 404,';
			echo '"message": "User not found"';
			echo '}';
		}
		exit();
	} else {
		http_response_code(400);
		echo json_encode(["error" => "Invalid request method"]);
		exit();
	}

	$db->close();
} catch (Exception $e) {
	http_response_code(500);
	echo json_encode(["error" => $e->getMessage()], JSON_FORCE_OBJECT);
}
