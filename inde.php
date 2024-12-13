<?php 


// 1
    // for ($i = 1 ; $i <=10 ; $i++)
    // {
    //     if ($i == 10)
    //     {
    //         echo $i;
    //     }
    //     else 
    //     {
    //         echo $i . "-";
    //     }
    // }

// 2
    // $numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ];
    // $new_number = array_unique($numbers);
    // sort($new_number);
    // echo "<pre>";
    // print_r($new_number); 
    // echo "</pre>";

// 3
    // $text = "eraasoft";
    // echo substr_count($text , "r");

// 4
    // for ($i = 1 ; $i <= 50 ; $i++)
    // {
    //     if ($i % 3 == 0 && $i % 5 == 0)
    //     {
    //         echo "FizzBuzz" . "<br>";
    //     }
    //     else if ($i % 3 == 0)
    //     {
    //         echo "Fizz" . "<br>";
    //     }
    //     else if ($i % 5 == 0)
    //     {
    //         echo "Buzz" . "<br>";
    //     }
    //     else 
    //     {
    //         echo $i . "<br>";
    //     }
    // }

// 5
    // $sum = 0;
    // for ($i = 0 ; $i <= 30 ; $i++)
    // {
    //     $sum += $i;
    // }
    // echo " The sum of the numbers 0 to 30 = " . $sum;

// 6
    // $numbers = [5 , 15 , -10 , 100 , 250 , 0 , 1];
    // $check_num = $numbers[0];
    // for($i = 0 ; $i < count($numbers) ; $i++)
    // {
    //     if($numbers[$i] > $check_num)
    //     {
    //         $check_num = $numbers[$i];
    //     }
    // }
    // echo $check_num;

// 7
    // $numbers = [5 , 15 , -10 , 100 , 250 , 0 , 1];
    // $check_num = $numbers[0];
    // for($i = 0 ; $i < count($numbers) ; $i++)
    // {
    //     if($numbers[$i] < $check_num)
    //     {
    //         $check_num = $numbers[$i];
    //     }
    // }
    // echo $check_num;

// 8
    // function factorial($num)
    // {
    //     $fact = 1;
    //     for($i = $num ; $i >=1 ; $i--)
    //     {
    //         $fact *= $i;
    //     }
    //     echo $fact;
    // }

    // factorial(6);

// 9
    // for ($i = 1 ; $i <= 15 ; $i++)
    // {
    //     if ($i % 2 != 0)
    //     {
    //         echo $i . "<br>";
    //     }
    // }

// 10
    // for ($i = 1 ; $i <= 15 ; $i++)
    // {
    //     if ($i % 2 == 0)
    //     {
    //         echo $i . "<br>";
    //     }
    // }

// 11
    // $person = array("name" => "John", "age" => 30, "city" => "New York");
    // foreach($person as $key => $value)
    // {
    //     echo $key . " : " . $value . "<br>";
    // }

// 12
    // $sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
    // $sum = 0;
    // foreach($sales as $key => $value)
    // {
    //     $sum += $value;
    // }
    // echo $sum;

// 13
    // for($i = 0; $i <= 12 ; $i++)
    // {
    //     echo "8 * " . $i . " = " . 8*$i . "<br>";
    // }

// 14
    // $students = array
    // (
    //     array("name" => "John", "age" => 20, "grade" => "A"),
    //     array("name" => "Mary", "age" => 22, "grade" => "B"),
    //     array("name" => "Tom", "age" => 18, "grade" => "A")
    // );

    // foreach($students as $student)
    // {
    //     echo "name : " . $student["name"] . "<br>";
    //     echo "age : " . $student["age"] . "<br>";
    //     echo "grade : " . $student["grade"] . "<br>";
    // }

// 15
    // $num = 1;
    // do
    // {
    //     if($num % 3 == 0)
    //     {
    //         echo $num . "<br>";
    //     }
    //     $num++;
    // }
    // while($num <= 100);


?>