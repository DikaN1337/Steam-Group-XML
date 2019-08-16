<?php

$curl = true; // Use this if your hosting provider doesn't have allow_url_fopen enabled.
$steamgroup = "TEST"; // Custom Group URL

$url = "https://steamcommunity.com/groups/" . $steamgroup . "/memberslistxml/?xml=1";

if (curl = true) {
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $data = curl_exec($ch);
  $xml = simplexml_load_string($data);
  $json = json_encode($data);
  $array = json_decode($json,TRUE);
  curl_close($ch);
} else if (curl = false) {
  $xml = simplexml_load_file($url);
} else {
  die("Invalid Configuration.");
}

$avatarfull = $xml->groupDetails->avatarFull;
$groupname = $xml->groupDetails->groupName;
$members = $xml->groupDetails->memberCount;

echo "$members members in $groupname"; // ECHO MEMBERS AND GROUP NAME

?>
