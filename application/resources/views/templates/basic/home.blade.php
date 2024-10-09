<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
</head>
<body>
    <p>Redirecting...</p>
    
    <?php
    // Redirect to a new page
    $new_url = "https://app.escrow.icu/user/dashboard";
    header("Location: $new_url");
    exit();
    ?>
</body>
</html>
