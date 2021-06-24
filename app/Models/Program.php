<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperProgram
 */
class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'duration',
    ];
}
