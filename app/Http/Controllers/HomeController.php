<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{


    public static function generateSegitiga(Request $request){
        $validator = Validator::make($request->all(), [
            'angka' => 'required|int'
        ]);
        if ($validator->fails()) {
            $data = [
                'isSuccess' => 'no',
                'msg' => 'periksa kembali isian kamu, Input Harus Angka!'
            ];
            return response()->json($data);
        }
        $data = [
            'isSuccess' => 'yes',
            'msg' => 'soon ' .  $request->angka
        ];
        return response()->json($data);

    }
    public static function generateBilGanjil(Request $request){


        $validator = Validator::make($request->all(), [
            'angka' => 'required|int'
        ]);
        if ($validator->fails()) {
            $data = [
                'isSuccess' => 'no',
                'msg' => 'periksa kembali isian kamu, Input Harus Angka!'
            ];
            return response()->json($data);
        }
        $msg = '';

        $str_odd = '';

        for ($i = 1; $i <= $request->angka; $i++) {
            if (($i % 2) != 0) {
                $str_odd .= $i;
            } else {
                $str_odd .= ' ';
            }
        }

        if($str_odd != ''){
            $data = [
                'isSuccess' => 'yes',
                'msg' => $str_odd
            ];

        }else{
            $data = [
                'isSuccess' => 'no',
                'msg' => 'error!'
            ];
        }


        return response()->json($data);

    }
    public static function generateBilPrima(Request $request){


        $validator = Validator::make($request->all(), [
            'angka' => 'required|int'
        ]);
        if ($validator->fails()) {
            $data = [
                'isSuccess' => 'no',
                'msg' => 'periksa kembali isian kamu, Input Harus Angka!'
            ];
            return response()->json($data);
        }
        $out_put = '';
        $n =  $request->angka;
        $ct = 0;
        $num = 2;
        while ($ct < $n) {
            $dCt = 0;
            for ($i = 2; $i <= $num; $i++) {
                if (($num % $i) == 0) {
                    $dCt++;
                }
            }
            if ($dCt == 1) {
                $out_put .= $num . "  ";
                $ct++;
            }
            $num++;
        }


        if ($out_put != '') {
            $data = [
                'isSuccess' => 'yes',
                'msg' => $out_put
            ];
        } else {
            $data = [
                'isSuccess' => 'no',
                'msg' => 'error!'
            ];
        }


        return response()->json($data);

    }
}

