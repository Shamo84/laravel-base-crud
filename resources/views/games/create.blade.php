<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
</head>
<body>
  <form action="{{route('games.store')}}" method="post">
    @csrf
    @method("POST")
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="genre" placeholder="Genre">
    <input type="text" name="developer" placeholder="Developer">
    <input type="text" name="console" placeholder="Console">
    <input type="number" name="price" placeholder="Price">
    <input type="submit" value="Send">
  </form>
</body>
</html>
