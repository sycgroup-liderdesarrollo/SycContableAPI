<?php

namespace App\Observers;

use App\Models\Concept;
use App\Models\Covenant;

class CovenantObserver
{
    public function created(Covenant $covenant)
    {
        $concept = Concept::create(['name' => request()->concept_name,'calculated'=> 0, 'concept_type_id' => 2]);
        $covenant->concept_id = $concept->id;
        $covenant->save();
    }

    public function updated(Covenant $covenant)
    {

    }

    public function deleted(Covenant $covenant)
    {
        //
    }

    public function restored(Covenant $covenant)
    {
        //
    }

    public function forceDeleted(Covenant $covenant)
    {
        //
    }
}
