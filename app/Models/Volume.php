<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory;
    protected $table = "volume";

    protected $fillable = [
        "volume",
        "active"
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
