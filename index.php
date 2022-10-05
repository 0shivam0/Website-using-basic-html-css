<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
</head>
<body>
    <?php $user = ['minato', 'naruto', 'baruto'] ?>
    <ul>
    <?php foreach ($users as $key => $value) {
        echo '<li> User number ' . $key. ' name is ' . $value. '</li>';
    }
    ?>
    </ul>
</body>
</html>