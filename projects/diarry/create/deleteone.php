<?php session_start();
$subject = $_SESSION['subject'];
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
    if (!$db)
{
die ('Could not connect:' . mysqli_error());
}

$delone= mysqli_query($db, "DELETE FROM `diarry`
WHERE `diarry`.`subject`=$subject");
if($delone !== FALSE)
{
   echo("One row has been deleted.");
}
else
{
   echo("No rows have been deleted.");
}
?>