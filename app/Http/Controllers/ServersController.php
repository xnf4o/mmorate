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
        $allServers = Servers::lineage()->paginate(10);
//        $allServers = Servers::all();
        return view('main', compact('allServers'));
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

}
