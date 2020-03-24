<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
</head>
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif
  <form action="{{route('games.update'), $game->id}}" method="post">
    @csrf
    @method("PATCH")
    <input type="text" name="title" placeholder="Title" value="$game->title">
    <input type="text" name="genre" placeholder="Genre" value="$game->genre">
    <input type="text" name="developer" placeholder="Developer" value="$game->developer">
    <input type="text" name="console" placeholder="Console" value="$game->console">
    <input type="number" name="price" placeholder="Price" value="$game->price">
    <input type="submit" value="Send">
  </form>
</body>
</html>
