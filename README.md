# Steam Group Member Counter

[EN]:
This script displays your Member Counter as well as Avatar & Group name.

If you are experienced on PHP and XML you can get other information using this script.

[PT]:
Este script mostra o Contador de Membros tal como o Avatar e o Nome do Grupo.

Se és expriente em PHP e XML poderes obter outras informações usando este script.

# Requirements:
- [PHP](https://php.net/) (Version 5.6.0 or newer)
- allow_url_fopen enabled or Curl installed.

# Script
members.php
```php
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
```

# Contact me
- [My Steam](https://steamcommunity.com/id/DikaN1337)
- My Discord: " DikaN'#0001
