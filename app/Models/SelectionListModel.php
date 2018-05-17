<?php

namespace App\Models;

use App\Traits\UsersTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class SelectionListModel extends Model
{
    use UsersTrait;
    protected $table='SelectionList';

    protected $fillable=[
        'ParentID','CategoryKindID','Code','Title','Comment','CreatorID','EditorID'
    ];

    const SALESKIND = 1040;
    const GUILD = 1041;

    public function childs()
    {
        return $this->hasMany(SelectionListModel::class,'ParentID','id');
    }

    public function CategoryKind()
    {
        $c = $this->attributes['CategoryKindID'];
        return Config::get("selection.$c");
//        return $this->attributes['CategoryKindID'];
//        switch ($this->attributes['CategoryKindID']){
//            case self::GUILD:
//                return 'صنف';
//                break;
//        }
    }

    public function scopeOrderList($query)
    {
        return $query->orderBy('CategoryKindID','asc')->orderBy('Code','asc');
    }

}
