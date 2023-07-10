<html>
    <head>
        <title>Connection to mysql</title>
    </head>
    <body>
        <?php
        $conn=mysqli_connect("localhost","root");
        if(!$conn)
        {
            die("Connection failed due to ==>" .mysqli_connect_error());
        }
        else
        {
            echo"Successfully connected to mysql";
        }
        ?>
    </body>
</html>