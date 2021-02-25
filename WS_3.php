<?php
//endpoint: https://api.spotify.com/v1/users/{user_id}
//consuming a ws with php curl
//response: json in string format
//transform the response into an associative array
try{
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQCWnjZlZ8MnHfXTsuAEgNIt8WrluF9kLEos6U8wyOqGLFBAZOfyIRZRyYhZ71yuhQQ1RMhllH767HpyaVorY0LH5oWMJWljMeZmx6n7nvEIKMD_rHWLN5zDKXw33q3oteRaEiaJ";
    header('Content-Type: application/json');

     $ch = curl_init('https://api.spotify.com/v1/users/smedjan');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept,$header_content_type,$header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n";//string
    $json_result = json_decode($result, true);//true: to be used as an associative array
    echo "display_name: ".$json_result['display_name']."\n";
    echo "href: ".$json_result['href']."\n";
    echo "id: ".$json_result['id']."\n";
    echo "type: ".$json_result['type']."\n";

  }catch(Exception $e){
      echo "S'ha capturat la exepció: ". $e->getMessage()."<br>";
    }
 ?>
