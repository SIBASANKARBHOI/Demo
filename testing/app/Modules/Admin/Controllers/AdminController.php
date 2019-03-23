<?php

namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Admin::index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//**************************Admin Login**************************
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin::login');
        } else {
            $data = $request->all();

            $validation = Validator::make($data, [
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validation->fails()) {
                return Redirect::back()->withErrors($validation)->withInput($request->input());
            }
            $val['password'] = $data['password'];
            $obj = Admin::getInstance();
            $result = $obj->checkLogin($data);
            if ($result) {
                if ($result->role == 'A') {
                    Session::put('admin', $result);
//                dd(Session::get('admin'),'shiv');
                    return view('Admin::home', ['result' => $result]);
                }
            } else {
                return redirect()->back()->with('errorMsg', 'Please Enter valid Credentials..!!')->withInput($request->input());
            }
        }
    }

//******************************Home***********************************

    public function home(Request $request)
    {
        if ($request->isMethod('get')) {
            if (Session::get('admin')) {
                $result = Session::get('admin');
                return view('Admin::home', ['result' => $result]);
            }
            return view('Admin::home');
        } else {
            dd($request->all(), 'sharma');
        }
    }

//*********************Logout**************************************
    public function logout(Request $request)
    {
        Session::forget('admin');
        return redirect('/admin/login');
    }


//********************************View Question*******************************

    public function viewQuestion(Request $request)
    {
        return view('Admin::viewQuestion');
    }


//***************************viewQuestionAjaxHandler*****************************

    public function viewQuestionAjaxHandler(Request $request)
    {


        $obj = new Admin();
        $limit = $request->input('length');
        $start = $request->input('start');
        $result = json_decode(json_encode($obj->viewQuestion1($limit, $start), true), true);

        $totalFiltered = $totalData = $obj->count();
        $res = [];
        foreach ($result as $question) {
            $res[] = [

                'Q_no' => $question['Q_no'],
                'question' => $question['question'],
                'optn_A' => $question['optn_A'],
                'optn_B' => $question['optn_B'],
                'optn_C' => $question['optn_C'],
                'optn_D' => $question['optn_D'],
                'answer' => $question['answer'],
                'diff_level' => $question['diff_level'],
                'Action' => "<div class='dropdown'>
                                <button onclick='myFunction(" . $question['Q_no'] . ")' class='dropbtn'>Action</button>
                                <div id='myDropdown" . $question['Q_no'] . "' class='dropdown-content'>
                                    <a href='/admin/editQstnPaper/" . $question['Q_no'] . "'>Edit</a>
                                     <a onclick='getConfirmation(" . $question['Q_no'] . ")' id='btn" . $question['Q_no'] . "'>Delete</a>
                                  </div>
                            </div>"
            ];
        }

        return $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $res
        );

        //end


    }


//***********************************edit Question Papper****************************


    public function editQuestion(Request $request)
    {

        if ($request->isMethod('get')) {
            $obj = new Admin();
            $result = json_decode(json_encode($obj->viewQuestion(), true), true);
//            dd($result);
            return view('Admin::viewQuestion');
        } else {
            $Q_no = Session::get('a');
            Session::forget('a');
            $data = array();
            $data['Q_no'] = $Q_no;
            $data['question'] = $request->question;
            $data['optn_A'] = $request->Option_A;
            $data['optn_B'] = $request->Option_B;
            $data['optn_C'] = $request->Option_C;
            $data['optn_D'] = $request->Option_D;
            $data['answer'] = $request->answer;
            $data['diff_level'] = $request->level;
            $obj = new Admin();
            $res = $obj->updateQuestion($data);
            if ($res == 1) {
                return redirect()->back()->with('msg', 'Data Updated..!!');
            } else {
                return redirect()->back()->with('msg', 'Nothing Is Updated..!!');
            }
        }

    }


//******************Edit Question Paper***************************

    public function editQstnPaper(Request $request, $Q_no)
    {
        if ($request->isMethod('get')) {
            $obj = new Admin();
            $res = $obj->getQuestion($Q_no);
            return view('Admin::editQstnPaper', ['result' => $res]);
        }
    }

//*************************Delete Question*******************

    public function deleteQuestion(Request $request)
    {
        $obj = Admin::getInstance();
        $result = $obj->deleteQuestion($request->all()['question_No']);
        if ($result) {
            return Response::json(["code" => "200", "msg" => "Successfully deleted"]);
        } else {
            return Response::json(["code" => "400", "msg" => "Error in deletion"]);
        }
    }


    public function addQuestion(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin::addQuestion');
        } else {
            if ($request->question == null || $request->Option_A == null || $request->Option_B == null || $request->Option_C == null || $request->Option_D == null || $request->answer == null || $request->level == null) {
                header("Refresh:0");
                return \redirect()->back()->with('msg', 'Every Field is Required..!!')->withInput($request->input());
            }
            $data = array();
            $data['question'] = $request->question;
            $data['optn_A'] = $request->Option_A;
            $data['optn_B'] = $request->Option_B;
            $data['optn_C'] = $request->Option_C;
            $data['optn_D'] = $request->Option_D;
            $data['answer'] = $request->answer;
            $data['diff_level'] = $request->level;
            $obj = Admin::getInstance();
            $result = $obj->addQuestion($data);
            if ($result) {
                return redirect()->back()->with('msg', 'Question Added Successfully..!!');
            } else {
                return redirect()->back()->with('msg', 'Failed To Add Question Plz Try Again..!!');
            }
        }
    }

//*********************Use of pagination in this table******************

    public function viewTable()
    {
        $obj = Admin::getInstance();
        $result = $obj->viewTable();
//        dd($result);
        return view('Admin::viewTable', ['userData' => $result]);
    }


}
