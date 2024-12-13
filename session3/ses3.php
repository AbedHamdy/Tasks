<?php 


    // null operator 

    // function login($username, $password)
    // {
    //     $res=0;
    //     $ures=0;
    //     $pres=0;
    //     if($username == "abed")
    //     {
    //         $res++; 
    //     }
    //     else 
    //     {
    //         $ures++;
    //     }

    //     if($password == "123456")
    //     {
    //         $res++;
    //     }
    //     else 
    //     {
    //         $pres++;
    //     }

    //     if($res == 2)
    //     {
    //         echo "Login successful";
    //     }
    //     else if($ures == 1)
    //     {
    //         echo "user name error";
    //     }
    //     else if ($pres == 1)
    //     {
    //         echo "password error";
    //     }
    // }

    // login("abed" , "123456");


    // array
    // pop , push , shift , merge 
    
    $users = 
    [
        [
            "age" =>26 ,
            "firsname" => "mohammed"
        ],
        [
            "age" =>26 ,
            "firsname" => "ahmed"
        ],
        [
            "age" =>26 ,
            "firsname" => "mohammed"
        ],
    ];

    for ($i = 0; $i < count($users); $i++)
    {
        // print_r($users[$i]) . "<br>";
        echo "name : " . $users[$i]["firsname"] . " , " . "age : " . $users[$i]["age"] . "<br>";
    }











?>