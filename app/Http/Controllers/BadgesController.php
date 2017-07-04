<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BadgesController extends Controller
{
    public function index()
    {
        return \App\Badge::all();
    }

    public function show($id)
    {
        return \App\Badge::findOrFail($id);
    }

    public function toggle(Request $request)
    {

        $user = \App\User::find($request->student_id);
        $badge = \App\Badge::find($request->badge_id);
        $message = new \App\Message;
        $message->sender_id = null;
        $message->receiver_id = $user->id;

        if ( ! $user->badges->contains($badge->id) )
        {
            //assign badge
            $user->badges()->attach($request->badge_id);
            $message->subject = 'You received a new Badge!!'; // Implement message based on type here
            $message->content = "You have received the badge: <b>$badge->title.</b> <br> <i> $badge->description </i>. <br> Congratulations!";

        } else
        {
            //deassign badge
            $user->badges()->detach($request->badge_id);
            $message->subject = "We took a badge from you.... :( "; // Implement message based on type here
            $message->content = "We took the badge $badge->name from you. Please consult your headmaster for further details...";
        }

        $message->save();

    }

}