<?php
function getBirthdays() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY month ASC, day ASC, person ASC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}
function addBirthday() {
	$db = openDatabaseConnection();
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES ('$person', '$day', '$month', '$year')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}
function getBirthday($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id = $id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetch();
}
function editBirthday($id) {
	$db = openDatabaseConnection();
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "UPDATE birthdays SET person = '$person', day = '$day', month = '$month', year = '$year' WHERE id = '$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}
function deleteBirthday() {
	$db = openDatabaseConnection();
	$id = $_GET['id'];
	$sql = "DELETE FROM birthdays WHERE id = '$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}