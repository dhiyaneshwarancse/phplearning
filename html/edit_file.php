

<?php

//echo 'fname'.$_POST['fname'];
$fname = $_POST['fname'];
$myfile = fopen($fname, "r") or die("Unable to open file!");
$fcontent =  fread($myfile,filesize($fname));
?>


<?php

fclose($myfile);

?>





<form action="save_file.php" method="post">
<input type="hidden" value="<?php echo $fname ?>" name="fname">
<textarea name="fcontent"><?php echo $fcontent ?></textarea>
<input type="submit" value="save">
</form>
