<?php

namespace App\Providers;

use App\Events\EmailUpdated;
use App\Events\EmailUpdateRequested;
use App\Events\LoggedIn;
use App\Events\PhoneNumberUpdated;
use App\Events\UsernameUpdated;
use App\Listeners\SendChangeEmail;
use App\Notifications\SendEmailVerificationNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        LoggedIn::class => [

        ],
        UsernameUpdated::class => [

        ],
        EmailUpdated::class => [

        ],
        PhoneNumberUpdated::class => [

        ],
        EmailUpdateRequested::class => [
            SendChangeEmail::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
