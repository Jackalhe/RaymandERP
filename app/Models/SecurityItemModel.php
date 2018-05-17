<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityItemModel extends Model
{
    protected $table = 'SecurityItem';
    public $fillable = ['title','ParentID'];

    public function OrganizationRoles()
    {
        return $this->belongsToMany(OrganizationRoleModel::class,'Access','SecurableID','OrganizationRoleID');
    }

    public function childs()
    {

        return $this->hasMany(SecurityItemModel::class,'ParentID','id') ;

    }

}
