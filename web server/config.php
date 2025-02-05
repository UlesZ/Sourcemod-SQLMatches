<?php
$site_name = "CS:GO"; // Name of Site
$page_title = "Pbyte | Tekmovanje"; // Page title in browser.
$logo = "assets/img/StarFallNetwork_inverted.png";
$limit = 3; // Page Limit for match cards.

$servername = "localhost"; // Server IP
$username = "root"; // DB Username
$password = ""; // DB Password
$dbname = "sqlmatches"; // DB Name

$maps = array(
    // "Path/To/Image" => "full_map_name",
    "assets/img/maps/austria.jpg" => "de_austria",
    "assets/img/maps/cache.jpg" => "de_cache",
    "assets/img/maps/cache_new.jpg" => "workshop/1855851320/de_cache_new",
    "assets/img/maps/cache_new.jpg" => "workshop/1855851320/de_cache",
    "assets/img/maps/canals.jpg" => "de_canals",
    "assets/img/maps/cbble.jpg" => "de_cbble",
    "assets/img/maps/dust.png" => "de_dust",
    "assets/img/maps/dust.png" => "de_shortdust",
    "assets/img/maps/dust2.jpg" => "de_dust2",
    "assets/img/maps/mirage.jpg" => "de_mirage",
    "assets/img/maps/nuke.jpg" => "de_nuke",
    "assets/img/maps/nuke.jpg" => "de_shortnuke",
    "assets/img/maps/overpass.jpg" => "de_overpass",
    "assets/img/maps/train.jpg" => "de_train",
    "assets/img/maps/inferno.jpg" => "de_inferno"
);

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
