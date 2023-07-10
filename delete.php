<html>
    <head>
        <title>Delete</title>
    </head>
    <body>
        <?php
        include 'dbconnection.php';
        echo"<br>";
        $sql="delete from inf where sid = 2";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo"Data deleted successfully";
        }
        ?>
    </body>
</html>