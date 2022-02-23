<?php

namespace App\Jobs\Covenant;

use App\Models\Covenant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CovenantSaveImageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $image;
    private $table;
    private $id;
    private $name;

    public function __construct($image, $table, $id, $name)
    {
        $this->image = $image;
        $this->table = $table;
        $this->id = $id;
        $this->name = $name;
    }

    public function handle()
    {
        Log::info('entró');
        $imagePath = saveFile($this->image, 'covenants', $this->name);

        $covenant = Covenant::where('id', $this->id)->first();
        deleteFile($covenant->image);
        $covenant->update(['image' => $imagePath]);
    }
}
