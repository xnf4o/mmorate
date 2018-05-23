<?php

namespace MMORATE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Servers extends Model
{

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
}
