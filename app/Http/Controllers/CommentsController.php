<?php

namespace hireme\Http\Controllers;

use Request;

use hireme\Http\Requests;
use hireme\Http\Controllers\Controller;
use hireme\Comments;

class CommentsController extends Controller
{
    public function store()
    {
    	$input = Request::all();
    	$comment = new Comments;

    	$comment->post_id = $input['post_id'];
    	$comment->user_id = $input['user_id'];
    	$comment->comment = $input['comment'];

    	$comment->save();

    	return redirect('entries/entry/' . $input['post_id']);
    }
}
