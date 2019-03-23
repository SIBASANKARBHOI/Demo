<?php

namespace App\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model {

    //

    private static $_instance = null;
    protected $table = 'admin';


    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
            self::$_instance = new Admin();
        return self::$_instance;
    }

    public function insertData($qData)
    {
        try {
            return DB::table('set_details')->insert($qData);
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function checkLogin($data)
    {

        try {
            return DB::table('details')
                ->where('email',$data['email'])
                ->where('password',$data['password'])
                ->first();
        } catch (\Exception $exception) {
            dd($exception);
        }

    }


    public function viewQuestion1($limit,$start)
    {
        try {
            return DB::table('set_details')->offset($start)->limit($limit)->get();

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function viewQuestion()
    {
        try {
            return DB::table('set_details')->get();

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function count()
    {
        return DB::table('set_details')->count();
    }


    public function getQuestion($Q_no)
    {
        return DB::table('set_details')->where('Q_no',$Q_no)->first();
    }

    public function updateQuestion($data)
    {
        return DB::table('set_details')->where('Q_no',$data['Q_no'])->update($data);
    }

    public function deleteQuestion($id)
    {
        return DB::table('set_details')->where('Q_no',$id)->delete();
    }

    public function addQuestion($data)
    {
        return DB::table('set_details')->insertGetId($data);
    }

    public function checkData($que){
       return DB::table('set_details')->where('question',$que)->first();
    }


    public function viewTable(){
//        return DB::table('set_details')->get();
        return DB::table('set_details')->paginate(5);
    }



}
