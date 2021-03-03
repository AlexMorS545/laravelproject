<?php

namespace App\Http\Controllers;

use App\Services\TemplateNewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NewsController extends Controller
{
    public function showAllNews(TemplateNewsService $service) {

        $this->title = 'Список Новостей';

        return view('news/show', ['listNews'=>$service->getNews(), 'title'=>$this->title]);
    }

    public function showOneNews(TemplateNewsService $service, int $id) {

        $allNews = $service->getNews();

        $news = $allNews[$id] ?? "No page";

        $this->title = 'Новость '.$news['created_at'];

        return view('news/one_news', ['news' => $news, 'title'=>$this->title]);
    }
}
