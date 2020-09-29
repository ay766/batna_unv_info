
<?php
function setInterval($func = null, $interval = 0, $times = 0){
  if( ($func == null) || (!function_exists($func)) ){
    throw new Exception('We need a valid function.');
  }

  /*
  usleep delays execution by the given number of microseconds.
  JavaScript setInterval uses milliseconds. microsecond = one 
  millionth of a second. millisecond = 1/1000 of a second.
  Multiplying $interval by 1000 to mimic JS.
  */


  $seconds = $interval * 1000;

  /*
  If $times > 0, we will execute the number of times specified.
  Otherwise, we will execute until the client aborts the script.
  */

  if($times > 0){
    
    $i = 0;
    
    while($i < $times){
        call_user_func($func);
        $i++;
        usleep( $seconds );
    }
  } else {
    
    while(true){
        call_user_func($func); // Call the function you've defined.
        usleep( $seconds );
    }
  }
}

function doit(){
  print 'done!<br>';
}


setInterval('doit', 5000); // 
setInterval('doit', 1000, 100);

?>