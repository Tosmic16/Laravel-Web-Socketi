<!DOCTYPE html>
<html>
<head>
    <!-- Your other head content -->
<title>Document</title>
    <!-- Include the compiled asset using the vite() helper -->
    @vite('resources/js/app.js') 
</head>
<body>
    <form method="post" action="process_form.php">
        <label for="message">Enter your message:</label>
        <input type="text" id="message" name="message" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
