<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    
     // ユーザをお気に入り登録するアクション。
     
    public function store($micropost_id)
    {

        // 認証済みユーザ（閲覧者）が、 idのユーザをお気に入りする
        \Auth::user()->favorite($micropost_id);
  
        // 前のURLへリダイレクトさせる
        return back();
    }

     //ユーザをお気に入り解除するアクション。
     
    public function destroy($micropost_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをお気に入り解除する
        \Auth::user()->unfavorite($micropost_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
