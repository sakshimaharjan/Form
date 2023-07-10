<html>
    <head>
        <title>Insert</title>
    </head>
    <body>
        <?php
        include 'dbconnection.php';
        echo"<br>";
        $sql="insert into inf values(1,'Aayush','Brt','aayush@gmail.com',21),
        (2,'Ram','Ktm','ram@gmail.com',20),
        (3,'Hari','Ltp','hari@gmail.com',21),
        (4,'Sita','Bkt','sita@gmail.com',22),
        (5,'Riya','Ktm','riya@gmail.com',20)";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo"Data inserted successfully";
        }
        ?>
    </body>
</html>