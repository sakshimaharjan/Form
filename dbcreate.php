<html>
    <head>
        <title>Database creation</title>
    </head>
    <body>
        <?php
        include 'mysql.php';
        echo"<br>";
        $sql="create database school";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo"Database created successfully";

        }
        else
        {
            die("Database creation unsuccessful due to ==>" .mysqli_connect_error());            
        }
        ?>
    </body>
</html>