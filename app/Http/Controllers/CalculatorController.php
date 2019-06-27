<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    const ADD = "+";
    const SUB = "-";
    const MUl = "*";
    const DIV = "/";

    public function calculator(Request $request)
    {
        $num1 = $request->numOne;
        $num2 = $request->numTwo;
        $calculate =$request->cal;
        $result = null;
        switch ($calculate) {
            case self::ADD:
                $result = $num1 + $num2;
                break;
            case self::SUB:
                $result = $num1 - $num2;
                break;
            case self::MUl:
                $result = $num1 * $num2;
                break;
            default:
                if ($num2 != 0) {
                   $result = $num1 / $num2;
                }else{
                    return view('message');
                }
        }
        return view('list', compact('result','calculate'));
    }
}