<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Form add cars</title>
</head>
<body>
<h2 class="text-center">{{$addCars}}</h2>
  <div class="container">
    <form action="{{ route('cars.store')}} " method="post">
      @csrf
      <div class="form-grup mb-3">
        <label for="brand">Бренд авто</label>
        <input type="text" name="brand" placeholder="Бренд авто" id="brand" class="form-control" required>
      </div>
      <div class="form-grup mb-3">
        <label for="model">Модель авто</label>
        <input type="text" name="model" placeholder="Модель авто" id="model" class="form-control" required>
      </div>
      <div class="form-grup mb-3">
        <label for="price">Цена авто</label>
        <textarea type="text" name="price" placeholder="Цена авто" id="price" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-success mb-3">Отправить</button>
      </form>
  </div>
  
</body>
</html>
