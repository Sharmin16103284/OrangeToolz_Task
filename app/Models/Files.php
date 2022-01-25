<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory; 
    protected $fillable = [
        'number',
        'first_name',
        'last_name',
        'email',
        'state',
        'zip',
    ];
    public static Function getFile()
    {
        $records = DB::table('files')->select('id','number',
        'first_name',
        'last_name',
        'email',
        'state',
        'zip');
        return $records;
    }
}
