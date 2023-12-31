<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Technology;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function projects() {

        return $this -> belongsToMany(Project :: class);
    }
}
