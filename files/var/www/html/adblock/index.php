
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 $this_page_key="adblock";
 include('../shared/head.php');

$allowfn="/var/www/html/configinfo/adblock.allow";
$instructionfn="/var/www/html/configinfo/stuff_to_do";
$list_updated=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $handle = fopen($allowfn, "w");
  if ($handle) {
    $text_to_write=html_entity_decode($_POST["allowlist"]);
    fwrite($handle, $text_to_write);
    fclose($handle);

    exec('get_adblock_list 2>&1', $output);
    $list_updated=true;
  }
}
?>
<div id="content">
<?php
if ($list_updated) {
  echo "<i>List updated - please allow time for changes to take effect</i><p>\n";
  print_r($output);
  echo "<p>";
}
?><h3>Adblocking is on by default. The allowed sites are:</h3>
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
</div>
<?php include('../shared/tail.php'); ?>
