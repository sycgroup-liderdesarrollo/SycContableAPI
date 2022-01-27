<?php

namespace App\Observers;

use App\Models\Contact;
use App\Models\Provider;

class ProviderObserver
{
    public function created(Provider $provider)
    {
        if (request()->constitution_type_id == 1) {
            Contact::create(['name'=>request()->name,'last_name'=>request()->last_name,
            'email'=>request()->email,'phone'=>request()->phone,'provider_id'=>$provider->id]);
        }
    }

    public function updated(Provider $provider)
    {
        //
    }

    public function deleted(Provider $provider)
    {
        //
    }

    public function restored(Provider $provider)
    {
        //
    }

    public function forceDeleted(Provider $provider)
    {
        //
    }
}
