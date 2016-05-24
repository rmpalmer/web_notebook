<?php include 'header.php'; ?>

<main>
	<h1>Add Note</h1>
	<form action="index.php" method="post" id="edit_note_form">
	<input type="hidden" name="action" value="save_note">
	<input type="hidden" name="note_id" value=<?php echo $note_id?>> 
	
	<label>Title:</label>
	<input type="text" name="title" value=<?php echo $title?>><br>
	
	<textarea name="content" cols="80" rows="20"><?php echo $content?></textarea><br>

	<label>&nbsp;</label>
	<input type="submit" value="Save Note" />
	
	</form>
	<p> <a href="index.php?action=list_notes">View Note List</a></p>
</main>

<?php include 'footer.php'?>


