<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	public function inventory()
    {
        return $this->hasMany('App\Inventory')->orderBy('id', 'DESC');
    }

    public function receivingtemp()
    {
        return $this->hasMany('App\ReceivingTemp')->orderBy('id', 'DESC');
    }

    public function section()
    {
        return $this->belongsTo('App\Section','section_id');

    }
}
