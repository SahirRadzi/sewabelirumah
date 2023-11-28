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

// $sql = $conn->prepare("SELECT * FROM `property`");
// $sql->execute();
// while ($rows = $sql->fetch(PDO::FETCH_ASSOC)){
//    $cur_time = ($rows['date']);

//    echo time_ago($cur_time);

// }

//    $sql = $conn->prepare("SELECT * FROM `property`");
//    $sql->execute();
//    if($sql->rowCount() > 0);
//    while($rows = $sql->fetch(PDO::FETCH_ASSOC));
//       $cur_time = $rows['date'];
 
// function time_ago ($cur_time){
      
//    global $cur_time;
//    $time_ = time() - $cur_time;

//    $seconds = $time_;
//    $minutes = round($time_ / 60 );
//    $hours = round($time_ / 3600 );
//    $days = round($time_ / 86400 );
//    $weeks = round($time_ / 604800 );
//    $months = round($time_ / 2419200 );
//    $years = round($time_ / 29030400 );

//    //Seconds
//    if ($seconds <= 60 ){
//       $time = "$seconds seconds ago";

//    //Minutes
//    }elseif ($minutes <= 60 ){
      
//       if($minutes == 1 ){
//          $time = "1 minute ago";
//       }else{
//          $time = "$minutes minutes ago";

//       }
//    //Hours
//    }elseif ($hours <= 24 ){

//       if($hours == 1){
//          $time = "1 hour ago";

//       }else{
//          $time = "$hours hours ago";
//       }
//    //Days
//    }elseif ($days <= 7){

//       if($days == 1){
//          $time = "1 day ago";
//       }else{
//          $time = "$days days ago";

//       }
//    //Weeks
//    }elseif ($weeks <= 4){

//       if($weeks == 1){
//          $time = "1 week ago";
//       }else{
//          $time = "$weeks weeks ago";
//       }
//    //Months
//    }elseif ($months <= 12){

//       if($months == 1){
//          $time = "1 month ago";
//       }else{
//          $time = "$months months ago";
//       }
//    //Years
//    }else{
//       if($years == 1){
//          $time = "1 year ago";
//       }else{
//          $time = "$years years ago";
//       }

//    }

//    return $time;
// }

?>