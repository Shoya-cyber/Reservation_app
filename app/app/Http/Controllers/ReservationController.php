<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * ホテル一覧ページ表示
     *
     * @return view
     */
    public function index(){
        return view('index');
    }

    /**
     * ホテル詳細ページ表示
     *
     * @return view
     */
    public function hotelDetail(){
        return view('hotelDetail');
    }
}
