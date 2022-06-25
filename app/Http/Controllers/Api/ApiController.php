<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getcontact(Request $req)
    {
        try {
            $data =Contact::all();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
}
