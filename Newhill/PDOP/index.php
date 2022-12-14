
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h1>Register Form</h1>
<?php
require_once('PDOservice.php');
$pdoService = new PDOservice();
if(!$pdoService->checkUserTable()){
    echo "<form action='createTable.php' method='post'>
     <button type='submit' class='btn btn-primary'>Create User Table</button>
     </form>";
}else
    {echo "
    <form action='insert.php' method='POST'>
        
        <div class='mb-3'>
            <label for='email' class='form-label'>Email address</label>
            <input type='email' class='form-control' id='email' name='email' aria-describedby='emailHelp'>
            <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
        </div>
        <div class='mb-3'>
            <label for='firstname' class='form-label'>First Name</label>
            <input type='text' class='form-control' id='firstname' name='name' />
        </div>
        <div class='mb-3'>
            <label for='lastname' class='form-label'>Last Name</label>
            <input type='text' class='form-control' id='lastname' name='surname' />
        </div>
        <div class='mb-3'>
            <label for='Age' class='form-label'>Age</label>
            <input type='text' name='age' class='form-control' id='password'>
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
";
        }
        ?>
</div>
</body>
</html>
    