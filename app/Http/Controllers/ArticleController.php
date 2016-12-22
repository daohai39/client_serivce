<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
          $response = $this->client->request('GET','article');
        $body = json_decode($response->getBody());
        $articles = $body->data;

        $meta = $body->meta;
        return view('frontend.article.index',compact('articles','meta'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response = $this->client->request('GET','article/'.$id);

        $body = json_decode($response->getBody());

        $article = $body->data;

        return view('frontend.article.show', compact('article'));
    }

      public function comments($id)
    {
        $response = $this->client->request('GET','article/'.$id.'/comment');
        
        $body = json_decode($response->getBody());

        dd($body);
    }
}
