<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Cars list</title>
</head>
<body>
  <div class="container">
    <h2 class="text-center">{{$listHead}}</h2>
    <a href="/add_cars"><button class="btn btn-info">On add</button></a>
    <a href="/api/user"><button class="btn btn-info">On Profile</button></a>
    @foreach($listCars as $car)
      <h5 class="text-center">{{$car-> brand}} - {{$car-> model}}</h5>
      <p class="text-center">id: {{$car-> id}} | price: {{$car-> price}}</p>
      <p class="text-center">created_at: {{$car-> created_at}} | updated_at: {{$car-> updated_at}}</p> 
    @endforeach
  
  </div>
</body>
</html>
