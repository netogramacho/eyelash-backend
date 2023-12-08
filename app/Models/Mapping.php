<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    use HasFactory;

    protected $table = "mapping";

    protected $fillable = [
        "mapping"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $hidden = [
        "created_at"
    ];

    protected $casts = [
        "updated_at" => "datetime"
    ];
}
