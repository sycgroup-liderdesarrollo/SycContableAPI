<?php

namespace App\Observers;

use App\Models\Concept;
use App\Models\Covenant;

class CovenantObserver
{
    /**
     * Handle the Covenant "created" event.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return void
     */
    public function created(Covenant $covenant)
    {
        $concept = Concept::create(['name' => request()->concept_name,'calculated'=> 0, 'concept_type_id' => 2]);
        $covenant->concept_id = $concept->id;
        $covenant->save();
    }

    /**
     * Handle the Covenant "updated" event.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return void
     */
    public function updated(Covenant $covenant)
    {

    }

    /**
     * Handle the Covenant "deleted" event.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return void
     */
    public function deleted(Covenant $covenant)
    {
        //
    }

    /**
     * Handle the Covenant "restored" event.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return void
     */
    public function restored(Covenant $covenant)
    {
        //
    }

    /**
     * Handle the Covenant "force deleted" event.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return void
     */
    public function forceDeleted(Covenant $covenant)
    {
        //
    }
}
