<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = $this->client->request('GET','category');
        $body = json_decode($response->getBody());
        dd($body);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response = $this->client->request('GET','category/'.$id);
        $body = json_decode($response->getBody());
        $data = $body->data;

        return view('frontend.category.show', compact('data'));
    }

}
