<?php

   $db_name = 'mysql:host=localhost;dbname=2nd_home_db';
   $db_user_name = 'root';
   $db_user_pass = '';

   $conn = new PDO($db_name, $db_user_name, $db_user_pass);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

  function create_forgot_pass(){
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;

    for($i = 0; $i < 8; $i++){
       $n = mt_rand(0, $length);
       $rand[] = $str[$n];
    }
    return implode($rand);
 }



//  $sql = $conn->prepare("SELECT * FROM `property` WHERE date = ?");
//  $sql->execute();
//  $posted_at = ($rows['date']);

//  function convertToUnixTimestamp($value) {
//    list($date, $time) = explode('', $value);
//    list($year, $month, $day) = explode('-', $date);
//    list($hour, $minutes, $seconds) = explode(':',$time);

//    $unit_timestamp = mktime($hour, $minutes, $seconds, $month, $day, $year);

//    return $unit_timestamp;
   
//  }

//  function convertToAgoFormat($timestamp){

//    $diffBtwCurrentTimeAndTimestamp = time() - $timestamp;
//    $periodsString = ["sec", "min", "hour", "day", "week", "month", "year", "decade"];
//    $periodsNumber = ["60", "60", "24", "7", "4.35", "12", "10"];

//    for($iterator = 0; $diffBtwCurrentTimeAndTimestamp >= $periodsNumber[$iterator]; $iterator++)

//       $diffBtwCurrentTimeAndTimestamp /= $periodsNumber[$iterator];
//       $diffBtwCurrentTimeAndTimestamp = round($diffBtwCurrentTimeAndTimestamp);

//       if($diffBtwCurrentTimeAndTimestamp != 1) $periodsString[$iterator].="s";

//       $output = "$diffBtwCurrentTimeAndTimestamp $periodsString[$iterator]"; //2 days

//       return $output." ago";


//  }

//  $unixTimestamp = convertToUnixTimestamp($posted_at);


?>