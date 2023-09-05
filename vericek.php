
<?php
// $vtc_events = file_get_contents("https://data.ibb.gov.tr/api/3/action/datastore_search?resource_id=511c5034-0a1c-4c77-9831-157f30e62aee&limit=5");
// $vtce = json_decode($vtc_events);
// $users = $vtce->response->attendances->confirmed_users;
// foreach ($users as $user) {
//   echo $user->username . "<br>";
// }

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

curl_close($curl);
return $response;

?>