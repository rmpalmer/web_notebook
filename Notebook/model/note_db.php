<?php
function get_titles() {
	global $db;
	$query = 'SELECT title, idnotes FROM notes ORDER BY title';
	$statement = $db->prepare($query);
	$statement->execute();
	$titles = $statement->fetchAll();
	$statement->closeCursor();
	return $titles;
}

function delete_note($note_id) {
	global $db;
	$query = 'DELETE FROM notes where idnotes = :note_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':note_id', $note_id);
	$statement->execute();
	$statement->closeCursor();
}

function add_note($title, $content) {
	global $db;
	$query = 'INSERT INTO notes
			(title, content)
			VALUES
			(:title, :content)';
	$statement = $db->prepare($query);
	$statement->bindValue(':title', $title);
	$statement->bindValue(':content', $content);
	$statement->execute();
	$statement->closeCursor();
}

function get_note($note_id) {
	global $db;
	$query = 'SELECT * from notes where idnotes = :note_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':note_id', $note_id);
	$statement->execute();
	$note = $statement->fetch();
	$statement->closeCursor();
	return $note;
}

function save_note($note_id,$title,$content) {
	global $db;
	$query = 'UPDATE notes 
			SET title = :title , content = :content
			WHERE idnotes = :note_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':note_id',$note_id);
	$statement->bindvalue(':content',$content);
	$statement->bindValue(':title',$title);
	$statement->execute();
	$statement->closeCursor();
}