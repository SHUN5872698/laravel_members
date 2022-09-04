<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  // public function index()
  // {
  //     return view('home');
  // }

  /**
   * 投稿一覧ページ
   *
   * @return void
   */
  public function index()
  {
    // 投稿内容作成順で全て取得
    $posts = Post::orderBy('created_at', 'desc')->get();
    // ログインユーザー
    $user = auth()->user();
    return view('home', compact('posts', 'user'));
  }
}
