<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://10.33.34.121/create_header.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "id_user=12345678&nama=Vania Paramita"); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "token: dm5LmAW6r93zIszYTddupvZaEFs6MSf1wHpxsXHHyBesN3IXzu ",
));            
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

$server_output = curl_exec($ch);

curl_close ($ch);