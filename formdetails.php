<html>
    <head>
        <title>Form Details</title>
    </head>
    <body>
        <?php
       include 'dbconnection.php';
        echo"<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $hobbies = $_POST["hobbies"];
            $country = $_POST["country"];
        }
        $sql="insert into inf values($id,'$name','$email','$gender','$hobbies','$country')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "Data inserted successfully";
        }
        ?>
    
    </body>
</html>