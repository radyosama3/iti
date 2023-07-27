<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <form action="/iti/phpday1/handel.php" method="post">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first_name" required>
        <br>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last_name" required>
        <br>
        <br>
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea>
        <br>
        <br>
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="egypt">Egypt</option>
            <option value="usa">USA</option>
            <option value="us">US</option>
            <option value="roma">Roma</option>
        </select>
        <div>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" checked value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        </div>
        <div>
        <br>
        <label>skils</label>
        <br>
        <input type="checkbox" id="sql" name="skils[]" value="sql">
        <label for="sql">SQL</label>
    
        <input type="checkbox" id="php" name="skils[]" value="php">
        <label for="php">PHP</label>
        <br>
        <input type="checkbox" id="java" name="skils[]" value="java">
        <label for="java">Java</label>
        <input type="checkbox" id="python" name="skils[]" value="python">
        <label for="python">Python</label>
        </div>
        <br>
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <br>
        <br>
        <label for="department">Department:</label>
        <input type="text" id="department" name="department"><br>
        <label for="valid">123</label>
        
        <input type="text" id="valid" name="valid">
        
        <div>
        <input type="reset" value="reset">
        <input type="submit" value="Submit">   
        </div>
    </form>

</body>

</html>