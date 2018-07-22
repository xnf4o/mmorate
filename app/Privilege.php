<?php

namespace MMORATE;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'privilege';
    const PRIVILEGE_BB = 'bb_codes';
    const PRIVILEGE_SERVER_LINK = 'server_link';
    const PRIVILEGE_HEADER = 'header_image';
    const PRIVILEGE_BANNER = 'banner_image';

}
