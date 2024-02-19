<html>
    <head>

    <?php 
    error_reporting(0);
    include 'connection.php';
    $name = $_POST['user'];
    $sql = "DELETE from data where id = $name";

    if ($_POST['submit']){
        if (mysqli_query($conn, $sql)) {
            echo "Data deleted successfully";
        }
    }
    else {
        echo "Something went wrong";
    }

    ?>
    
</head>
    <body>
        <form action="add.php" method="POST">
            <h4>Give id to delete data</h4>

            ID: <input type="text" name="user">

            <input type="submit" name="submit" value="Send info">
        </form>
    </body>
</html>