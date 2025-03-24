<?php
// Initialize a variable to store the submitted text if any
$userText = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted text and sanitize it
    $userText = htmlspecialchars($_POST['userText']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h2>Submit your text:</h2>
    <!-- Create a form that submits data to the same page -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="userText">Enter Text:</label>
        <input type="text" id="userText" name="userText" value="<?php echo $userText; ?>" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Display the submitted text after the form
    if (!empty($userText)) {
        echo "<h2>You submitted: $userText</h2>";
    }
    ?>
</body>
</html>
