<?php

namespace App\Jobs\saveImage;

use App\Models\Covenant;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveImageJob implements ShouldQueue
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
        $imagePath = saveFile($this->image, $this->table, $this->name);

        if ($this->table == 'covenants') {
            $covenant = Covenant::where('id', $this->id)->first();
            deleteFile($covenant->image);
            $covenant->update(['image' => $imagePath]);
        }
        if ($this->table == 'users') {
            $user = User::where('id', $this->id)->first();
            deleteFile($user->image);
            $user->update(['image' => $imagePath]);
        }
    }
}
