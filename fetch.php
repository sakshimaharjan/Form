<html>
    <head>
        <title>Fetch</title>
    </head>
    <body>
        <?php
        include 'dbconnection.php';
        $sql="SELECT * FROM inf";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        echo"<br>";
        echo "Number of rows in the table= " .$num;
        echo "<br>";
        if($num>0)
        {
            echo "<table border =1>";
            echo "<tr>";
            echo"<th>Id</th>";
            echo"<th>Name</th>";
            echo"<th>Email</th>";
            echo"<th>Gender</th>";
            echo"<th>Hobbies</th>";
            echo"<th>Country</th>";
            echo "</tr>";
            while($row=mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$row['Id']."</td>";
                echo"<td>".$row['Name']."</td>";
                echo"<td>".$row['Email']."</td>";
                echo"<td>".$row['Gender']."</td>";
                echo"<td>".$row['Hobbies']."</td>";
                echo"<td>".$row['Country']."</td>";
                echo"</tr>";
            }
        }
        ?>
    </body>
</html>