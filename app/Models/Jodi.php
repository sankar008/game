<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jodinumber;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jodi extends Model
{
    use HasFactory;

    protected $fillable = ["name", "result", 'slug_name', "start_time", "end_time", "after_time", "before_time", "is_monday", "is_tuesday", "is_wednesday", "is_thusday", "is_friday", "is_saturday", "is_sunday", "background_color", "start_time_color", "end_time_color", "name_color", "result_color", "details"];

    protected $appends = array('main_result', 'left_result', 'right_result');

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

    public function getNameAttribute($name)
    {
        return ucfirst($name);
       
    }

    public function jodi_number():HasOne{
        return $this->hasOne(Jodinumber::class, 'jodi_id', 'id')->where('date', date('Y-m-d'));
    }

    public function all_jodi_number():HasMany{
        return $this->hasMany(Jodinumber::class, 'jodi_id', 'id')->orderBy('date');
    }

    public function allocation():HasMany{
        return $this->hasMany(Allocation::class, 'market_id', 'id');
    }
}
