<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($bands as $band) :?>
        <h1>{{$band->name}}</h1> 
    <?php endforeach ?>
</body>
</html>