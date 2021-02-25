<?php
//endpoint: https://api.spotify.com/v1/playlists/{playlist_id}/followers/contains
//consuming a ws with php curl
//response: json in array format
try{
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQApOPd8NuzTmuKY77DBxevZp3wd-Ikx-Z26E7UY-9syaeAjI1oyXgK1AfmvxsqC0_6OWS6viVhk-ur8Ig1jzxVa_hQXJH2ntDjruFuPD5D4bmSclktEn2tHr7S9c_WGalaBbmq_";
    header('Content-Type: application/json');


     $ch = curl_init('https://api.spotify.com/v1/playlists/3cEYpjA9oz9GiPac4AsH4n/followers/contains?ids=jmperezperez%2Cthelinmichael%2Cwizzler');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept,$header_content_type,$header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n"; //string
    $array_result = json_decode($result);
    echo var_dump($array_result);

    foreach ($array_result as $result) {
      if ($result == 1) {
        echo "\ntrue\n";
      }else{
        echo "false\n";
      }
    }


  }catch(Exception $e){
    echo "S'ha capturat la exepció: ". $e->getMessage()."<br>";
  }
 ?>
