<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'titolo',
        'descrizione',
        'anno',
        'immagine',
        'link',

        'type_id'
    ];

    protected function immagine(): Attribute
    {
        return Attribute::make(
            get: fn (string|null $value) => $value ? asset('storage/' . $value) : null,
        );
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
