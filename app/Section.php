<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name','about'
    ];

    public function items()
    {
        return $this->hasMany('App\Item','section_id','id');
    }

}
