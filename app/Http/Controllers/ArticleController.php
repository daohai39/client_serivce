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
    public function index($page = null)
    {   if(!$page)
          $response = $this->client->request('GET','article');
        else
          $response = $this->client->request('GET','article?page='.$page);
        $body = json_decode($response->getBody());
        $articles = $body->data;

        $meta = $body->meta->pagination;
        $pages = [
            'previous' => null,
            'next' => null,
        ];
        if($meta->current_page > 1 && $meta->current_page < 7)
        {
            $pages['previous'] = $meta->current_page - 1;
            $pages['next'] = $meta->current_page + 1;
        }
        else if($meta->current_page == 1)
        {
            $pages['next'] = $meta->current_page + 1;
        }    
        else if ($meta->current_page == 7)
        {
            $pages['previous'] = $meta->current_page - 1;
        }
        return view('frontend.article.index',compact('articles','pages'));
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
