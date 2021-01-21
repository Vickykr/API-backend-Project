<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html> 
<?php
    session_start();
    if(isset($_GET['name']))
    {
        $_SESSION['name'] = $_GET['name'];
        header('Location: index2.php');
    }
    if(isset($_SESSION['response']))
    {
        $response = $_SESSION['response'];
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }
?>