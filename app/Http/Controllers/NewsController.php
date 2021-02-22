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
        'News-6'
    ];

    public function showAllNews() {
        $this->title = 'Список Новостей';
        return view('news/show', ['listNews'=>$this->listNews, 'title'=>$this->title]);
    }

    public function showOneNews(int $id) {
        $this->title = 'Новость '.$this->listNews[$id];
        $news = $this->listNews[$id] ?? "No page";
        return view('news/one_news', ['news' => $news, 'title'=>$this->title]);
    }
}
