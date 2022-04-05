<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    protected $table = 'test_users';
    protected $primaryKey = 'id';
    protected $fillable = ['user_name', 'test_date', 'location', 'mark', 'criterion', 'manager'];
}
