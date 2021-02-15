<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $categories = [
        'sport',
        'economic',
        'world'
    ];
    public function index() {
        return view('page/index');
    }

    public function category() {
        return view('page/category', ['category'=>$this->categories]);
    }

    public function sport() {
        return view('page/sport');
    }

    public function economic() {
        return view('page/economic');
    }

    public function world() {
        return view('page/world');
    }

}
