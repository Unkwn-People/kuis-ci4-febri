<?php

namespace App\Models;

use Codeigniter\Model;

class Usermodel extends Model
{
    protected $table = 'userss';
    protected $allowedFields = ['name', 'email', 'created_at'];
}
