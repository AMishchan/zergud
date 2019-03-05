<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Eloquent\Some;

class SomeController
{
    protected $some;

    public function __construct(
        Some $some
    )
    {
        $this->some = $some;
    }


    public function add($dibil, $mark, $info)
    {
        if ($dibil = 'handrat')
        {

            $data = json_encode($info);
            $this->addSome($mark, $data);

        }
    }

    public function addSome($mark, $data)
    {

        $category = new Some();
        $info = 'info';
        $key = 'key';
        $category->$info= $data;
        $category->$key = $mark;
        $category->save();
        return $category;
    }
}
