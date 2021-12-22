<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //use HasFactory;
    protected $table = 'company';
    public function get_companyName($serach_name)
    {   
        $getData = $this::where('Company_name',$serach_name)->get();
        return $getData;
        
    }
    //protected $connection = 'sqlite'; if do not using , it will be default 
}
