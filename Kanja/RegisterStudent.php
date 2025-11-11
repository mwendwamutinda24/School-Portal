<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <link rel="stylesheet" href="index.css">
</head>
<body>
    <form method="POST" action="reg.php" class="form1">
        <h1>Register Student Here</h1>
        <input type="text" name="UPI" placeholder="Enter UPI NO"><br>
        <input type="text" name="Assesment" placeholder="Enter Assesment NO"><br>
        <input type="text" name="firstName" placeholder="Enter firstName" required><br>
        <input type="text" name="middleName" placeholder="Enter Middle Name" required><br>
        <input type="text" name="surname" placeholder="Enter Surname" required><br>
        <input type="text" name="birthNo" placeholder="Enter Birth Cert No"><br>
        <input type="text" name="DOB" placeholder="Enter Date Of Birth"><br>
        <input type="text" name="Grade" placeholder="Enter Grade(Numerics Only) " required><br>
        <button class="btn1">Register</button>
    </form>
</body>
</html>