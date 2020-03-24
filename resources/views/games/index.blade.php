@extends("layouts.layout")

@section("main")
  @foreach ($games as $game)
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
      <li>
        <form action="{{route('games.destroy', compact("game"))}}" method="post">
          @csrf
          @method("DELETE")
          <input type="submit" value="DELETE">
        </form>
      </li>
    </ul>
  </div>
  @endforeach
@endsection
