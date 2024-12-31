<?php 


    $name = $_POST["name"];
    $email = $_POST["email"];
    $salary = $_POST["salary"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $user = 
    [
        "name" => $name,
        "email" => $email,
        "salary" => $salary,
        "gender" => $gender,
        "password" => $password
    ];


    // file_put_contents("../database/Employee.json" , json_encode($user) , JSON_PRETTY_PRINT);
    $users = file_get_contents("../database/Employee.json");
    $data = json_decode($users);
    var_dump($data ->users[1] ->name);


    






?>