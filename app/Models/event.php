<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'organizer_id',
        'city',
        'Date_start',
        'Date_end',
        'Nombre_De_Places',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'organizer_id');
    }

    public function category()
    {
        return $this->belongsTo(categorie::class,'category_id');
    }
}
