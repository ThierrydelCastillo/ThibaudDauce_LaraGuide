<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau()
    {
        request()->validate([
            'message' => ['required'],
        ]);

        auth()->user()->messages()->create([
            'contenu' => request('message'),
        ]);

        flash("Votre message à bien été publié.")->success();

        return back();
    }
}
