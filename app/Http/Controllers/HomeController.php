<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function show($offset,$limit)
    {
   

        $result = Home::get_data($offset,$limit);

  

        if($result){
            $div = "";
            foreach (array_reverse($result) as $key => $value) {
                $div .= "   <tr>
                                <td>".$value->id."</td>
                                <td>".$value->citymunDesc."</td>
                            </tr>"; 
            }
        }

        return $div;
    

  
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Home $home)
    {
        //
    }

    public function update(Request $request, Home $home)
    {
        //
    }

    public function destroy(Home $home)
    {
        //
    }
}