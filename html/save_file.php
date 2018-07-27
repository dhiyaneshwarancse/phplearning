<?php

//echo 'fname'.$_POST['fname'];
$fcontent = $_POST['fcontent'];
$fname = $_POST['fname'];
$myfile = fopen($fname, "w") or die("Unable to open file!");
$fcontent =  fwrite($myfile,$fcontent);

echo 'file saved successfully!!';
echo '<br><br><a href="get_fname.php">home</a>';
$fclose($myfile);
?>


