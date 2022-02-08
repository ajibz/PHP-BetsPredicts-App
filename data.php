<?php

 


		$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=classic&iso_date=2021-05-18&federation=UEFA",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: football-prediction-api.p.rapidapi.com",
		"x-rapidapi-key: *************************************"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
		
		$result = json_decode($response,true);


	foreach ($result as $newdata) {
 foreach ($newdata as $Ndata) {
 	echo $Ndata["probabilities"][$Ndata["prediction"]];
 }
}
}

		

	


