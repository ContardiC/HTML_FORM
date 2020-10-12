<?php

$TAG_SPACE="<br/>";
$user=$_POST['user'];
$comment=$_POST['comment'];
$gender=$_POST['gender'];
if(isset($_POST['sport_1'])){
    $sport_1=$_POST['sport_1'];
    echo $sport_1.$TAG_SPACE;
}
if(isset($_POST['sport_2'])){
    $sport_2=$_POST['sport_2'];
    echo $sport_2.$TAG_SPACE;
}
$user=trim($user);
echo strlen($user).$TAG_SPACE;
echo $user;
