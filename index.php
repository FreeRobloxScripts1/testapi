<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://tiktok-download-without-watermark.p.rapidapi.com/analysis?url=https%3A%2F%2Fwww.tiktok.com%2F%40tiktok%2Fvideo%2F7232384225691880746&hd=0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: tiktok-download-without-watermark.p.rapidapi.com",
		"x-rapidapi-key: 729b71e6b8mshe9a30760049ad54p1fa942jsn5217dd82fdba"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
