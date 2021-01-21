<?php
$img_array = glob("image/*.{gif,jpg,png}",GLOB_BRACE); 
$img = array_rand($img_array); 
$dz = $img_array[$img];
header("Location:".$dz);

$arr=file('image.txt');
$n=count($arr)-1;
for ($i=1;$i<=1;$i++){
  $x=rand(0,$n);
  header("Location:".$arr[$x],"\n");
}
?> 
