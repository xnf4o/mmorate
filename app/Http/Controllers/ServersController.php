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

//    Статус сервера:
//    0 - не проверен
//    1 - проверен и опубликован
//    2 - удален

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Главная страница
     */
    public function main(){
        $allServers = Servers::where('status', '1')->sortable()->paginate(10);
        return view('pages.index', compact('allServers'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Aion
     */
    public function aion()
    {
        $allServers = Servers::aion()->where('status', '1')->sortable()->paginate(10);
        $game = 'aion';
        $gameTitle = 'Aion';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Lineage
     */
    public function lineage()
    {
        $allServers = Servers::lineage()->where('status', '1')->sortable()->paginate(10);
        $game = 'lineage';
        $gameTitle = 'Lineage 2';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница WOW
     */
    public function wow()
    {
        $allServers = Servers::wow()->where('status', '1')->sortable()->paginate(10);
        $game = 'wow';
        $gameTitle = 'World Of Warcraft';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Jade Dynasty
     */
    public function jade()
    {
        $allServers = Servers::jade()->where('status', '1')->sortable()->paginate(10);
        $game = 'jade';
        $gameTitle = 'Jade Dynasty';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница MU Online
     */
    public function mu()
    {
        $allServers = Servers::mu()->where('status', '1')->sortable()->paginate(10);
        $game = 'mu';
        $gameTitle = 'Mu Online';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница RF Online
     */
    public function rf()
    {
        $allServers = Servers::rf()->where('status', '1')->sortable()->paginate(10);
        $game = 'rf';
        $gameTitle = 'RF Online';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Perfect World
     */
    public function perfect()
    {
        $allServers = Servers::perfect()->where('status', '1')->sortable()->paginate(10);
        $game = 'perfect';
        $gameTitle = 'Perfect World';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница онлайн игр
     */
    public function other()
    {
        $allServers = Servers::other()->where('status', '1')->sortable()->paginate(10);
        $game = 'onl';
        $gameTitle = 'онлайн игр';

        return view('pages.index', compact('allServers', 'game', 'gameTitle'));
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
        $comment = new Comments();
        $comment->author = Auth::user()->name;
        $comment->text = $r->get('text');
        $comment->server_id = $id;
        $comment->rating = $r->get('rating');
        $comment->experience = $r->get('experience');
        $comment->save();

        $server = Servers::where('id', $id)->first();
        $server->reviews += 1;
        $server->rating = Comments::where('server_id', $id)->avg('rating');
        $server->save();

        return redirect()->route('serverPage', $id);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница голосования
     */
    public function vote($id){
        $server = Servers::where('id', $id)->first();
        $rates = Worlds::where('server_id', $id)->get();

        return view('pages.vote', compact('server', 'rates'));
    }

    /**
     * @param $id
     * @param Request $r
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Добавление голоса
     */
    public function votePost($id, Request $r){
        $r->validate([
            'nickname' => 'required',
//            'g-recaptcha-response' => 'required|captcha'
        ]);

        $vote = Votes::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->first();
        if($vote->created_at->isToday()) abort('404');

        $votes = new Votes();
        $votes->user_id = Auth::id();
        $votes->server_id = $id;
        $votes->nickname = $r->get('nickname');
        $votes->ip = $r->ip();
        $votes->save();

        $server = Servers::where('id', $id)->first();
        $server->votes += 1;
        $server->save();

        return view('pages.voteFinish', compact('server'));
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
            'name' => 'required',
            'description' => 'required|min:80',
        ]);

        $server = new Servers();
        $server->user_id = Auth::id();
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
        if ($server->user_id != Auth::id()) abort(404);

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
            'onlineUrl'   => 'required|int',
            'rate'        => 'required|without_spaces'
        ]);
        $clans = ($r->get('clans')) ? $r->get('clans') : 0;
        $tags = ($r->get('tags')) ? $r->get('tags') : '';

        $world = new Worlds();
        $world->user_id = Auth::id();
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
        $world->clans = $clans;
        $world->tags = $tags;
        $world->save();

        return redirect()->route('serverPage', $r->get('server_id'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Возврат серверов пользователя для редактирования
     */
    public function myServers(){
       $allServers = Servers::where('user_id', Auth::id())->get();

       return view('pages.myServers', compact('allServers'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница редактирования сервера
     */
    public function edit($id){
        $server = Servers::where('id', $id)->first();
        if ($server->user_id != Auth::id()) abort('404');

        return view('pages.editServer', compact('server'));
    }


    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Редактирование сервера
     */
    public function editPost($id, Request $r){
        $r->validate([
            'site' => 'required|url',
            'name' => 'required',
            'description' => 'required|min:80',
        ]);

        $server = Servers::where('id', $id)->first();
        $server->name = $r->get('name');
        $server->country = $r->get('country');
        $server->site = $r->get('site');
        $server->description = $r->get('description');
//        $server->status = 0;
        $server->save();

        return redirect()->route('serverPage', $server->id);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Возврат серверов пользователя для показа статистики
     */
    public function myServersStat(){
        $allServers = Servers::where('user_id', Auth::id())->get();

        return view('pages.myServersStat', compact('allServers'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Статистика сервера
     */
    public function serverStat($id){
        $server = Servers::where('id', $id)->first();
        if ($server->user_id != Auth::id()) abort('404');

        $allServers = Servers::where('user_id', Auth::id())->get();
        $votes = Votes::where('server_id', $id)->get();

        return view('pages.serverStat', compact('server', 'votes', 'allServers'));
    }
}
