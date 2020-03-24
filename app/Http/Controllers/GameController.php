<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view("games.index", compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("games.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|unique:games|max:255',
        'genre' => 'required',
        'developer' => 'required',
        'console' => 'required',
        'price' => 'required|numeric'
      ]);
      $data = $request->all();
      $game = new Game;
      // $game->title = $data["title"];
      // $game->genre = $data["genre"];
      // $game->developer = $data["developer"];
      // $game->console = $data["console"];
      // $game->price = $data["price"];
      $game->fill($data);
      $saved = $game->save();

      if ($saved) {
        return redirect()->route("games.index");
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
      return view("games.show", compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
      return view("games.edit", compact("game"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
      $request->validate([
        'title' => 'required|max:255',
        'genre' => 'required',
        'developer' => 'required',
        'console' => 'required',
        'price' => 'required|numeric'
      ]);
      $data = $request->all();
      $updated = $game->update($data);
      if ($updated) {
        return redirect()->route("games.index");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
      $game->delete();
      return redirect()->route("games.index");
    }
}
