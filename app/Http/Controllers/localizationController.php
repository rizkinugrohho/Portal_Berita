<?php

namespace App\Http\Controllers;


class localizationController extends Controller
{
    public function switch($language ='en')
    {
        request()->session()->put('locale', $language);
        return redirect()->back();
    }
}
