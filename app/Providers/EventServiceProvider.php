<?php

namespace App\Providers;

use App\Events\NominaEvent;
use App\Listeners\NominaListen;
use App\Models\Covenant;
use App\Models\Provider;
use App\Observers\CovenantObserver;
use App\Observers\ProviderObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NominaEvent::class =>[
            NominaListen::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Covenant::observe(CovenantObserver::class);
        Provider::observe(ProviderObserver::class);
    }
}
