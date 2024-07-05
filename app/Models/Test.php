<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $table = 'Test';

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
