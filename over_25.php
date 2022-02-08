<!-- Beginning of Today Data Fetch -->

<?php

include_once("nav.php");
include_once("abbr.php");
$newAbbr = new Abbr();
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
    "x-rapidapi-key: ***********************************"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $result = json_decode($response,true);
  
}
 

?>
<!-- End of Today Data Fetch -->





<!-- Beginning of Yesterday Data Fetch -->

<?php
$date= date("Y-m-d",strtotime("yesterday"));
  $Yesterday_curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=over_25&iso_date=".$date;

curl_setopt_array($Yesterday_curl, [
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

$Yesterday_response = curl_exec($Yesterday_curl);
$err = curl_error($Yesterday_curl);

curl_close($Yesterday_curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $Yesterday_result = json_decode($Yesterday_response,true);
  
}
 

?>
<!-- End of Yesterday Data Fetch -->




<!-- Beginning of Tomorrow Data Fetch -->

<?php

$date= date("Y-m-d",strtotime("tomorrow"));
  $Tomorrow_curl = curl_init();
  $url =  "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=over_25&iso_date=".$date;

curl_setopt_array($Tomorrow_curl, [
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

$Tomorrow_response = curl_exec($Tomorrow_curl);
$err = curl_error($Tomorrow_curl);

curl_close($Tomorrow_curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $Tomorrow_result = json_decode($Tomorrow_response,true);
  
}
 

?>
<!-- End of Today Tomorrow data Fetch -->



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Bet Shaft is a professional sport predictions site which provides Free   Over 2.5 football betting tips from professional sport tipsters.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
   

    <title>Bet Shaft- Free Over 2.5 Football Betting Tips</title>
  </head>
  <body>



<div>

<center>

<div class=" container  mt-5">
	<div class="row  d-flex justify-content-center bg-info">
	<h1>Over 2.5 Bet Tips By Experts</h1>
	</div>
	<div class="row  d-flex justify-content-center bg-dark mt-5">
	<ul class="nav nav-tabs ">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#yesterday">Yesterday<br/><?php echo date(' jS F ',strtotime("yesterday"))?></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link active"  data-toggle="tab"  href="#today" >Today<br/><?php echo date(' jS F')?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#tomorrow"  data-toggle="tab" >Tomorrow<br/><?php echo date('jS F ',strtotime("tomorrow"))?></a>
  </li>

</ul>
</div>

<!-- Beginning of yesterday -->
<div class="tab-content ">
	<div class="tab-pane fade table-responsive" id="yesterday">
<table class="table table-striped table-sm table-bordered table-info">
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
        foreach ($Yesterday_result as $Ydata) {
          foreach ($Ydata as $newYdata) {
           if ($newYdata["probabilities"][$newYdata["prediction"]] >= 0.73 ) {
            echo "<tr>";
       echo "<td>";
echo date("H:i",strtotime($newYdata["start_date"]));
echo "</td>";
echo "<td>";
echo $newAbbr->abbreviate($newYdata["competition_name"]);
echo "</td>";
echo "<td>";
echo $newYdata["home_team"]."\t"."vs"."\t".$newYdata["away_team"];
echo "</td>";
echo "<td>";
echo $newYdata["prediction"];
echo "</td>";


echo "<td>";
echo $newYdata["result"];
echo "</td>";
echo "<td>";
echo $newYdata["status"];
echo "</td>";
       echo "</tr>";
        }
          }
        
        }

      ?>
     
   
    
  </tbody>
</table> 
</div>
 <!-- end of yesterday -->





<!-- Beginning of today -->
<div class="tab-pane table-responsive active " id="today">
<table class="table table-striped table-sm table-bordered table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Probability</th>
    </tr>
  </thead>
  <tbody>
     <?php
        foreach ($result as $newdata) {
        foreach ($newdata as $Ndata) {

           if ($Ndata["probabilities"][$Ndata["prediction"]] >= 0.73 ) {
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
echo round($Ndata["probabilities"][$Ndata["prediction"]] *100)."%";
echo "</td>";

       echo "</tr>";
        }
          }
        
        }

      ?>
    
  </tbody>
</table> 
</div> 
 <!-- end of today -->




<!-- Beginning of tomorrow -->
<div class="tab-pane table-responsive" id="tomorrow">
<table class="table table-striped table-sm table-bordered table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Leag</th>
      <th scope="col">Fixture</th>
      <th scope="col">Tips</th>
      <th scope="col">Probability</th>
    </tr>
  </thead>
  <tbody>
     <?php
        foreach ($Tomorrow_result as $Tdata) {
          foreach ($Tdata as $newTdata) {
           if ($newTdata["probabilities"][$newTdata["prediction"]] >= 0.73 ) {
            echo "<tr>";
       echo "<td>";
echo date("H:i:s",strtotime($newTdata["start_date"]));
echo "</td>";
echo "<td>";
echo $newAbbr->abbreviate($newTdata["competition_name"]);
echo "</td>";
echo "<td>";
echo $newTdata["home_team"]."\t"."vs"."\t".$newTdata["away_team"];
echo "</td>";
echo "<td>";
echo $newTdata["prediction"];
echo "</td>";

echo "<td>";
echo round($newTdata["probabilities"][$newTdata["prediction"]] *100)."%";
echo "</td>";

       echo "</tr>";
        }
          }
        
        }

      ?>
     
    
  </tbody>
</table>  
</div> 
<!-- end of tomorrow -->
</div>
</div>
</center>

<!-- Beginning of all todays bets -->

<div class="container " style="margin-top: 40px">
  <div class="bg-info d-flex justify-content-center">
    <h3>Over 2.5 Match Predictions for today <?php echo date('l jS \of F Y ')?> </h3>
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


foreach ($result as $newdata) {
 foreach ($newdata as $Ndata) {
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

 }
}

?>
    
    
  </tbody>
</table>
</div> 
</div> 
<!-- End of all todays bets -->




<?php
  include_once("bottomlink.php")

?>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   



  </body>
</html>
