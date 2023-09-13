
<?php
include("baglanti.php");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://data.ibb.gov.tr/api/3/action/datastore_search?resource_id=511c5034-0a1c-4c77-9831-157f30e62aee&limit=5',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);


$data=json_decode($response,true);


foreach ($data['result']['records'] as $row) {
 
  $date=$row['transition_date'];
  $hour=$row['transition_hour'];
  $typeId=$row['transport_type_id'];
  $type=$row['road_type'];
  $line=$row['line'];
  $transfer=$row['transfer_type'];
  $passage=$row['number_of_passage'];
  $passenger=$row['number_of_passenger'];


  $sql = "INSERT INTO ocakayiulasim(transition_date, transition_hour, transport_type_id, road_type, line, transfer_type, number_of_passage,
  number_of_passenger) VALUES ('$date','$hour','$typeId','$type','$line','$transfer','$passage','$passenger')";
  $stmt = $baglan->prepare($sql);

   
}

curl_close($curl);

?>