<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;

    protected $fillable = ['choix1', 'choix2', 'choix3', 'choix4', 'jackpot'];
    protected $table = 'jeux';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
