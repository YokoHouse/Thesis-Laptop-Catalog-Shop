<html>
    <head>

    <?php 
    error_reporting(0)
    include 'connection.php';
    $name = $_POST['user'];
    $emai = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "INSERT into data (fname, email, pass) values ('$name','$email','$pass')";

    if ($_POST['submit']){
        if (mysqli_query($conn, $sql)) {
            echo "Data added successfully";
        }
    }
    else {
        echo "Something went wrong";
    }

    ?>
    
</head>
    <body>
        <form action="add.php" method="POST">
            Name: <input type="text" name="user">
            Email: <input type="email" name="email">
            Password: <input type="password" name="pass">
            <input type="submit" name="submit" value="Send info">
        </form>
    </body>
</html>