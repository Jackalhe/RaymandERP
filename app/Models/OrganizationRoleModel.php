<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationRoleModel extends Model
{
    protected $table = 'OrganizationRole';
    protected $fillable = [
        'Title'
    ];

    public function SecurityItems()
    {
        return $this->belongsToMany(SecurityItemModel::class,'Access','OrganizationRoleID','SecurableID');
    }

//    public function users()
//    {
//        return $this->hasMany(UserModel::class,'OrganizationRoleID','id');
//    }
}
