<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'operators';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'nama', 'password'];
}
