<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-segitiga', function (Request $request) {
    $number = $request->input('number');
    $validated = preg_replace( '/[^0-9]/', '', $number );

    if($validated) {
        $arr_number = str_split($number);
        $n = 0;
        for ($x = 0; $x < count($arr_number); $x++) {
            echo $arr_number[$x];
            for ($y = 0; $y <= $n; $y++) {
                echo "0";
            }
            $n++;
            echo "<br>";
        }
    } else {
        echo "error input not number";
    }
});

Route::get('/generate-ganjil', function (Request $request) {
    $number = $request->input('number');
    $validated = preg_replace( '/[^0-9]/', '', $number );

    if($validated) {
        for ($x = 1; $x <= $number; $x++) {
            if($x % 2 == 1) {
                echo "$x <br>";
            }
        }
    } else {
        echo "error input not number";
    }
});


Route::get('/generate-prima', function (Request $request) {
    $number = $request->input('number');
    $validated = preg_replace( '/[^0-9]/', '', $number );

    if($validated) {
        for ($x = 1; $x <= $number; $x++) {
            if($x % 2 == 1) {
                echo "$x <br>";
            }
        }
    } else {
        echo "error input not number";
    }
});