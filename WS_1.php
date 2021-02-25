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
echo "<b>PHP Array</b><br>";
 echo var_dump($jmperezperez)."<br>";
 echo print_r($jmperezperez)."<br><br>";


$jmperezperez_json = json_encode($jmperezperez);
echo "<b>Jason Encode</b><br>";

echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br><br>";

echo "<b>Jason Decode</b><br>";
$jmperezperez_json_decode = json_decode($jmperezperez_json, true);
echo var_dump($jmperezperez_json_decode)."<br>";
echo print_r($jmperezperez_json_decode)."<br><br>";

echo $jmperezperez_json_decode[0]."<br><br>";

$elements_3 = '{ "jmperezperez": true, "thelinmichael": false, "wizzler": false}';
echo "<b>3 elements</b><br>";
echo var_dump($elements_3)."<br>";
echo print_r($elements_3)."<br>";

$resul_arr_ass = json_decode($elements_3, true);
echo "jmperezperez ".$resul_arr_ass['jmperezperez']."<br>";
echo "thelinmichael ".$resul_arr_ass['thelinmichael']."<br>";
echo "wizzler ".$resul_arr_ass['wizzler']."<br>";
 ?>
