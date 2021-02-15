<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NewsController extends Controller
{
    protected $listNews = [
        'News-1',
        'News-2',
        'News-3',
        'News-4',
        'News-5',
        'News-6',
        'News-7',
        'News-8',
        'News-9',
        'News-10'
    ];

    public function showAllNews() {
        return view('news/show', ['listNews'=>$this->listNews]);
    }

    public function showOneNews(int $id) {
        $news = $this->listNews[$id] ?? "No page";
        return view('news/one_news', ['news' => $news]);
    }
}
