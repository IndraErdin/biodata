<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class PesertadidikMO extends Model
{
    use HasFactory, Searchable;
    protected $table = "pesertadidik";
    protected $fillable = ["id","nis","nama_lengkap","jk","nilai"];

    public function searchableAs()
    {
        return 'pesertadidik';
    }

    public function toSearchableArray()
    {
        return [
            'nama_lengkap'     => $this->nama_lengkap,
        ];
    }
}
