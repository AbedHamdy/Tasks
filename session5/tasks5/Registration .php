<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Username" id="name">
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email" id="email">
            <br>
            <br>
            <label for="password">Pass</label>
            <input type="password" name="password" placeholder="Enter Password" id="password">
            <br>
            <br>
            <label for="phone">Phone</label>
            <input type="number" name="phone" placeholder="Enter Phone" id="phone">
            <br>
            <br>
            <button>submit</button>
        </form>

        <?php 

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                echo "name : " . $_POST["name"] . "<br>";
                echo "email : " . $_POST["email"] . "<br>";
                echo "password : " . $_POST["password"] . "<br>";
                echo "phone : " . $_POST["phone"] . "<br>";
            }
        
        
        
        
        
        ?>



    </body>
</html>