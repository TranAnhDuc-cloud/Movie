<?php

namespace App\Listeners;

use App\Events\userChangeToPasswords;
use App\Mail\Register;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


// Xếp Gửi Mail Vào Hàng Đợi
class SendMailConfirmPassword implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  userChangeToPasswords  $event
     * @return void
     */
    public function handle(userChangeToPasswords $event)
    {
        //
        Mail::to($event->user->email)->send(new Register($event->user));
    }
}
