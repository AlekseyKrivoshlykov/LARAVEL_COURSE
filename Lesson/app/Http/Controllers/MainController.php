<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class MainController extends BaseController
{
    // private $newsArr = [
    //     1 => ['title' => 'Buisness'],
    //     2 => ['title' => 'IT'],
    //     3 => ['title' => 'Medicine'],
    //     4 => ['title' => 'Politics'],
    // ];

    public function index ()
    {
        // $response = [];

        // foreach($this->newsArr as $id => $value)
        // {
        //     $url = route('news::showCategory', ['id' => $id]);
        //     $response[] = $value['title'];
        // }

        $news = DB::table('news')->get();

        return view('categoryNews', ['news' => $news]);
    }

    public function showCategory ($id)
    {
        $news = $this->newsArr[$id];
        return view('oneCategory', ['news' => $news['title']]);
    }

    public function addNews ()
    {
        $oneNews = 'oops';
        return view('oneNews', ['oneNews' => $oneNews]);
    }
}
