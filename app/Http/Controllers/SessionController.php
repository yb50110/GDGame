<?php

namespace App\Http\Controllers;

use App\Role;
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
        Session::where('creator_id', $creator_id)
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
            $session_user = new SessionUser;
            $session_user->session_id = $request->session_id;
            $session_user->user_id = Auth::user()->id;
            $session_user->save();

            return view('sessions/wait-start', ['session_id' => $request->session_id]);
        } else {
            return view('sessions/join-failed');
        }
    }

    public function count(int $id) {
        // count users
        return SessionUser::where('session_id', $id)
            ->count();
    }

    // FUNCTIONS RELATING TO STARTING SESSION-----------------------------------
    // -------------------------------------------------------------------------
    public function start(int $id) {
        // only host see this page
        return view('sessions/start', ['session_id' => $id]);
    }

    public function start_update(int $id) {
        Session::find($id)
            ->update(['started' => true]);

        return view('sessions/name', ['session_id' => $id]);
    }

    public function start_check(int $id) {
        return Session::find($id)->started;
    }


    // FUNCTIONS RELATING TO SETTING NAME---------------------------------------
    // -------------------------------------------------------------------------
    public function name(int $session_id) {
        return view('sessions/name', ['session_id' => $session_id]);
    }

    public function name_update(Request $request, int $session_id) {
        SessionUser::where([
            ['session_id', $session_id], ['user_id', Auth::user()->id]
        ])->update(['name' => $request->session_name]);

        $roles = Role::all();

        return view('sessions/role', ['session_id' => $session_id, 'roles' => $roles]);
    }


    // FUNCTIONS RELATING TO SETTING NAME---------------------------------------
    // -------------------------------------------------------------------------
    public function role_update(Request $request, int $session_id) {
        SessionUser::where([
            ['session_id', $session_id], ['user_id', Auth::user()->id]
        ])->update(['role_id' => $request->role]);

        return view('sessions/wait-roles', ['session_id' => $session_id]);
    }

    public function role_check(int $session_id) {
        $session_user_records = SessionUser::where('session_id', $session_id)->get();

        foreach ($session_user_records as $record) {
            if ($record->role_id == null) {
                return 'false';
            }
        }

        return 'true';
    }
}
