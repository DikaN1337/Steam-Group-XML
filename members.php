<?php

$steamgroup = "https://steamcommunity.com/groups/TESTE";

$url = $steamgroup."/memberslistxml/?xml=1";
$xml = simplexml_load_file($url);
$avatarfull = $xml->groupDetails->avatarFull;
$groupname = $xml->groupDetails->groupName;
$members = $xml->groupDetails->memberCount;
$groupurl = $xml->groupDetails->groupURL;

echo "$members members in $groupname"; // ECHO MEMBERS AND GROUP NAME

?>
