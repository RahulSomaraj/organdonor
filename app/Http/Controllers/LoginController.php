<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login( Request $request) {
        $data = $request->all();
        return response()->json(
            [
              'status' => '200',
              'data' => $data,
              'message' => 'success'
            ],
            200
          );
    }
}
