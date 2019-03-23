<?php
/**
 * Created by PhpStorm.
 * User: GLB-141
 * Date: 2/14/2018
 * Time: 12:51 PM
 */

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Models\Admin;
use Illuminate\Support\Facades\DB;
use Input;
use Excel;


class MaatwebsiteDemoController extends Controller

{

    public function importExport()
    {
        return view('Admin::importExport');
    }

    public function downloadExcel($type)
    {

        $data = json_decode(json_encode(DB::table('set_details')->select('question', 'optn_A', 'optn_B', 'optn_C', 'optn_D', 'answer', 'diff_level')->get(), true), true);
        return \Maatwebsite\Excel\Facades\Excel::create('test', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });

        })->download($type);
    }

    public function importExcel()
    {
        $obj = Admin::getInstance();
        $qData = [];
        if (\Illuminate\Support\Facades\Input::hasFile('import_file')) {
            $path = \Illuminate\Support\Facades\Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
                foreach (json_decode(json_encode($data, true), true) as $key => $value) {
                    $check = $obj->checkData($value['question']);
                    if (!$check) {
                        $qData[] = array(
                            'question' => $value['question'],
                            'optn_A' => $value['optn_a'],
                            'optn_B' => $value['optn_b'],
                            'optn_C' => $value['optn_c'],
                            'optn_D' => $value['optn_d'],
                            'answer' => $value['answer'],
                            'diff_level' => $value['diff_level']
                        );
                    }
                }
                if (!empty($qData)) {
                    $result = $obj->insertData($qData);
                    if ($result) {
                        return redirect()->back()->with('msg', 'Data Updated..!!');
                    } else {
                        return redirect()->back()->with('msg', 'Failed to Update Try Again..!!');
                    }
                } else {
                    return redirect()->back()->with('msg', 'Nothing to be inserted because already all data exists..!!');
                }

            }

        }else{
            return redirect()->back()->with('msg', 'Please Select file first..!!');
        }

    }

}