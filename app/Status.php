<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'tbl_status';
    protected $fillable = ['nama'];
    public function voters()
    {
    	return $this->belongsTo('App\Voters');
    }
}
