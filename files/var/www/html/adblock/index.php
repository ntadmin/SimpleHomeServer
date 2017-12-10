<html>
 <head>
  <title>Adblocking</title>
 </head>
 <body>
  <h1>Townsend Home Network</h1><h2>Adblocking</h2>
<?php
$allowfn="/var/www/html/configinfo/adblock.allow";
$instructionfn="/var/www/html/configinfo/stuff_to_do";
$list_updated=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $handle = fopen($allowfn, "w");
  if ($handle) {
    $text_to_write=html_entity_decode($_POST["allowlist"]);
    fwrite($handle, $text_to_write);
    fclose($handle);

    $handle = fopen($instructionfn, "a");
    if ($handle) {
      fwrite($handle, "udpate_adblock\n");
      $list_updated=true;
      fclose($handle);
    }
  }
}
?>

<?php
if ($list_updated) {
  echo "<i>List updated - please allow time for changes to take effect</i><p>\n";
}
?>Adblocking is on by default. The allowed sites are:<p>
  <form method="post">
   <textarea name="allowlist" cols="80" rows="20"><?php
$handle = fopen($allowfn, "r");
if ($handle) {
  while(($line = fgets($handle)) !== false) {
    echo $line;
  }
  fclose($handle);
}
?></textarea>
   <input type="submit" value="Update allow list">
  </form>
 </body>
</html>
