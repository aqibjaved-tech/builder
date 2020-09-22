<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addgroup()
    {
        return view('widgets.addgroup')->render();
    }

}
