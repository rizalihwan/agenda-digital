<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'judul_agenda', 'slug', 'description'
    ];

    public function scopeMessage()
    {
        return "<h5>Selamat Datang Di Aplikasi <br/>Agenda Digital</h5>";
    }
}
