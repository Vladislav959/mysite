<?php
$id = $_POST['codeid'];
$curuid = $_COOKIE['id'];
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
mysqli_set_charset($db, "utf8") ;
$request = mysqli_query($db,"SELECT * FROM `codes` WHERE `id` = $id");
while($row = mysqli_fetch_array($request)) {
$uid = $row['uid'];
}
if($curuid!=$uid){
exit ('You havent access');
}
$ch = curl_init('https://fastycode.site/delrec');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "delid={$id}");
curl_setopt($ch, CURLOPT_HEADER, false);
$delres = curl_exec($ch);
echo $delres;
curl_close($ch);
$delete= mysqli_query($db,"DELETE FROM `codes` WHERE `id` = $id");
?>
<script>location.href="/profile"</script>