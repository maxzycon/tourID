<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        return view("admin.article.index");
    }

    public function create()
    {
        return view("admin.article.create");
    }

    public function store(Request $request)
    {
        $filePath = $request->file("articleThumbnailPath")->store("articleThumbnailPath");
        Article::create($request->all()+["user_id" => auth()->id(), "articleThumbnailPath" => $filePath, "articleSlug" => Str::slug($request->post("articleName"))]);
        return redirect()->route("article.index");
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
