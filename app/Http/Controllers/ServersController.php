<?php

namespace MMORATE\Http\Controllers;

use MMORATE\Servers;
use MMORATE\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MMORATE\Votes;
use Illuminate\Support\Facades\Auth;
use MMORATE\Worlds;

class ServersController extends Controller
{
    //  TODO: Обновление рейтинга
    protected $allServers;
    protected $server;

//    Статус сервера:
//    0 - не проверен
//    1 - проверен и опубликован
//    2 - удален

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Главная страница
     */
    public function main(){
//        $allServers = Servers::lineage()->paginate(10);
        $allServers = Servers::paginate(10);
        return view('main', compact('allServers'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Aion
     */
    public function aion()
    {
        $allServers = Servers::aion()->paginate(10);
        $game = 'aion';
        $gameTitle = 'Aion';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Lineage
     */
    public function lineage()
    {
        $allServers = Servers::lineage()->paginate(10);
        $game = 'lineage';
        $gameTitle = 'Lineage 2';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница WOW
     */
    public function wow()
    {
        $allServers = Servers::wow()->paginate(10);
        $game = 'wow';
        $gameTitle = 'World Of Warcraft';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Jade Dynasty
     */
    public function jade()
    {
        $allServers = Servers::jade()->paginate(10);
        $game = 'jade';
        $gameTitle = 'Jade Dynasty';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница MU Online
     */
    public function mu()
    {
        $allServers = Servers::mu()->paginate(10);
        $game = 'mu';
        $gameTitle = 'Mu Online';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница RF Online
     */
    public function rf()
    {
        $allServers = Servers::rf()->paginate(10);
        $game = 'rf';
        $gameTitle = 'RF Online';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Perfect World
     */
    public function perfect()
    {
        $allServers = Servers::perfect()->paginate(10);
        $game = 'perfect';
        $gameTitle = 'Perfect World';
        return view('main', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница сервера
     */
    public function server($id){
        $server = Servers::where('id', $id)->first();
        $comments = Comments::where('server_id', $id)->get();
        $worlds = Worlds::where('server_id', $id)->get();
        return view('pages.server', compact('server', 'comments', 'worlds'));
    }

    /**
     * @param $id
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Добавление комментария
     */
    public function addComment($id, Request $r){
        $server = Servers::where('id', $id)->first();
        $server->reviews += 1;
        $server->save();
        $comment = new Comments();
        $comment->author = \Auth::user()->name;
        $comment->text = $r->get('text');
        $comment->server_id = $id;
        $comment->rating = $r->get('rating');
        $comment->experience = $r->get('experience');
        $comment->save();
        return redirect(route('serverPage', $id));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница голосования
     */
    public function vote($id){
        $server = Servers::where('id', $id)->first();
        return view('pages.vote', compact('server'));
    }

    /**
     * @param $id
     * @param Request $r
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Добавление голоса
     */
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница добавления сервера
     */
    public function add(){
        return view('pages.addServer');
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Добавление сервера
     */
    public function addPost(Request $r){
        $r->validate([
            'site' => 'required|url',
            'name' => 'required|unique:servers',
            'game' => 'required|not_in:0',
            'description' => 'required|min:80',
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

        return redirect()->route('addWorld', $server->id);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница добавления мира
     */
    public function addWorld($id){
        $server = Servers::where('id', $id)->first();
        if ($server->user_id != Auth::user()->id) abort(404); // 404, если добавляет мир не на свой сервер.
        return view('pages.addWorld', compact('id', 'server'));
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Создание мира
     */
    public function addWorldPost(Request $r){
        $r->validate([
            'description' => 'required|min:80',
            'onlineUrl'   => 'required|url',
            'rate'        => 'required|without_spaces'
        ]);

        $world = new Worlds();
        $world->user_id = Auth::user()->id;
        $world->name = $r->get('name');
        $world->rate = $r->get('rate');
        $world->server_id = $r->get('server_id');
        $world->description = $r->get('description');
        $world->type = $r->get('type');
        $world->donate = $r->get('donate');
        $world->IpLogin = $r->get('IpLogin');
        $world->IpGame = $r->get('IpGame');
        $world->created = $r->get('created');
        $world->onlineUrl = $r->get('onlineUrl');
        $world->status = $r->get('status');
        $world->gameVersion = $r->get('gameVersion');
        $world->versionNumber = $r->get('versionNumber');
        $world->modification = $r->get('modification');
        $world->modDesc = $r->get('modDesc');
        $world->clans = $r->get('clans');
        $world->tags = $r->get('tags');
        $world->save();

        return redirect()->route('serverPage', $r->get('server_id'));
    }

}
