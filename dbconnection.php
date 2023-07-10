<html>
    <head>
        <title>Database connection</title>
    </head>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="school";
        $conn=mysqli_connect($servername,$username,$password,$db);
        if($conn)
        {
            echo"Database connection successful";

        }
        else
        {
            die("Database connection unsuccessful due to ==>" .mysqli_connect_error());            
        }
        ?>
    </body>
</html>