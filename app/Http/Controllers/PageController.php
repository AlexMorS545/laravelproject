<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(Category $category) {
        $this->title = 'Главные новости';

//        $obj = new Category();
        $categories = Category::all();
//        dd($categories);
        return view('page/index', ['title' => $this->title, 'categories' => $categories]);
    }

    public function sport() {
        $this->title = 'Новости Спорта';
        return view('page/sport', ['title'=>$this->title]);
    }

    public function economic() {
        $this->title = 'Новости Экономики';
        return view('page/economic', ['title'=>$this->title]);
    }

    public function world() {
        $this->title = 'Мировые Новости';
        return view('page/world', ['title'=>$this->title]);
    }

}
