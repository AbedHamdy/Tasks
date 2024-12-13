<?php 

    $num ="2";
    $res = match($num)
    {
        1=>"no",
        "2"=>"yes",
        default=>"invaled",
    };
    echo $res;

    // $num = "2";
    // switch ($num)
    // {
    //     case 1:
    //         echo "no";
    //         break;
    //     case 2:
    //         echo "yes";
    //         break;
    //     default :
    //         echo "invaled";
    //         break;
    // }





?>