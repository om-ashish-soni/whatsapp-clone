<?php
///////////////////////////dsjfdsfdksfl
    // session_start();
    $day=date('j');
    $month=date('M');
    $year=date('Y');
    $last_seen="";
    $last_seen.=$day;
    $last_seen.=$month;
    $last_seen.=" , ";
    $last_seen.=$year;
    echo $last_seen."<br>";
    echo $day." th ".$month." , ".$year;
    $_SESSION['last_seen']=$last_seen;
////////////////////////////////kdsflfsdfs
    
?>