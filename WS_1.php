<?php
/*
https://developer.spotify.com/console/get-playlist-followers-contains

[
  true
[
  true,
  false,
  false
]

ids
jmperezperez,thelinmichael,wizzler

JSON OBJECT
1 element
{
  "jmperezperez": true
}

3 elements
{
  "jmperezperez": true,
  "thelinmichael": flase,
  "wizzler": flase
}

JSON STRING
"{
  "jmperezperez": true
}"

"{
  "jmperezperez": true,
  "thelinmichael": flase,
  "wizzler": flase
}"
*/

$jmperezperez = array(true);
// $thelinmichael = array(false);
// $wizzler = array(false);

 echo var_dump($jmperezperez)."<br>";


$jmperezperez_json = json_encode($jmperezperez);

echo var_dump($jmperezperez_json)."<br>";

 ?>
