<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $art = Article::all();
//        $v = Article::find(10)->delete();
//        dd($v);
//        $x = $art[0]->getMedia('articles');
//        $val = Article::allMedia()[2]->getMedia('articles');
//        dd(Article::allMedia()[7]->getFirstMedia()->getUrl());
        return view('articles.index', compact('art'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $art = new Article();
        $art->title = $request->title;
        $art->content = $request->content;
        if ($request->hasFile('file')){
            foreach ($request->file as $f){
                $art
                    ->addMedia($f)
                    ->toMediaCollection('laf');
            }
        }

        $art->save();
        return redirect('article');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Article::findOrFail($id);
        $get = $show->getMedia('laf');

        return view('articles.show', compact('get', 'show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.update', compact('article'));
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
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        if ($request->hasFile('file')){
            $article->delete();
            foreach ($request->file as $f){
                $article->addMedia($f)->toMediaCollection('laf');
            }
        }
        $article->save();
        return redirect()->route('article.index');
    }

    public function delete($id){
        $deleteArticle = Article::findOrFail($id);
        $deleteArticle->delete();
        return back();
    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//
//    }

}
