<?php

namespace App\Listeners;

use App\Models\HistorySession;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Log;
class SuccessfulLogin
{
    protected $request;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        HistorySession::create([
            'user_id' => $event->user->id,
            'last_login' => Carbon::now()
        ]);

        $clientIp = $this->request->getClientIp();
        $roleUser = $event->user->roles;
        if($clientIp == '127.0.0.1' && $roleUser[0]['id'] == 1){
            Cookie::queue('origin_sesion', $clientIp, 1);
        }

    }
}
