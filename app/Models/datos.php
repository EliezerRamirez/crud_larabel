<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos extends Model
{
    use HasFactory;
    public $timestamps=FALSE;
    protected $table='test';
    protected $fillable =[
    'name',
    'lastname'

    ];


}
