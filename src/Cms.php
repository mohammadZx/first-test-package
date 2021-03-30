<?php
namespace Smd\Cms;

use Smd\Cms\Model\Admin;
class Cms{
    public function first(){
        return Admin::all();
    }
}