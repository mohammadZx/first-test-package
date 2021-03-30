<?php
namespace Smd\Cms\Http\Controllers;

class AdminController{
    public function index(){
        return dd(\Cms::first());
        return view('cms::admin-index', ['param'=> 'this is parametr']);
    }
}