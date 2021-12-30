<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    public $id = false; // avoid error;
    protected $table = 'sick';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'severity_level_id';
    

    public function get_sick($country)
    {   


        $getData = $this::where('country_id',$country)->get();
        //->where('db欄位',view欄位name)

        return $getData;
        
    }


}
