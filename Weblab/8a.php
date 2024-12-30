<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Visitor Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <?php
    $file = 'sample.txt';
    $count = file_exists($file) ? (int)file_get_contents($file) : 0;
    file_put_contents($file, ++$count);
    ?>

    <h1>Visitor Counter</h1>
    <p>Number of Visitors :  <strong>
        <?php echo $count; ?>
    </strong></p>
</body>

</html>