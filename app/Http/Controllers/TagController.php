<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TagController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->client->request('GET','tag');

        $body = json_decode($response->getBody());

        dd($body);
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
        $response = $this->client->request('GET','tag/'.$id);

        $body = json_decode($response->getBody());

        $data = $body->data;
        return view('frontend.tag.show', compact('data'));
    }
}
