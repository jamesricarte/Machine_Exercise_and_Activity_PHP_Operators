<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine Exercise and Activity PHP Operators</title>
</head>
<body>

    <h1>Minutes to Hours Converter</h1>
    
    <form action="" method="post">
        <label for="minutes">Enter Minutes:</label>
        <input type="number" name="minutes" id="minutes">
    </form>

    <?php 
    $minutes = $_POST["minutes"];
    $convertedToHours = "";
    $remainingMinutes = "";
    $totalHours = "";
    

    if (isset($minutes)) {
        $convertedToHours = $minutes/60;
        $remainingMinutes = $minutes % 60;
        $remainingInHour = $remainingMinutes/60;

        $totalHours = $convertedToHours - $remainingInHour;
    }
    ?>

    <h4>Total Hour:</h4>
    <p><?php echo $totalHours . " hours"; ?></p>

    <h4>Remaining Minutes:</h4>
    <p><?php echo $remainingMinutes . " minutes"; ?></p>

    <h4>You have total of:</h4>
    <p><?php echo $totalHours . " hours" . " and " . $remainingMinutes . " minutes"; ?></p>
</body>
</html>