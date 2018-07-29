<?php

namespace MMORATE\Http\Controllers;

use Artesaos\SEOTools\SEOMeta;
use Carbon\Carbon;
use MMORATE\Privilege;
use MMORATE\Servers;
use MMORATE\Comments;
use Illuminate\Http\Request;
use MMORATE\Votes;
use Illuminate\Support\Facades\Auth;
use MMORATE\Worlds;
use PheRum\BBCode\Facades\BBCode;
use SEO;

class ServersController extends Controller
{

    const COEF = 1;
    const COEF_IF_OFTEN = 0.5;
    const COEF_SMS_OR_VIP = 10;
    const PAGINATE = 10;

    protected $orig_arr;
    protected $modif_arr;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Главная страница
     */
    public function main()
    {
        SEO::setTitle('Главная');
        $allServers = Servers::where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_BB)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
            if (!Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_SERVER_LINK)->where('status', '1')->first())
                $server->link = null;
        }

        return view('pages.index', compact('allServers'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Aion
     */
    public function aion()
    {
        $allServers = Servers::aion()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'aion';
        $gameTitle = 'Aion';
        $route = 'aion';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Lineage
     */
    public function lineage()
    {
        $allServers = Servers::lineage()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'lineage';
        $gameTitle = 'Lineage 2';
        $route = 'lineage';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница WOW
     */
    public function wow()
    {
        $allServers = Servers::wow()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'wow';
        $gameTitle = 'World Of Warcraft';
        $route = 'wow';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Jade Dynasty
     */
    public function jade()
    {
        $allServers = Servers::jade()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'jade';
        $gameTitle = 'Jade Dynasty';
        $route = 'jade';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница MU Online
     */
    public function mu()
    {
        $allServers = Servers::mu()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'mu';
        $gameTitle = 'Mu Online';
        $route = 'mu';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница RF Online
     */
    public function rf()
    {
        $allServers = Servers::rf()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'rf';
        $gameTitle = 'RF Online';
        $route = 'rf';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница Perfect World
     */
    public function perfect()
    {
        $allServers = Servers::perfect()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'perfect';
        $gameTitle = 'Perfect World';
        $route = 'perfect';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница онлайн игр
     */
    public function other()
    {
        $allServers = Servers::other()->where('status', Servers::CONFIRMED)->sortable()->paginate(self::PAGINATE);
        $game = 'onl';
        $gameTitle = 'онлайн игр';
        $route = 'other';
        SEO::setTitle('Список серверов' . $gameTitle);
        foreach ($allServers as $server) {
            $server->description = preg_replace('#\[[^\]]+\]#', '', $server->description);
            if (Privilege::where('user_id', $server->user_id)->where('status', '1')->first())
                $server->description = BBCode::parse($server->description);
        }

        return view('pages.index', compact('allServers', 'game', 'gameTitle', 'route'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница сервера
     */
    public function server($id)
    {
        $server = Servers::where('link', $id)->first() ?? Servers::where('id', $id)->first();
        if (!Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_SERVER_LINK)->where('status', '1')->first() and !is_numeric($id))
            return abort(404);
        if (!Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_SERVER_LINK)->where('status', '1')->first())
            $server->link = null;

        $comments = Comments::where('server_id', $server->id)->get();
        $worlds = Worlds::where('server_id', $server->id)->get();
        $description = preg_replace('#\[[^\]]+\]#', '', $server->description);
        SEO::setDescription($description);
        SEO::setTitle('Сервер ' . $server->name);
        \SEOMeta::setKeywords($this->generate_keywords($server->description));
        if (Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_BB)->where('status', '1')->first())
            $description = BBCode::parse($server->description);

        return view('pages.server', compact('server', 'comments', 'worlds', 'description'));
    }

    /**
     * @param $text
     * @return string
     * Генерирует ключевые слова
     */
    public function generate_keywords($text)
    {
        $this->explode_str_on_words($text);
        $this->count_words();
        $arr = array_slice($this->modif_arr, 0, 30);
        $str = "";
        foreach ($arr as $key => $val) {
            $str .= $key . ", ";
        }
        return trim(substr($str, 0, strlen($str) - 2));
    }

    /**
     * @param $text
     * @return array
     * Очищает текст
     */
    private function explode_str_on_words($text)
    {
        $search = array("'ё'",
            "'<script[^>]*.*?</script>'si",  // Вырезается javascript
            "'<[&#092;/&#092;!]*?[^<>]*'si",           // Вырезаются html-тэги
            "'([&#092;r&#092;n])[&#092;s]+'",                 // Вырезается пустое пространство
            "'&(quot|#34);'i",                 // Замещаются html-элементы
            "'&(amp|#38);'i",
            "'&(lt|#60);'i",
            "'&(gt|#62);'i",
            "'&(nbsp|#160);'i",
            "'&(iexcl|#161);'i",
            "'&(cent|#162);'i",
            "'&(pound|#163);'i",
            "'&(copy|#169);'i");
        $replace = array("е",
            " ",
            " ",
            "&#092;&#092;1 ",
            "&#092;",
            " ",
            " ",
            " ",
            " ",
            chr(161),
            chr(162),
            chr(163),
            chr(169),
            "chr(&#092;&#092;1)");
        $text = preg_replace($search, $replace, $text);
        $del_symbols = array(",", ".", ";", ":", "&#092;", "#", "&#092;$", "%", "^",
            "!", "@", "`", "~", "*", "-", "=", "+", "&#092;&#092;",
            "|", "/", ">", "<", "(", ")", "&", "?", "?", "&#092;t",
            "&#092;r", "&#092;n", "{", "}", "[", "]", "'", "“", "”", "•",
            "как", "для", "что", "или", "это", "этих",
            "всех", "вас", "они", "оно", "еще", "когда",
            "где", "эта", "лишь", "уже", "вам", "нет",
            "если", "надо", "все", "так", "его", "чем",
            "при", "даже", "мне", "есть", "раз", "два",
            "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"
        );
        $text = str_replace($del_symbols, array(" "), $text);
        $text = preg_replace("( +)", " ", $text);
        $this->origin_arr = explode(" ", trim($text));
        return $this->origin_arr;
    }

    /**
     * Считает слова
     */
    private function count_words()
    {
        $tmp_arr = array();
        foreach ($this->origin_arr as $val) {
            if (strlen($val) >= 3) {
                $val = strtolower($val);
                if (array_key_exists($val, $tmp_arr)) {
                    $tmp_arr[$val]++;
                } else {
                    $tmp_arr[$val] = 1;
                }
            }
        }
        arsort($tmp_arr);
        $this->modif_arr = $tmp_arr;
    }

    /**
     * @param $id
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Добавление комментария
     */
    public function addComment($id, Request $r)
    {
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
    public function vote($id)
    {
        $server = Servers::where('link', $id)->first() ?? Servers::where('id', $id)->first();
        if (!Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_SERVER_LINK)->where('status', '1')->first() and !is_numeric($id))
            return abort(404);
        $rates = Worlds::where('server_id', $id)->get();
        SEO::setTitle('Голосование за сервер ' . $server->name);

        return view('pages.vote', compact('server', 'rates'));
    }

    /**
     * @param $id
     * @param Request $r
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Добавление голоса
     */
    public function votePost($id, Request $r)
    {
        $r->validate([
            'nickname' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $vote = Votes::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->first();
        if (isset($vote) and $vote->created_at->isToday()) abort('404');

        $voteCoeff = self::COEF;
        $adBlock = $r->get('adBlockIsEnabled');
        $vote = Votes::where('server_id', $id)->orderBy('created_at', 'DESC')->first();
        $server = Servers::where('id', $id)->first();
        if (isset($vote) and $vote->created_at->greaterThan(Carbon::now()->subHour()->toDateTimeString()))
            $voteCoeff = self::COEF_IF_OFTEN;
        if ($adBlock == 1)
            $voteCoeff = self::COEF;
        if ($server->coefficient != self::COEF)
            $voteCoeff = $server->coefficient;

        $votes = new Votes();
        $votes->user_id = Auth::id();
        $votes->server_id = $id;
        $votes->nickname = $r->get('nickname');
        $votes->ip = $r->ip();
        $votes->save();

        $server = Servers::where('id', $id)->first();
        $server->votes += $voteCoeff;
        $server->save();

        SEO::setTitle('Голосование за сервер ' . $server->name);

        return view('pages.voteFinish', compact('server'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница добавления сервера
     */
    public function add()
    {
        return view('pages.addServer');
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Добавление сервера
     */
    public function addPost(Request $r)
    {
        $r->validate([
            'site' => 'required|url|unique:servers',
            'name' => 'required|unique:servers',
            'description' => 'required|min:80',
            'fdescription' => 'required|min:80',
        ]);

        $server = new Servers();
        $server->user_id = Auth::id();
        $server->name = $r->get('name');
        $server->game = $r->get('game');
        $server->country = $r->get('country');
        $server->site = $r->get('site');
        $server->tags = $r->get('tags');
        $server->trailer = $r->get('video');
        $server->description = $r->get('description');
        $server->fdescription = $r->get('fdescription');
        $server->status = Servers::UNCONFIRMED;
        $server->save();

        SEO::setTitle('Добавление сервера');

        return redirect()->route('addWorld', $server->id);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница добавления мира
     */
    public function addWorld($id)
    {
        $server = Servers::where('id', $id)->first();
        if ($server->user_id != Auth::id()) abort(404);

        SEO::setTitle('Добавление мира серверу ' . $server->name);

        return view('pages.addWorld', compact('id', 'server'));
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Создание мира
     */
    public function addWorldPost(Request $r)
    {
        $r->validate([
            'description' => 'required|min:80|unique:worlds',
            'modDesc' => 'required|min:80|unique:worlds',
            'onlineUrl' => 'required|int',
            'versionNumber' => 'required',
            'rate' => 'required|without_spaces',
            'IpLogin' => 'unique:worlds',
            'IpGame' => 'unique:worlds'
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
    public function myServers()
    {
        $allServers = Servers::where('user_id', Auth::id())->get();
        SEO::setTitle('Список моих серверов');

        return view('pages.myServers', compact('allServers'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница редактирования сервера
     */
    public function edit($id)
    {
        $server = Servers::where('id', $id)->first();
        if ($server->user_id != Auth::id()) abort('404');
        SEO::setTitle('Редактирование сервера сервера ' . $server->name);

        return view('pages.editServer', compact('server'));
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Редактирование сервера
     */
    public function editPost($id, Request $r)
    {
        $r->validate([
            'site' => 'required|url',
            'name' => 'required',
            'description' => 'required|min:80',
            'fdescription' => 'required|min:80',
        ]);

        $server = Servers::where('id', $id)->first();
        $server->name = $r->get('name');
        $server->country = $r->get('country');
        $server->site = $r->get('site');
        $server->description = $r->get('description');
        $server->fdescription = $r->get('fdescription');
//        $server->status = Servers::UNCONFIRMED;
        $server->save();

        return redirect()->route('serverPage', $server->id);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Возврат серверов пользователя для показа статистики
     */
    public function myServersStat()
    {
        $allServers = Servers::where('user_id', Auth::id())->get();
        SEO::setTitle('Статистика моих серверов');

        return view('pages.myServersStat', compact('allServers'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Статистика сервера
     */
    public function serverStat($id)
    {
        $server = Servers::where('id', $id)->first();
        if ($server->user_id != Auth::id()) abort('404');

        $allServers = Servers::where('user_id', Auth::id())->get();
        $votes = Votes::where('server_id', $id)->get();
        SEO::setTitle('Статистика сервера ' . $server->name);

        return view('pages.serverStat', compact('server', 'votes', 'allServers'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница мира
     */
    public function world($serverId, $id)
    {
        $server = Servers::where('link', $serverId)->first() ?? Servers::where('id', $serverId)->first();
        if (!Privilege::where('user_id', $server->user_id)->where('action', Privilege::PRIVILEGE_SERVER_LINK)->where('status', '1')->first() and !is_numeric($id))
            return abort(404);
        if (!Worlds::where('server_id', $server->id)->first()) abort('404');
        $world = Worlds::where('id', $id)->first();
        SEO::setTitle('Мир ' . $world->name);
        \SEOMeta::setKeywords($this->generate_keywords($world->description));

        return view('pages.world', compact('world', 'server'));
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\JsonResponse
     * Пинг по айпи через fSock
     */
    public function ping(Request $r)
    {
        $address = explode(":", $r->get('ip'));
        $ta = microtime(true);
        try {
            if (!isset($address[1])) throw new \Exception('Адрес введен некорректно');
            if ($fp = fsockopen($address[0], $address[1], $errno, $errstr, 10)) {
                $tb = microtime(true);
                fclose($fp);
                return response()->json(['data' => "Средний пинг: " . round((($tb - $ta) * 1000), 0) . " мс"]);
            } else {
                throw new \Exception("Сервер не отвечает");
            }
        } catch (\Exception $e) {
            return response()->json(['errors' => 'Ошибка']);
        }
    }

    /**
     * Функция для тестов, мы же все любим тесты)))
     */
    public function test($ip = '164.132.204.61:49001')
    {

    }
}
