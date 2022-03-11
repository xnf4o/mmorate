<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use MMORATE\Servers;

class AdminController extends Controller
{
    $games = ["aion","jade","lineage","mu","perfect","wow"];
    public function main()
    {
        return view('admin.main');
    }

    public function servers()
    {
        $servers = Servers::where('status', '1')->get();
        return view('admin.serverList', compact('servers'));
    }

    foreach($games as $game){
         public function {$game}()
        {
            $servers = Servers::{$game}()->where('status', '1')->get();
            return view('admin.serverList', compact('servers'));
        }
    } 

    public function editServer($id)
    {
        $server = Servers::where('id', $id)->first();
        return view('admin.serverEdit', compact('server'));
    }

    public function editServerPost($id, Request $r)
    {
        $server = Servers::where('id', $id)->first();
        $server->name = $r->get('name');
        $server->site = $r->get('site');
        $server->trailer = $r->get('trailer');
        $server->description = $r->get('description');
        $server->tags = $r->get('tags');
        $server->coefficient = $r->get('coefficient');
        $server->save();

        return redirect()->route('admin.servers')->with('message', 'Сервер успешно отредактирован!');
    }

    public function approveServer($id)
    {
        $server = Servers::where('id', $id)->first();
        $server->status = 1;
        $server->save();

        return redirect()->back()->with('message', 'Сервер успешно одобрен!');
    }

    public function deleteServer($id)
    {
        $server = Servers::where('id', $id)->first();
        $server->status = 2;
        $server->save();

        return redirect()->back()->with('message', 'Сервер успешно удален!');
    }
}
