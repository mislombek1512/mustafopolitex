<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bachelor;
use App\Models\Bussin;
use App\Models\Congratulation;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Facult;
use App\Models\Graduat;
use App\Models\Nam;
use App\Models\Reception;
use App\Models\Rectorat;
use App\Models\Student;
use App\Models\Studentmen;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getcontact(Request $req)
    {
        try {
            $data = Contact::all();
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
    public function getbussins(Request $req)
    {
        try {
            $data = Bussin::all();
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

    public function getstudentmens(Request $req)
    {
        try {
            $data = Studentmen::all();
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

    public function getstudents(Request $req)
    {
        try {
            $data = Student::all();
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

    public function getbachelors(Request $req)
    {
        try {
            $data = Bachelor::all();
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

    public function getgraduats(Request $req)
    {
        try {
            $data = Graduat::all();
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

    public function getfacults(Request $req)
    {
        try {
            $data = Facult::all();
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

    public function getnams(Request $req)
    {
        try {
            $data = Nam::all();
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

    public function getOneNews(Request $req, $id) {
        try{

            $news = Nam::where("id",$id)->first();
            return response()->json([
                'ok' => true,
                "data"=>$news
            ]);
        }catch(\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }


    public function getfacts(Request $req)
    {
        try {
            $data = Fact::all();
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

    public function getcongratulations(Request $req)
    {
        try {
            $data = Congratulation::all();
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

    public function getrectorats(Request $req)
    {
        try {
            $data = Rectorat::all();
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

    public function getReception(Request $req)
    {
        try {
            $data = Reception::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    public function postReception(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|min:2|max:15',
            'matn' => 'required',
            'mavsu' => 'required',
            'fayl' => 'required',
        ]);
        $product = new Reception;
        $product->name = $request->name;
        $product->phone = $request->phone;
        $product->matn = $request->matn;
        $product->mavsu = $request->mavsu;
        $product->fayl = $request->fayl;
        $product->save();
        return response()->json([
            'message' => ' Product Added Successfully:',
        ], 200);
    }
}
