<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Generator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Electricity Bill Generator</h1>
        <form action="backend.php" method="post">
            <label for="units">Enter Name :</label>
            <input type="text" id="names" name="names" required>
            <label for="units">Enter Units Consumed :</label>
            <input type="number" id="units" name="units" required>
            <input type="submit" value="Generate Bill">
        </form>
    </div>
</body>
</html>
