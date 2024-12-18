<?php 


// 1
    // function average($arr)
    // {
    //     $sum = 0;
    //     $num = 0;
    //     foreach($arr as $value)
    //     {
    //         $sum += $value;
    //         $num++;
    //     }
    //     return $sum / $num;
    // }

    // $arr=[10,20,30,40];
    // echo average($arr);

// 2
    // function isPrime($num)
    // {
    //     if ($num <= 1)
    //     {
    //         return  false;
    //     }
        
    //     for($i = 2 ; $i < $num ; $i++)
    //     {
    //         if($num % 2 == 0)
    //         {
    //             return false;
    //         }
    //     }
    //     return true;
    // }


    // if(isPrime(13) == true)
    // {
    //     echo "true";
    // }
    // else 
    // {
    //     echo "false";
    // }

// 3
    // function reverse($text)
    // {
    //     for ($i = strlen($text) - 1 ; $i >= 0 ; $i--)
    //     {
    //         echo $text[$i];
    //     }
    // }

    // reverse("hello");

// 4
    // function check($arr , $num)
    // {
    //     foreach($arr as $number)
    //     {
    //         if ($num == $number)
    //         {
    //             return true;
    //         }
    //     }
    //     return false;
    // }
    // function CountDuplicate ($numbers)
    // {
    //     $arr = [];
    //     foreach($numbers as $number1)
    //     {
    //         $count = 0;
    //         if(!check($arr,$number1))
    //         {
    //             array_push($arr,$number1);
    //             foreach($numbers as $number2)
    //             {
    //                 if($number1 == $number2)
    //                 {
    //                     $count++;
    //                 }
    //             }
    //             echo $number1 . " => " . $count . "<br>";
    //         }
    //     }
    // }

    // $numbers = [1,2,2,3,3,3,4];
    // CountDuplicate($numbers);


    //     function countDuplicates($arr) 
    //     {
    //         $counts = [];
        
    //         foreach ($arr as $num) 
    //         {
    //             if (isset($counts[$num])) 
    //             {
    //                 $counts[$num]++;
    //             } 
    //             else 
    //             {
    //                 $counts[$num] = 1;
    //             }
    //         }
        
    //         return $counts;
    //     }
    //     $arr = [1, 2, 2, 3, 3, 3, 4];
    // print_r(countDuplicates($arr));

// 5
    // function convertValue(string $value)
    // {
    //     if($value == "true")
    //     {
    //         $new_value = (bool)$value;
    //         echo "true" . " (" . gettype($new_value) . ")" . "<br>";
    //     }
    //     else if($value == "false")
    //     {
    //         $new_value = (bool)$value;
    //         echo "false" . " (" . gettype($new_value) . ")" . "<br>";
    //     }
    //     else if(is_numeric($value))
    //     {
    //         if(strpos($value , "."))
    //         {
    //             $new_value = (float)$value;
    //             echo $new_value . " (" . gettype($new_value) . ")" . "<br>";
    //         }
    //         else 
    //         {
    //             $new_value = (int)$value;
    //             echo $new_value . " (" . gettype($new_value) . ")" . "<br>";
    //         }
    //     }
    //     else 
    //     {
    //         echo '"' .  $value . '"' . " (" . gettype($value) . ")" . "<br>";
    //     }
    // }

    // echo convertValue("123"); 
    // echo "<br>";
    // echo convertValue("3.4");
    // echo "<br>";
    // echo convertValue("true");
    // echo "<br>";
    // echo convertValue("false");
    // echo "<br>";
    // echo convertValue("hello");

//====================================================//============================================// 














?>