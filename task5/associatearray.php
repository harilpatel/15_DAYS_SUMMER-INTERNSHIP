<?php
//Associate array
//Key
echo "<h1>Associate Array</h1>";
// method 1
$a[0]=10;
$a["c"]="computer";
$a["php"]="Web developement";
$a[4]="four";
$a[5]=50.50;
//method 2 
//method 2 use always this method TO CREATE	array
$a = array(
	0 => 10,
	"c" => "Cat",
	"php" => "Web",
	10 => "ten",
	50 => 50.10,
	);
// print array value
echo "C for ".$a['c'];
//print whole array
foreach($a as $value){
	echo "<br/>value is ".$value;
}
foreach($a as $key => $value){
	echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}
//inbuilt array function to debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";


?>
<!----/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */--->

