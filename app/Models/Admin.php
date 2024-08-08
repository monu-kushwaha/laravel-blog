<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'tbl_admin';
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'admin_name',
        'admin_conact',
        'admin_email',
        'admin_image',
        'admin_password',
    ];

    protected $hidden = [
        'admin_password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['admin_password'] = bcrypt($value);
    }

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
