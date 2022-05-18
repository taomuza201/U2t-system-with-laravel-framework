<?php

namespace App\Exports;

use App\people;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet;



class PeopleViewExport implements FromView 

{

    public $districts_id;
    function __construct($districts) {
    $this->districts = $districts;
    }
    public function view(): View
    {
        if(  $this->districts  == 'all'){
            return view('viewexport.people.index', [
                'people' => User::join('districts', 'users.districts_id', '=', 'districts.districts_id')->where('position','operator')->orderBy('districts.districts_id','asc')->get()
            ]);
        }else{
            return view('viewexport.people.index', [
                'people' => User::join('districts', 'users.districts_id', '=', 'districts.districts_id')->where('position','operator')->where('users.districts_id',$this->districts)->orderBy('districts.districts_id','asc')->get()
            ]);
        }
       
    }
  

}