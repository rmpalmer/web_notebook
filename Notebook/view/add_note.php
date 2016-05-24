<?php include 'header.php'; ?>

<main>
	<h1>Add Note</h1>
	<form action="index.php" method="post" id="add_note_form">
	<input type="hidden" name="action" value="add_note">
	
	<label>Title:</label>
	<input type="text" name="title" /><br>
	
	<textarea name="content" cols="80" rows="20"></textarea><br>

	<label>&nbsp;</label>
	<input type="submit" value="Add Note" />
	
	</form>
	<p> <a href="index.php?action=list_notes">View Note List</a></p>
</main>

<?php include 'footer.php'?>

