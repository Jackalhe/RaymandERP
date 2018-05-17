<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','OrganizationRoleID','remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function OrganizationRole()
    {
        return $this->hasOne(OrganizationRoleModel::class,'id','OrganizationRoleID');
    }
}
