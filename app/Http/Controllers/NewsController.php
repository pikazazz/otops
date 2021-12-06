<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $News = News::get();
        return view('News.app', ['News' => $News]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        News::create([
            'news_title' => $request->news_title,
            'news_detail' => $request->news_detail,
            'news_img_path' => 'sss',
        ]);

        
        $News = News::get();
        return view('News.app', ['News' => $News]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $News = News::where('id', $id)->get();
        return view('news.view', ['News' => $News]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $News = News::where('id', $id)->get();
        return view('news.edit', ['News' => $News]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Newss = News::find($id);

        $Newss->news_title = $request->news_title;
        $Newss->news_detail = $request->news_detail;
        $Newss->save();


        $News = News::where('id', $id)->get();
        return view('news.edit', ['News' => $News]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        $News = News::get();
        return view('news.app', ['News' => $News]);
    }
}
