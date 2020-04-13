<?php

namespace App\Observers;

use App\Session;
use App\SessionUser;
use Illuminate\Support\Facades\Auth;

class SessionUserObserver
{
    /**
     * Handle the session user "created" event.
     *
     * @param  \App\SessionUser  $sessionUser
     * @return void
     */
    public function created(SessionUser $sessionUser)
    {
//        // if limit is filled
//        $session = Session::find($sessionUser->session_id);
//        $sessionUserCount = SessionUser::where('session_id', $session->id)->count();
//
//        if ($sessionUserCount >= 2) {
//            return redirect()->route('session.start')->send();
//        }
    }

    /**
     * Handle the session user "updated" event.
     *
     * @param  \App\SessionUser  $sessionUser
     * @return void
     */
    public function updated(SessionUser $sessionUser)
    {
        //
    }

    /**
     * Handle the session user "deleted" event.
     *
     * @param  \App\SessionUser  $sessionUser
     * @return void
     */
    public function deleted(SessionUser $sessionUser)
    {
        //
    }

    /**
     * Handle the session user "restored" event.
     *
     * @param  \App\SessionUser  $sessionUser
     * @return void
     */
    public function restored(SessionUser $sessionUser)
    {
        //
    }

    /**
     * Handle the session user "force deleted" event.
     *
     * @param  \App\SessionUser  $sessionUser
     * @return void
     */
    public function forceDeleted(SessionUser $sessionUser)
    {
        //
    }
}
