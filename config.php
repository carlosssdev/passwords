<?php
$apiKey = "AIzaSyCWHQRfTuKDscf5PUiEjRaa3HL2xUfhwfI";
$authDomain = "public-passwords.firebaseapp.com";
$databaseURL = "https://public-passwords-default-rtdb.firebaseio.com/";
$projectId = "public-passwords";
$storageBucket = "public-passwords.appspot.com";
$messagingSenderId = "492634282672";
$appId = "1:492634282672:web:f2ffd33394a20845aa7975";

$config = [
  'apiKey' => $apiKey,
  'authDomain' => $authDomain,
  'databaseURL' => $databaseURL,
  'projectId' => $projectId,
  'storageBucket' => $storageBucket,
  'messagingSenderId' => $messagingSenderId,
  'appId' => $appId
];

echo json_encode($config);
?>
