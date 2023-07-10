<html>
    <head>
        <title>Form</title>
    </head>
    <body>
    <form action="formdetails.php"method="POST">
        Id: <br>
        <input type="number" name="id"> <br>

        Name: <br>
        <input type="text" name="name"> <br/>

        Email: <br>
        <input type="text" name="email"> <br/>

        Gender: <br/>
        <input type="radio" name="gender" value="Male"checked>Male <br>
        
        <input type="radio" name="gender" value="Female">Female <br>

        <input type="radio" name="gender" value="Others">Others <br>
    

        Hobbies: <br>
        <input type="text" name="hobbies"> <br/>

        Country: <br>
        <select name="country" name="country"> <br>
            <option value="Nepal">Nepal</option>
            <option value="Australia">Australia</option>
            <option value="Canada">Canada</option>
            <option value="USA">USA</option>
            <option value="Others">Others</option>

        </select> <br> <br>

        <input type="submit" value="submit">
        </form>
      
    </body>
</html>