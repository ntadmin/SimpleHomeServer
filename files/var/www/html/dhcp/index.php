<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 $this_page_key="dhcp";
 include('../shared/head.php');
?>
<div id="content">
<?php
exec('list_leases', $output);
foreach ($output as $line) {
echo $line;
}
?>
</div>
<?php include('../shared/tail.php'); ?>


