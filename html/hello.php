<?php
echo 'hello<br>';
$server = "localhost";
$user = "root";
$pass = "admin";
$dbname = "phonebook";
$con = mysqli_connect($server,$user,$pass,$dbname);
//$con = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

if($con->connect_error){
die('cannot connect'.$con->connect_error);
}else
{
echo 'successfully db connected<br><br>';
}
$sql = "SELECT uname, phone FROM usr_name";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "\n Name: " . $row["uname"]. " phone::" . $row["phone"]. "<br>";
    }
} else {
    echo "0 results";
}
echo 'before get file name<br>';
$fname = $_GET['fname'];
echo 'file name is::'.$fname;
$myfile = fopen($fname, "r") or die("Unable to open file!");
echo "<br>File content below:<br><br>";
echo fread($myfile,filesize($fname));
fclose($myfile);

$con->close();

?>
<form action="edit_file.php" method="post">
<input type="hidden" value="<?php echo $fname ?>" name="fname">
<input type="submit" value="edit">
</form>
