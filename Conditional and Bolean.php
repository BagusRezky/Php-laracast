<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Conditional and Boolean</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Metter";
        $read = false;

        if($read){
            $message = "You have read $name";
        } else {
            $message = "You have Not read $name";
        }
    ?>


    <h1>
        <!-- <?php echo $message; ?> -->
        or
        <?= $message ?>
    </h1>

</body>
</html>