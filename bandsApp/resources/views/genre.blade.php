<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>one genre view</h1> 
   <h1>{{$genre->genre_name}}</h1>
   <h1>asociated bands</h1>
   <?php foreach ($bands as $band) :?>
        <h1>{{$band->name}}</h1> 
    <?php endforeach ?>
</body>
</html>