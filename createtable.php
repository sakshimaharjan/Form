<html>
    <head>
        <title>Table Creation</title>
    </head>
    <body>
        <?php
        include 'dbconnection.php';
        echo"<br>";
        $sql="create table inf(Id int, Name varchar(30), Email varchar(30), Gender varchar(30), Hobbies varchar(30), Country varchar(30))";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo"Table has been created";
        }
        ?>
    </body>
</html>