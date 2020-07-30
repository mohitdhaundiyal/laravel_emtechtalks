<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\post;

class newscontrol extends Controller
{
    function search_news(Request $request)
    {
        $recent = post::OrderBy('id', 'desc')->paginate(4);

        //latest tech data
        $date = date("y-m-d");
        $data = Http::get('https://newsapi.org/v2/top-headlines?country=in&apiKey=cbc688758d2742b5a5b141ce4ed37059')->json();
        $result = "NULL";
        //return view
        return view('search_news', ['result' => $result, 'data' => $data, 'recents' => $recent]);
    }

    function search_result(Request $request)
    {
        $recent = post::OrderBy('id', 'desc')->paginate(4);
        //search result
        $date = date("y-m-d");
        $search_result = $request->search_result;
        $result = Http::get('http://newsapi.org/v2/everything?q=' . $search_result . '&from=' . $date . '&sortBy=relevancy&?country=in&language=en&apiKey=cbc688758d2742b5a5b141ce4ed37059')->json();
        return view('search_news', ['result' => $result, 'recents' => $recent]);
    }
}
