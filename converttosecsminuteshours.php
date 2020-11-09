<?php

function secToHr($seconds) {
  $hours = floor($seconds / 3600);
  $minutes = floor(($seconds / 60) % 60);
  $seconds = $seconds % 60;


  if ($minutes > 1){
$minutestime = 'minutes';
  }
  else{
$minutestime = 'minute';

  }
  if ($seconds > 1){
    $secondstime = 'seconds';
      }
      else{
        $secondstime = 'second';
    
      }
  return $hours > 0 ? "$hours hours, $minutes $minutestime " : ($minutes > 0 ? "$minutes $minutestime, $seconds $secondstime " : "$seconds $secondstime ");
}

// call the function

secToHr(290);




?>