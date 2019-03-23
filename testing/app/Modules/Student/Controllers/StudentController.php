<?php

namespace App\Modules\Student\Controllers;

use App\Modules\Student\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Student::index");
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @author Dharmendra Kumar Sharma <dharmendrasharma@globussoft.in>
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * @since XX March, 2018
     * @Desc Function Description
     */
    public function home(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Student::home');
        } else {
            $userData = $request->all();
            $validationResponse = Validator::make($userData, [
                'name' => 'required',
                'email' => 'required|email'
            ]);
            if ($validationResponse->fails()) {
                return Redirect::back()->withErrors($validationResponse)->withInput($request->input());
            } else {
                $obj = Student::getInstance();
                $res=$obj->check($userData);
                if ($res) {
                    return \redirect()->back()->with('msg', 'You Have Already attend the Test..!!')->withInput($request->input());
                }else{
                    $data=[];
                    $data['name']=$userData['name'];
                    $data['email']=$userData['email'];
                    $data['password']="";
                    $data['role']='S';
                    $obj = Student::getInstance();
                    $res=$obj->insert($data);
                    if ($res){
                        return view('Student::startTest');
                    }
                    else{
                        return \redirect()->back()->with('msg', 'Problem Occured Try Again..!!');
                    }
                }
            }
        }
    }

    /**
     * @author Dharmendra Kumar Sharma <dharmendrasharma@globussoft.in>
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @since 21 March, 2018
     * @Desc Function Description
     */
    public function start_test(Request $request)
    {
        $obj = Student::getInstance();
        $result1 = json_decode(json_encode($obj->hardQuestion(),true),true);
        $result2 = json_decode(json_encode($obj->mediumQuestion(),true),true);
        $result3 = json_decode(json_encode($obj->eassyQuestion(),true),true);
        $result4 = json_decode(json_encode($obj->veryEassyQuestion(),true),true);
        $my_array = array_merge($result1,$result2,$result3,$result4);
        $queData = array();
        while (count($my_array)) {
            $element = array_rand($my_array);
            $queData[$element] = $my_array[$element];
            unset($my_array[$element]);
        }
        return view('Student::question', ['user' => $queData]);
    }

}
