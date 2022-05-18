<?php

namespace App\Exports;

use App\people;
use App\Targetgroup;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet;



class targetgroupsViewExport implements FromView 

{

    public $districts_id;
    function __construct($districts) {
    $this->districts = $districts;
    }
    public function view(): View
    {
        if(  $this->districts  == 'all'){
            return view('viewexport.targetgroups.index', [
                'targetgroups' => Targetgroup::join('districts', 'targetgroups.targetgroups_districts_id', '=', 'districts.districts_id')->orderBy('districts.districts_id','asc')->get()
            ]);
        }else{
            return view('viewexport.targetgroups.index', [
                'targetgroups' => Targetgroup::join('districts', 'targetgroups.targetgroups_districts_id', '=', 'districts.districts_id')->where('targetgroups.targetgroups_districts_id',$this->districts)->orderBy('districts.districts_id','asc')->get()
            ]);
        }
       
    }
  

}