<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>all genres view</h1> 
   <?php foreach ($genres as $genre) :?>
        <h1>{{$genre->genre_name}}</h1> 
    <?php endforeach ?>
</body>
</html>