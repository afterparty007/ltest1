<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function example()
    {
        $name = 'Mike';
        $location = 'USA';
        $people = [
            'Mike',
            'John',
            'Judy',
            'Mya'
        ];
        //return view('example')->with('name', $name)->with('location', $location);
        return view('example', compact('name', 'location', 'people'));
    }
}
