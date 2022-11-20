<?php

namespace App\Http\Controllers;

use App\Http\Requests\outputRowValidationRequest;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class FibonacciController extends Controller
{
    public function index()
    {
        return view('admin.fibonacci');
    }
    public function output(outputRowValidationRequest $request)
    {
        //Fibonaaci From Input
        $row1 = $request->row1;
        $row2 = $request->row2;

        $fibonacci = [$row1, $row2];
        $fibonacci[] = $fibonacci[0] + $fibonacci[1];

        for ($i = 2; $i < 10; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return redirect()->route('fibonacci')->with('success', 'Berhasil menginputkan data dan hasilnya adalah ' . implode(', ', $fibonacci));
    }
}