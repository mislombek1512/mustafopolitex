<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Applicantmen;
use App\Models\Architectural;
use App\Models\Bachelor;
use App\Models\Bussin;
use App\Models\Center;
use App\Models\Centerabout;
use App\Models\Charter;
use App\Models\Congratulation;
use App\Models\Contact;
use App\Models\Corruptionmen;
use App\Models\Corruptionsector;
use App\Models\Department;
use App\Models\Departmentabout;
use App\Models\Fact;
use App\Models\Facult;
use App\Models\Facultyabout;
use App\Models\Facultydirector;
use App\Models\Facultymember;
use App\Models\Filial;
use App\Models\Filialabout;
use App\Models\Filialdirector;
use App\Models\Graduat;
use App\Models\Histor;
use App\Models\Interactivserv;
use App\Models\Kafedraabout;
use App\Models\Kafedradirector;
use App\Models\Kafedramen;
use App\Models\Kafedraworker;
use App\Models\Masterylesson;
use App\Models\Nam;
use App\Models\Reception;
use App\Models\Rectorat;
use App\Models\Rekvizt;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Studentmen;
use App\Models\Techniq;
use App\Models\Uniquelink;
use App\Models\Fan;
use App\Models\Inovation;
use App\Models\Doctoral;
use App\Models\Finance;
use App\Models\Young;
use App\Models\Cultural;
use App\Models\Creative;
use App\Models\Erasmu;
use App\Models\Mechauz;
use App\Models\Space;
use App\Models\Raqamli;
use App\Models\Mixture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function getOneNews(Request $req, $id)
    {
        try {

            $news = Nam::where("id", $id)->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
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

        $fayl = $request->file('fayl');
        $path = $fayl->store('public/files');
        $product->fayl = substr(Storage::url($path),8);

        $product->save();
        return response()->json([
            'message' => ' Product Added Successfully:',
            'fileurl' => $path,
        ], 200);
    }
    public function getinteractivservs(Request $req)
    {
        try {
            $data = Interactivserv::all();
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
    public function getcharters(Request $req)
    {
        try {
            $data = Charter::all();
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
    public function getcenters(Request $req)
    {
        try {
            $data = Center::all();
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
    public function getcenterabouts(Request $req)
    {
        try {
            $data = Centerabout::all();
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
    public function getdepartments(Request $req)
    {
        try {
            $data = Department::all();
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
    public function getdepartmentabouts(Request $req)
    {
        try {
            $data = Departmentabout::all();
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
    public function getarchitecturals(Request $req)
    {
        try {
            $data = Architectural::all();
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
    public function getsliders(Request $req)
    {
        try {
            $data = Slider::all();
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
    public function gethistors(Request $req)
    {
        try {
            $data = Histor::all();
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
    public function getOneSliders(Request $req, $id)
    {
        try {

            $news = Slider::where("id", $id)->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
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
    public function getNewsPag(Request $req, $count)
    {
        try {
            //
            if (intval($count) == 0) {
                throw new \ErrorException('not found');
            }


            $data = Nam::orderBy("created_at", "DESC")->simplePaginate($count);
            return response()->json([
                'ok' => true,
                'data' => $data,
                "total_number" => Nam::all()->count()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    public function getGraduatsPag(Request $req, $count)
    {
        try {
            //
            if (intval($count) == 0) {
                throw new \ErrorException('not found');
            }


            $data = Graduat::orderBy("created_at", "DESC")->simplePaginate($count);
            return response()->json([
                'ok' => true,
                'data' => $data,
                "total_number" => Graduat::all()->count()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    public function getRektoratsPag(Request $req, $count)
    {
        try {
            //
            if (intval($count) == 0) {
                throw new \ErrorException('not found');
            }


            $data = Rectorat::orderBy("created_at", "DESC")->simplePaginate($count);
            return response()->json([
                'ok' => true,
                'data' => $data,
                "total_number" => Rectorat::all()->count()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    public function getfacultydirectors(Request $req)
    {
        try {
            $data = Facultydirector::all();
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
    public function getfacultymembers(Request $req)
    {
        try {
            $data = Facultymember::all();
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
    public function getfacultyabouts(Request $req)
    {
        try {
            $data = Facultyabout::all();
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
    public function getkafedramens(Request $req)
    {
        try {
            $data = Kafedramen::all();
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
    public function getkafedradirectors(Request $req)
    {
        try {
            $data = Kafedradirector::all();
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

    public function getkafedraworkers(Request $req)
    {
        try {
            $data = Kafedraworker::all();
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

    public function getkafedraabouts(Request $req)
    {
        try {
            $data = Kafedraabout::all();
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

    public function getfilials(Request $req)
    {
        try {
            $data = Filial::all();
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
    public function getfilialdirectors(Request $req)
    {
        try {
            $data = Filialdirector::all();
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

    public function getfilialabouts(Request $req)
    {
        try {
            $data = Filialabout::all();
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

    public function getapplicantmens(Request $req)
    {
        try {
            $data = Applicantmen::all();
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

    public function getuniquelinks(Request $req)
    {
        try {
            $data = [];
            if (in_array($req->lang, ["uz", "en", "ru"])) {
                $lang = $req->lang;
                $var = "title_" . $lang;
                $links = Uniquelink::select($var, 'link')->get();

                foreach ($links as $link) {
                    $data[$link->link] = $link->$var;
                }
            }
            return response()->json(
                $data,
            );
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    public function getcorruptionsectors(Request $req, Corruptionmen $corruptionmen)
    {
        try {
            $data = $corruptionmen->corruptionsectors()->first();
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

    public function getcorruptionmens(Request $req)
    {
        try {
            $data = Corruptionmen::all();
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

    public function gettechniqs(Request $req)
    {
        try {
            $data = Techniq::all();
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

    public function getmasterylessons(Request $req)
    {
        try {
            $data = Masterylesson::all();
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

    public function getrekvizts(Request $req)
    {
        try {
            $data = Rekvizt::first();
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

    public function getfans(Request $req)
    {
        try {
            $data = Fan::first();
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

    public function getinovations(Request $req)
    {
        try {
            $data = Inovation::first();
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

    public function getdoctorals(Request $req)
    {
        try {
            $data = Doctoral::first();
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

    public function getfinances(Request $req)
    {
        try {
            $data = Finance::first();
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

    public function getyoungs(Request $req)
    {
        try {
            $data = Young::first();
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

    public function getculturals(Request $req)
    {
        try {
            $data = Cultural::first();
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

    public function getcreatives(Request $req)
    {
        try {
            $data = Creative::first();
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

    public function geterasmus(Request $req)
    {
        try {
            $data = Erasmu::first();
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

    public function getmechauzs(Request $req)
    {
        try {
            $data = Mechauz::first();
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

    public function getspaces(Request $req)
    {
        try {
            $data = Space::first();
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

    public function getraqamlis(Request $req)
    {
        try {
            $data = Raqamli::first();
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

    public function getmixtures(Request $req)
    {
        try {
            $data = Mixture::first();
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
}
