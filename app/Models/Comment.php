<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Add 'name' to the fillable attributes
        'content'
    ];

    public static function all($columns = ['*'])
    {
        return static::query->get(
            is_array($columns) ? columns : func_get_args()
        );
    }
    // Your model code continues...
}
