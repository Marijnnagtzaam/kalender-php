<?php
require(ROOT . "model/BirthdayModel.php");
function index() {
	$birthdays = getBirthdays();
	render("home/index", array(
		'birthdays' => $birthdays
	));	
}
function create() {
	render("home/create");
}
function edit($id) {
	render("home/edit", array(
		'birthday' => getBirthday($id)
	));
}
function delete() {
	render("home/delete");
}