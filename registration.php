<?php

// echo $_GET['p'];
// echo $_POST['p'];

if (isset($_POST['username'])) {

    $hashedPassword = hashMyPassword($_POST['password']);
    if(false == doesEmailContainNetmark($_POST['username'])){
        die("To nie jest adres email");
    }

    // validate password here


    $query = "INSERT INTO `karakter`.`user` (
               `id`, 
               `username`, 
               `password`, 
               `addedAt`
               ) VALUES (
                NULL, 
               '" . $_POST['username'] . "', 
               '" . $hashedPassword . "', 
               '".date("Y-m-d H:i:s")."'
               )";

    $result = mysqli_query($connection, $query);
	
	$userAdded = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Rejestracji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;


        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 340px;
            margin-top: 40px;
            text-align: center;

        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        nav {

            background-color: #555;
            padding: 10px;
            width: 100%;
        }
        nav a {
            color: #fff;

            text-decoration: none;
        }
    </style>
</head>
<body>

<nav>
    <a href="#">Strona Główna</a>
    <a href="#">Logowanie</a>
    <a href="#">Rejestracja</a>
</nav>
<br>

<?php
if(isset($userAdded)){
    echo "Dziękujemy za rejestrację";

}
else{
    ?>
    <form method="POST">
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="username" required>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Zarejestruj się</button>
</form>
<?php
}
?>


</body>
</html>
