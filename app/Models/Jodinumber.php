<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jodi;
class Jodinumber extends Model
{
    use HasFactory;

    protected $fillable = ["jodi_id", "start_time", "end_time", "result", "date"];
    protected $appends = array('main_result', 'left_result', 'right_result');

    public function jodi(){
        return $this->hasOne(Jodi::class, 'id', 'jodi_id');
    }

    public function getMainResultAttribute()
    {
        $result = '';
        if($this->result){
        $result = explode('-', $this->result);
        $result =  $result[1];
        }
        return $result;
    }

    public function getLeftResultAttribute()
    {

        $str = "";
        if($this->result){
            $result = explode('-', $this->result);

            $r = str_split($result[0]);
            $str = implode('<br>', $r);
        }       
        return $str;
    }

    public function getRightResultAttribute()
    {
        $result = explode('-', $this->result);
        if(array_key_exists(2, $result)){
            $r = str_split($result[2]);
            $str = implode('<br>', $r);
            return $str;
        }else{
            return '';
        }
       
    }
}
