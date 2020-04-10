<?php

namespace App\Http\Controllers;

use App\Session;
use App\SessionUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function new() {

        $creator_id = Auth::user()->id;

        // check if user has made another session before... if so, expire them
        $old_session = Session::where('creator_id', $creator_id)
            ->update(['expired' => true]);

        // create session
        $session = new Session;
        $session->creator_id = $creator_id;
        $session->started = false;
        $session->completed = false;
        $session->expired = false;
        $session->save();

        // add user to session (session_user)
        $session_user = new SessionUser;
        $session_user->session_id = $session->id;
        $session_user->user_id = $creator_id;
        $session_user->save();

        // get player count through session_user
        $user_count = SessionUser::where('session_id', $session->id)
            ->count();

        return view('sessions/new', ['session' => $session, 'user_count' => $user_count]);
    }

    public function join_form() {
        return view('sessions/join');
    }

    public function join(Request $request) {
        // check that session isn't expired, started, or completed
        $session = Session::find($request->session_id);
        if ($session->completed || $session->started || $session->expired) {
            return view('sessions/join-failed');
        }

        // check that capacity hasn't been filled
        $session_user_count = SessionUser::where('session_id', $request->session_id)->count();

        if ($session_user_count < 2) {
            // add user to session (session_user)
            return 'you are being added!';
        } else {
            return view('sessions/join-failed');
        }
    }

    public function start() {
        //
        return view('sessions/start');
    }
}
