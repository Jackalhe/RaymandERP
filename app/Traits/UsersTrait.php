<?php

namespace App\Traits;


use App\Models\UserModel;

trait UsersTrait
{
    public function UserCreate()
    {
        return $this->hasOne(UserModel::class,'id','CreatorID');
    }

    public function UserEdit()
    {
        return $this->hasOne(UserModel::class,'id','EditorID');
    }
}