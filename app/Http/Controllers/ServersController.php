<?php

namespace MMORATE\Http\Controllers;

use MMORATE\Servers;
use MMORATE\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MMORATE\Votes;
use Illuminate\Support\Facades\Auth;

class ServersController extends Controller
{
    protected $allServers;
    protected $server;

//    Пагинация ->paginate(15)

//    Статус сервера:
//    0 - не проверен
//    1 - проверен и опубликован
//    2 - удален

    public function main(){
//        $allServers = Servers::lineage()->paginate(10);
        $allServers = Servers::paginate(10);
        return view('main', compact('allServers'));
    }

    public function aion()
    {
        $allServers = Servers::aion()->paginate(10);
        $game = 'aion';
        $gameTitle = 'Aion';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function lineage()
    {
        $allServers = Servers::lineage()->paginate(10);
        $game = 'lineage';
        $gameTitle = 'Lineage 2';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function wow()
    {
        $allServers = Servers::wow()->paginate(10);
        $game = 'wow';
        $gameTitle = 'World Of Warcraft';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function jade()
    {
        $allServers = Servers::jade()->paginate(10);
        $game = 'jade';
        $gameTitle = 'Jade Dynasty';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function mu()
    {
        $allServers = Servers::mu()->paginate(10);
        $game = 'mu';
        $gameTitle = 'Mu Online';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function rf()
    {
        $allServers = Servers::rf()->paginate(10);
        $game = 'rf';
        $gameTitle = 'RF Online';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function perfect()
    {
        $allServers = Servers::perfect()->paginate(10);
        $game = 'perfect';
        $gameTitle = 'Perfect World';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    public function server($id){
        $server = Servers::where('id', $id)->first();
        $comments = Comments::where('server_id', $id)->get();
        return view('pages.server', compact('server', 'comments'));
    }

    public function addComment($id, Request $r){
        $server = Servers::where('id', $id)->first();
        $server->reviews += 1;
        $server->save();
//        TODO: Обновление рейтинга
        $comment = new Comments();
        $comment->author = \Auth::user()->name;
        $comment->text = $r->get('text');
        $comment->server_id = $id;
        $comment->rating = $r->get('rating');
        $comment->experience = $r->get('experience');
        $comment->save();
        return redirect(route('serverPage', $id));
    }

    public function vote($id){
        $server = Servers::where('id', $id)->first();
        return view('pages.vote', compact('server'));
    }

    public function votePost($id, Request $r){
        $votes = new Votes();
        $votes->user_id = Auth::user()->id;
        $votes->server_id = $id;
        $votes->nickname = $r->get('nickname');
        $votes->ip = $r->ip();
        $votes->save();

        $server = Servers::where('id', $id)->first();
        $server->rates += 1;
        $server->save();

        return view('pages.voteFinish', compact('server'));
    }

    public function stat($id){

    }

    public function add(){
        return view('pages.addServer');
    }

    public function addPost(Request $r){
        $r->validate([
            'site' => 'required|url',
            'name' => 'required|unique:servers',
            'game' => 'required|not_in:0',
            'description' => 'required',
        ]);

        $server = new Servers();
        $server->user_id = Auth::user()->id;
        $server->name = $r->get('name');
        $server->game = $r->get('game');
        $server->country = $r->get('country');
        $server->site = $r->get('site');
        $server->description = $r->get('description');
        $server->status = 0;
        $server->save();

        return redirect('/');
    }

}
