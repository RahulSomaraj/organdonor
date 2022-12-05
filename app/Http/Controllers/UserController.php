<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create( Request $request ) {
        try {
            
            return response()->json(
                [
                  'status' => '200',
                  'data' => $data,
                  'message' => 'success'
                ],
                200
              );
        } catch (Throwable $e) {
            return response()->json(
                [
                  'status' => '400',
                  'data' => $data,
                  'message' => 'failure'
                ],
                400
              );
        }

        
    }
}
