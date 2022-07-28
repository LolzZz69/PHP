<?php

// $url ="http://localhost:5000/";

// $ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,$url);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// $set_data=curl_exec($ch);
// if($e = curl_error($ch)){
//     echo $e;
    
// }
// else{
//     // $decode =json_decode($set_data);
//     // print_r($decode);
//     echo $set_data;
// }



$data_is=array(
    'name'=> 'sai dada'
);
$data=http_build_query($data_is);
$url="http://localhost:5000/test";
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$resp= curl_exec($ch);

if ($e = curl_error($ch)){
    echo $e;
}
else {
   echo "succes";
}
curl_close($ch);





?>