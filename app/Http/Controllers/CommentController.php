<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends BaseController
{
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
	{
		$response = $this->client->request('GET','comment/'.$id);

    	$body = json_decode($response->getBody());

    	dd($body);
    }
}
