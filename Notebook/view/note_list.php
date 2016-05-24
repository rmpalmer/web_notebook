<?php include 'header.php'; ?>
<main>

<h1>Note List</h1>
<table border="1">
<tr>
	<th>Title</th>
	<th>&nbsp;</th>
</tr>
<?php foreach ($titles as $title) : ?>
	<tr>
		<td><a href="?action=edit_note&amp;note_id=<?php 
			echo $title['idnotes']; ?>">
			<?php echo $title['title']; ?>
			</a>
		<td><form action="." method="post">
		 	<input type="hidden" name="note_id" value="<?php echo $title['idnotes'];?>">
		 	<input type="hidden" name="action" value="delete_note">
			<input type="submit" value="Delete">
		    </form></td>		
	</tr>
<?php endforeach;?>

</table>

<p> <a href="?action=show_add_form">Add Note</a></p>

</main>
<?php include 'footer.php'?>
