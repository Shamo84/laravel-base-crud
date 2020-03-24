<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
</head>
<body>
  <div class="games">
    @foreach ($games as $game)
    <div class="game">
      <ul>
        <li>Id: {{$game->id}}</li>
        <li>Titolo: {{$game->titolo}}</li>
        <li>Genere: {{$game->genre}}</li>
        <li>Sviluppatore: {{$game->developer}}</li>
        <li>Console: {{$game->console}}</li>
        <li>Price: {{$game->price}}</li>
        <li>Creato: {{$game->created_at}}</li>
        <li>Aggiornato: {{$game->updated_at}}</li>
      </ul>
    </div>
    @endforeach
  </div>
</body>
</html>
