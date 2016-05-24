<?php
require ('model/database.php');
require ('model/note_db.php');

$action = filter_input(INPUT_POST,'action');
if ($action == NULL) {
	$foo = "1";
	$action = filter_input(INPUT_GET,'action');
	if ($action == NULL) {
		$foo = "2";
		$action = 'list_notes';
	}
}

if ($action == 'list_notes') {
	$titles = get_titles();
	include('view/note_list.php');
} else if ($action == 'delete_note') {
	$note_id = filter_input(INPUT_POST,'note_id',FILTER_VALIDATE_INT);
	if ($note_id == NULL) {
		$error = "invalid note id";
		include ('view/error.php');
	} else {
		delete_note($note_id);
		header ("Location: .");
	}
} else if ($action == 'show_add_form') {
	include ('view/add_note.php');
} else if ($action == 'add_note') {
	$title = filter_input(INPUT_POST,'title');
	$content = filter_input(INPUT_POST,'content');
	if ($title == NULL) {
		$error = "Title cannot be empty";
		include ('view/error.php');
	} else {
		add_note($title,$content);
		header("Location: .");
	}
} else if ($action == 'save_note') {
	$note_id = filter_input(INPUT_POST,'note_id',FILTER_VALIDATE_INT);
	$title = filter_input(INPUT_POST,'title');
	$content = filter_input(INPUT_POST,'content');
	if ($note_id == NULL) {
		$error = "invalid note id";
		include ('view/error.php');
	} else {
		save_note($note_id,$title,$content);
		header("Location: .");
	}
} else if ($action == 'edit_note') {
	$note_id = filter_input(INPUT_GET,'note_id',FILTER_VALIDATE_INT);
	if ($note_id == NULL) {
		$error = "invalid note id";
		include ('view/error.php');
	} else {
		$note = get_note($note_id);
		$title = $note['title'];
		$content = $note['content'];
		include ('view/edit_note.php');
	}
} else {
	include ('mydebug.php');
}
?>