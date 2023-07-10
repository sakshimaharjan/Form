<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <?php
        include 'dbconnection.php';
        echo"<br>";
        $sql="update inf set sname='Gita' where sid = 2";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo"Data updated successfully";
        }
        ?>
    </body>
</html>