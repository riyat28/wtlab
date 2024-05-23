<?php
session_start();

$max_sessions=3;
$id=0;

if(!isset($_SESSION['session_count'])){
    $_SESSION['session_count']=1;
}
else{
    $_SESSION['session_count']++;
    $id++;

    if($_SESSION['session_count']>$max_sessions || $id==$max_sessions){
        echo "ID VALUE".$id.".";
        session_unset();
        session_destroy();
        echo "Maximum session limit exceeded. Please log in again.";
        exit;
    }
}
echo "Session active. Session count: " . $_SESSION['session_count'];
?>
