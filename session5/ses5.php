<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="number" name="salary" placeholder="salary">
            <input type="number" name="phone" placeholder="phone">
            <select name="gender" id="">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            <input type="text" name="title" placeholder="title">

            <button>set</button>
        </form>
    </body>

    // if($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    // echo $_POST["name"] . "<br />";
    // echo $_POST["email"] . "<br />";
    // echo $_POST["salary"] . "<br />";
    // echo $_POST["phone"] . "<br />";
    // echo $_POST["gender"] . "<br />";
    // echo $_POST["title"] . "<br />";
    // }


</html> -->


<?php 
$users = [
    [
        "Id" => 1,
        "First" => "John",
        "Last" => "Doe",
        "Age" => 30,
        "Salary" => 50000,
        "Title" => "Software Engineer"
    ],
    [
        "Id" => 2,
        "First" => "Jane",
        "Last" => "Smith",
        "Age" => 28,
        "Salary" => 60000,
        "Title" => "Project Manager"
    ],
    [
        "Id" => 3,
        "First" => "Emily",
        "Last" => "Johnson",
        "Age" => 35,
        "Salary" => 55000,
        "Title" => "UX Designer"
    ],
    [
        "Id" => 4,
        "First" => "Michael",
        "Last" => "Brown",
        "Age" => 40,
        "Salary" => 75000,
        "Title" => "Technical Lead"
    ],
    [
        "Id" => 5,
        "First" => "Sarah",
        "Last" => "Wilson",
        "Age" => 32,
        "Salary" => 62000,
        "Title" => "QA Analyst"
    ],
    [
        "Id" => 6,
        "First" => "David",
        "Last" => "Clark",
        "Age" => 29,
        "Salary" => 58000,
        "Title" => "DevOps Engineer"
    ],
    [
        "Id" => 7,
        "First" => "Laura",
        "Last" => "Martinez",
        "Age" => 33,
        "Salary" => 61000,
        "Title" => "Data Analyst"
    ],
    [
        "Id" => 8,
        "First" => "Chris",
        "Last" => "Taylor",
        "Age" => 27,
        "Salary" => 52000,
        "Title" => "Frontend Developer"
    ],
    [
        "Id" => 9,
        "First" => "Anna",
        "Last" => "Davis",
        "Age" => 36,
        "Salary" => 70000,
        "Title" => "Backend Developer"
    ],
    [
        "Id" => 10,
        "First" => "Robert",
        "Last" => "Anderson",
        "Age" => 38,
        "Salary" => 80000,
        "Title" => "Solutions Architect"
    ]
];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">age</th>
                <th scope="col">salary</th>
                <th scope="col">title</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) : ?>
                <tr>
                    <th scope="row"><?php echo $user["Id"] ?></th>
                    <td><?php echo $user["First"] ?></td>
                    <td><?php echo $user["Last"] ?></td>
                    <td><?php echo $user["Age"] ?></td>
                    <td><?php echo $user["Salary"] ?></td>
                    <td><?php echo $user["Title"] ?></td>
                </tr>
            <?php endforeach; ?>            
        </tbody>
    </table>
</body>

</html>