<?php
$server = "localhost";
$servername = "root";
$serverPassword = "";
$DBname = "register";

$conn = mysqli_connect($server, $servername,$serverPassword,$DBname);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Name<input type="text" name="name"></label>
        <label>Email<input type="email" name="email"></label>
        <label for="">Rôle
            <select name="role" id="">
                <?php
                $sql = "SELECT * FROM role";
                $role = mysqli_query($conn,$sql);
                $row = $role -> fetch_assoc();
                    echo "<option value=".$row["id"].">".$row["role"]."</option>";
                ?>
            </select>
        </label>
        <button type="submit" name="ok">Save</button>
    </form>
    <?php
    if(isset($_POST["ok"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $role = $_POST["role"];
    $sql = "INSERT INTO users(name, email, role_id) VALUES ('$name','$email','$role')";
    $exe = mysqli_query($conn,$sql);
    

    }
    ?>
</body>
</html>