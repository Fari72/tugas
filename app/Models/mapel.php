<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
class mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    protected $guarded = [];

    public function Guru(){
        return $this->belongsTo(Guru::class);
    }
}
