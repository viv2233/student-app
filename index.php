<!DOCTYPE html>
<html>
<head>
    <title>Add Student Details</title>
</head>
<body>

<h2>Add Student Details</h2>

<form action="submit.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Course:</label><br>
    <input type="text" name="course" required><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
