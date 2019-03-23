<?php

namespace App\Modules\Student\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{

    //


    private static $_instance = null;
    protected $table = 'student';

    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
            self::$_instance = new Student();
        return self::$_instance;
    }

    public function check($userData)
    {
        try {
            return DB::table('details')->where('email', $userData['email'])->first();
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function insert($data)
    {
        try {
            return DB::table('details')->insertGetId($data);
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    /**
     * @author Dharmendra Kumar Sharma <dharmendrasharma@globussoft.in>
     * @return mixed
     * @since XX March, 2018
     * @Desc Function Description
     */
    public function hardQuestion()
    {
        try {
            return DB::table('set_details')->where('diff_level', 'Hard')->orderBy(DB::raw('RAND()'))->take('2')->get();
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function mediumQuestion()
    {
        try {
            return DB::table('set_details')->where('diff_level', 'Medium')->orderBy(DB::raw('RAND()'))->take('4')->get();
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function veryEassyQuestion()
    {
        try {
            return DB::table('set_details')->where('diff_level', 'VeryEassy')->orderBy(DB::raw('RAND()'))->take('2')->get();
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function eassyQuestion()
    {
        try {
            return DB::table('set_details')->where('diff_level', 'Eassy')->orderBy(DB::raw('RAND()'))->take('2')->get();
        } catch (\Exception $exception) {
            dd($exception);
        }
    }


}
