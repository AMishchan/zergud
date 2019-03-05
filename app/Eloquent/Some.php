<?php
/**
 * Created by PhpStorm.
 * User: admin1
 * Date: 05.03.19
 * Time: 13:54
 */

namespace app\Eloquent;

use Illuminate\Database\Eloquent\Model;


class Some extends Model
{
    protected $table = 'some';
    protected $primaryKey = 'id';
}