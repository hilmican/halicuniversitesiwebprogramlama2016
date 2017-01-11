<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table='users';
    CONST created_at = 'creation_date';
    CONST updated_at = 'last_update';
}
