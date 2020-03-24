@extends("layouts.layout")

@section("main")
  <div class="game">
    <ul>
      <li>Id: {{$game->id}}</li>
      <li>Titolo: {{$game->title}}</li>
      <li>Genere: {{$game->genre}}</li>
      <li>Sviluppatore: {{$game->developer}}</li>
      <li>Console: {{$game->console}}</li>
      <li>Price: {{$game->price}}</li>
      <li>Creato: {{$game->created_at}}</li>
      <li>Aggiornato: {{$game->updated_at}}</li>
    </ul>
  </div>
@endsection
