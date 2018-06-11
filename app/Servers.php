<?php

namespace MMORATE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Kyslik\ColumnSortable\Sortable;

class Servers extends Model
{
    use Sortable;

    public $sortable = ['rating', 'name', 'reviews', 'online', 'votes'];

    public static function scopeLineage($query){
        return $query->whereGame('lineage')->whereStatus('1');
    }

    public static function scopeAion($query){
        return $query->whereGame('aion')->whereStatus('1');
    }

    public static function scopeJade($query){
        return $query->whereGame('jade')->whereStatus('1');
    }

    public static function scopeMu($query){
        return $query->whereGame('mu')->whereStatus('1');
    }

    public static function scopePerfect($query){
        return $query->whereGame('perfect')->whereStatus('1');
    }

    public static function scopeRf($query){
        return $query->whereGame('rf')->whereStatus('1');
    }

    public static function scopeWow($query){
        return $query->whereGame('wow')->whereStatus('1');
    }

    public static function scopeOther($query){
        return $query->whereGame('other')->whereStatus('1');
    }

    public static function scopeMyCount($query){
        return $query->whereUser_id(Auth::user()->id)->count();
    }

    public function comments(){
        return $this->belongsTo('MMORATE\Comments');
    }

//    public static function rating(){
//        return $this->reviews()->avg('rating');
//    }
}
