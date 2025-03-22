<?php
// task 1
echo" task 1------------------------- <br>";
 $multiFunc = function($num1 ,$num2){
    
     
     return $num1 * $num2;
 };
 echo $multiFunc(5, 6);

 
echo " <br>";
 $divideFunc = function($num1 ,$num2){
    if ($num2 ==0) {
      echo "you cant divide by zero";
    }else{
         return $num1 / $num2;
    }
     
    
 };
 echo $divideFunc(12, 0) ." <br>";
 echo $divideFunc(12, 5) ." <br>";
 
echo " <br>";


 echo" task 2------------------------- <br>";

$groupNumbers =[10,20,30,40,50];
$mapping = array_map( fn($oneNumber)=>$oneNumber*2,$groupNumbers);
print_r($mapping);
echo " <br>";
$greater_30 = array_filter($groupNumbers, fn($oneNumber)=>$oneNumber>30);
print_r($greater_30);
echo " <br>";

$sum_by_reduce = array_reduce($groupNumbers,fn($firstpar,$secondpar)=>$firstpar+$secondpar,0);
echo $sum_by_reduce . " <br>";

 $searching =array_search(30,$groupNumbers);
 if($searching  !== false){
    $groupNumbers[$searching] =300;
    
 };
 print_r($groupNumbers);

 echo " <br>";
 

 // task 3  -------------------
 echo" task 3------------------------- <br>";
 $squere_anonymous =function ($numero){
     return $numero ** 2;
 };
 echo $squere_anonymous(5)."<br>";
$third_array =[2, 4, 6, 8];
 $squere_third_array = array_map($squere_anonymous ,$third_array);
 print_r($squere_third_array);

 echo " <br>";
 $multi_by_reduce = array_reduce($third_array,function ($carry, $num){
   return $carry * $num;
 },1);
 echo $multi_by_reduce ;
 echo " <br>";



 // task 4 date and time -------------------
echo" task 4------------------------ <br>";
function counter(){
  static $value =0;
  $value++;
  echo $value . "<br> ";
};
counter();
counter();
counter();
counter();

echo " <br>";



// task 5 date and time -------------------
echo" task 5------------------------ <br>";
date_default_timezone_set("Africa/Cairo");
echo "the current time in cairo is : " . date("h:i:s A") ."<br>";

 date_default_timezone_set("America/New_York");
echo "the current time in New_York is : " . date("h:i:s A") ."<br>";

$time_of_10days = strtotime('+10 days');
echo "the current time after 10 days from now is : " . date('Y-m-d', $time_of_10days )."<br>";

$old_date= strtotime("2024-05-10 12:00");
echo $old_date ."<br>";
echo  date('Y-m-d h:i:s A', $old_date )."<br>";

// task 6 date and time -------------------
echo" task 6------------------------ <br>";

$array1 = ["apple", "banana", "cherry"];
$array2 = [100, 200, 300];

$combaning = array_combine($array1,$array2);

print_r($combaning);
echo "<br>";
$merging = array_merge($array1,$array2);

print_r($merging);
echo "<br>";
$array3 = [100, 200, 300, 400, 500, 600];
$array4 = [100, 200, 300];
$difference  = array_diff($array3,$array4);

print_r($difference);
echo "<br>";

$array5 = ["name"=> "ahmed" ,"age"=>"15","car"=>"bmv"];
$keys =array_keys($array5);
$values =array_values($array5);

print_r($keys);
echo "<br>";
print_r($values);
echo "<br>";

//task 7 -------------------
echo" task 7------------------------- <br>";
$squere = fn($number1)=> $number1 **2;
echo $squere(10);
echo "<br>";
$numbers =[1,2,3,4,];
$squere2 = array_map($squere,$numbers);
print_r($squere2);
echo "<br>";
function callingback( $callback ,$arr  ){
    return array_map($callback ,$arr );
    
};
$numbers3 =[2,4,6,8,10];
$squering =  callingback($squere ,$numbers3  );

print_r($squering);