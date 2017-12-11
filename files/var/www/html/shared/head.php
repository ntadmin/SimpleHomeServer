<!DOCTYPE HTML>
<html>

<head>
  <title>Home Network</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="/style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="/home/index.php">Townsend<span class="logo_colour"> home network</span></a></h1>
          <h2>Information on this network</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
<?php
$pages=array("home" => array("name" => "Home", "URL" => "/home/index.php"),
             "dhcp" => array("name" => "DHCP", "URL" => "/dhcp/index.php"),
             "adblock" => array("name" => "AdBlock", "URL" => "/adblock/index.php"));
foreach ($pages as $key => $page) {
  $url=$page['URL'];
  $name=$page['name'];
  if ($key == $this_page_key) { echo "<li class='selected'>"; } else { echo "<li>"; }
  echo "<a href='$url'>$name</a></li>";
}
?>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>July 1st, 2014</h5>
        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>July 1st, 2014</h5>
        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
