<?php
header('Content-Type: application/json; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	try {

		$db = new SQLite3('database.db');

		$result = $db->query('SELECT * FROM lecturers');

		$lecturers = array();

		while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
			$lecturers[] = $row;
		}
		echo json_encode($lecturers, JSON_PRETTY_PRINT);

		$db->close();
	} catch (Exception $e) {

		echo "Došlo k chybě: " . $e->getMessage();
	}
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	try {

		$postdata = file_get_contents("php://input");

		$data = json_decode($postdata, true);

		if (json_last_error() !== JSON_ERROR_NONE) {
			throw new Exception('Invalid JSON format');
		}

		$db = new SQLite3('database.db');


		$stmt = $db->prepare('INSERT INTO lecturers (uuid, title_before, first_name, middle_name, last_name, title_after, picture_url, location, claim, bio, tags, price_per_hour, contact) VALUES (:uuid, :title_before, :first_name, :middle_name, :last_name, :title_after, :picture_url, :location, :claim, :bio, :tags, :price_per_hour, :contact)');

		$stmt->bindParam(':uuid', $data['uuid']);
		$stmt->bindParam(':title_before', $data['title_before']);
		$stmt->bindParam(':first_name', $data['first_name']);
		$stmt->execute();
		$db->close();

		http_response_code(200);
		echo json_encode(array('message' => 'Lecturer added successfully'));
	} catch (Exception $e) {
		http_response_code(500);
		echo json_encode(array('error' => 'An error occurred: ' . $e->getMessage()));
	}
}
