<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Profile</title>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Users profile</h2>
    <a href="/cars_list"><button class="btn btn-info">On card_list</button></a>
      <h5 class="text-center">Hello {{$datas-> name}}!</br>yuor profile:</h5>
      <p class="text-center">id: {{$datas-> id}} | email: {{$datas-> email}}</p>
      <p class="text-center">password: {{$datas-> password}}</p>
      <p class="text-center">updated_at: {{$datas-> updated_at}} | created_at: {{$datas-> created_at}}</p>
      <p class="text-center">token: {{$datas-> remember_token}}</p>
  </div>
</body>
</html>

