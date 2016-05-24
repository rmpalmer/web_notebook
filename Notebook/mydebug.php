<?php include 'view/header.php'; ?>
<main>
    <h1>DEBUG</h1>
    <pre><?php print_r($_POST) ?></pre>
    <?php echo  filter_input(INPUT_POST,'action'); ?>
  
</main>
<?php include 'view/footer.php'; ?>