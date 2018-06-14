<?php

namespace MMORATE;

use Illuminate\Database\Eloquent\Model;

class SmsCodes extends Model
{
    const CONFIRMED = 1;
    const UNCONFIRMED = 0;

    protected $table = 'codes';
}
