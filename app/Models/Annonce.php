<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "lieu",
        "image",
        "ville",
        "proprietaire",
        "contact2",
        "description",
        "prix_annonce",
        "user_id",
        "type",
        "etat"
    ];
}
