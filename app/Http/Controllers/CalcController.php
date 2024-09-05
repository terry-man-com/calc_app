<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($val1,$ope,$val2)
    {
        if ($ope == 'addition')
        {
            $result = $val1 + $val2;
        }
        elseif ($ope == 'subtraction')
        {
            $result = $val1 - $val2;
        }
        elseif ($ope == 'multiplication')
        {
            $result = $val1 * $val2;
        }
        else 
        {
            $result = $val1 / $val2;
        }
        
        return view('task.result', ['result' => $result]);
    }
}
