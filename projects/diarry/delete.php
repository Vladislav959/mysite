<?php 

$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
    if (!$db)
{
die ('Could not connect:' . mysqli_error());
}

$truncatetable= mysqli_query($db, "TRUNCATE TABLE `diarry`");

if($truncatetable !== FALSE)
{
   echo("All rows have been deleted.");
}
else
{
   echo("No rows have been deleted.");
}
?>