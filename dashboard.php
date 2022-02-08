<!-- Beginning of Away Over 0.5 data fetch -->
<?php
session_start();
if (isset($_SESSION['user'])): ?>

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=away_over_05&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: **********************************"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $away_over_05 = json_decode($response,true);
  
}
 



?>
<!-- End of Away Over 0.5 data fetch -->


<!-- Beginning of BTTS data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=btts&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $btts = json_decode($response,true);
  
}
 



?>
<!-- End of BTTS data fetch -->


<!-- Beginning of  Over 2.5 data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=over_25&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $over_25 = json_decode($response,true);
  
}



?>
<!-- End of  Over 2.5 data fetch -->

<!-- Beginning of Home Over 0.5 data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=home_over_05&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $home_over_05 = json_decode($response,true);
  
}
 



?>
<!-- End of Home Over 0.5 data fetch -->

<!-- Beginning of Home Over 1.5 data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=home_over_15&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $home_over_15 = json_decode($response,true);
  
}



?>
<!-- End of Home Over 1.5 data fetch -->

<!-- Beginning of Away Over 1.5 data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=away_over_15&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $away_over_15 = json_decode($response,true);
  
}
 



?>
<!-- End of Away Over 1.5 data fetch -->

<!-- Beginning of  Over 3.5 data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=over_35&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $over_35 = json_decode($response,true);
  
}
 



?>
<!-- End of  Over 3.5 data fetch -->


<!-- Beginning of Classic data fetch -->

<?php

$date= date("Y-m-d");
  $curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=classic&iso_date=".$date;

curl_setopt_array($curl, [
  CURLOPT_URL => $url ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: football-prediction-api.p.rapidapi.com",
    "x-rapidapi-key: ec32fac765msh8307d0daea82c31p19aa88jsn5a4d23e5dbc3"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $classic = json_decode($response,true);
  
}
 



?>
<!-- End of Classic data fetch -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

   <meta name="description" content="Bet Predicts is a professional sport predictions site which provides Free  Away Over 0.5 football betting tips from professional sport tipsters.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
   

    <title>Bet Predicts- Free Away Over 0.5 Football Betting Tips</title>
  </head>
  <body>

<!-- Beginning Classic Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>Classic Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php

foreach ($classic as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
    echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $Ndata["competition_name"];
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}

?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Classic Bet tip table -->



<!-- Beginning BTTS Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>BTTS Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php

    foreach ($btts as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
  echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $Ndata["competition_name"];
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}



?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of BTTS Bet tip table -->

<!-- Beginning Over 3.5 Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3> Over 3.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php

foreach ($over_35 as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
  echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $newAbbr->abbreviate($Ndata["competition_name"]);
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}

?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Over 3.5 Bet tip table -->

<!-- Beginning Over 2.5 Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3> Over 2.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php


 
foreach ($over_25 as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
    echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $newAbbr->abbreviate($Ndata["competition_name"]);
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}


?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Over 2.5 Bet tip table -->



<!-- Beginning Home Over 0.5 Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>Home Over 0.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php
foreach ($home_over_05 as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
   echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $Ndata["competition_name"];
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}


?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Home Over 0.5 Bet tip table -->


<!-- Beginning Home Over 1.5 Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>Home Over 1.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php

 
foreach ($home_over_15 as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
    echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $newAbbr->abbreviate($Ndata["competition_name"]);
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}


?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Home Over 1.5 Bet tip table -->


<!-- Beginning Away Over 0.5 Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>Away Over 0.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php

foreach ($away_over_05 as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >=85) {
    echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $Ndata["competition_name"];
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }

  }
}


?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Away over 0.5 Bet tip table -->


<!-- Beginning Away Over 1.5 Bet Tip Table -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>Away Over 1.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
  </div>
  <div class="table-responsive">
<table class="table mt-1 table-sm table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Result</th>
       <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php


foreach ($away_over_15 as $data) {
 foreach ($data as $newData) {
  if ($newData["probabilities"][$newData["prediction"]] >= 85) {
    echo "<tr>";
echo "<td>";
echo date("H:i",strtotime($Ndata["start_date"]));
echo "</td>";
echo "<td>";
echo $newAbbr->abbreviate($Ndata["competition_name"]);
echo "</td>";
echo "<td>";
echo $Ndata["home_team"]."\t"."vs"."\t".$Ndata["away_team"];
echo "</td>";
echo "<td>";
echo $Ndata["prediction"];
echo "</td>";
echo "<td>";
echo $Ndata["result"];
echo "</td>";
echo "<td>";
echo $Ndata["status"];
echo "</td>";

echo "</tr>";
  }else{
    echo null;
    
 }
  }
}


?>
    
    
  </tbody>
</table> 
</div>
</div> 
<!-- End of Away Over 1.5 Bet tip table -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   



  </body>
</html>

<?php
else:
  header("location:administration.php");
endif;
?>






