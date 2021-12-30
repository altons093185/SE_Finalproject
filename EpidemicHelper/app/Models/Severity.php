<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    protected $table = 'severity';
    public $incrementing = false;



    public function get_severityInfo($res)
    {   
        $getData = $this::where('airport_id',$res)->value('severity_level_id');
        $severity = new Severity();
        return $severity->get_Severity($getData);
        
    }
}
