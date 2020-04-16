<?php

namespace App\Http\Controllers;

use App\Role;
use App\Session;
use App\SessionUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SceneController extends Controller
{
    public function show(int $session_id, int $scene_id) {
        // default info that needs to be sent each time ------------------
        $user_role = SessionUser::where('session_id', $session_id)
            ->where('user_id', Auth::user()->id)
            ->first()->role_id;
        $role = Role::find($user_role)->name;
        $other_player = SessionUser::where('session_id', $session_id)
            ->where('user_id', '!=', Auth::user()->id)
            ->first()->name;
        // ----------------------------------------------------------------

        if ($role == 'Jack') {
            return view('scenes-jack/' . $scene_id, ['session_id' => $session_id, 'scene_id' => $scene_id, 'other_player' => $other_player]);
        } elseif ($role == 'Ralph') {
            return view('scenes-ralph/' . $scene_id, ['session_id' => $session_id, 'scene_id' => $scene_id, 'other_player' => $other_player]);
        }
    }

    public function decision(int $session_id, int $scene_id, string $decision_id, int $option) {
        Session::where('id', $session_id)
            ->update([$decision_id => $option]);

        // default info that needs to be sent each time ------------------
        $user_role = SessionUser::where('session_id', $session_id)
            ->where('user_id', Auth::user()->id)
            ->first()->role_id;
        $role = Role::find($user_role)->name;
        $other_player = SessionUser::where('session_id', $session_id)
            ->where('user_id', '!=', Auth::user()->id)
            ->first()->name;
        // ----------------------------------------------------------------

        if ($role == 'Jack') {
            return view('scenes-jack/' . $scene_id, ['session_id' => $session_id, 'scene_id' => $scene_id, 'other_player' => $other_player]);
        } elseif ($role == 'Ralph') {
            return view('scenes-ralph/' . $scene_id, ['session_id' => $session_id, 'scene_id' => $scene_id, 'other_player' => $other_player]);
        }
    }

    public function decision_check(int $session_id, string $decision_id) {
        $session = Session::find($session_id);

        if ($session->$decision_id === null) {
            return 'false';
        }
        return $session->$decision_id;
    }
}
