<?php

namespace App\Exports;

use App\User;
use App\people;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet;



// class SurveyViewExport implements FromView 

// {

//     public $districts_id;
//     function __construct($districts) {
//     $this->districts = $districts;
//     }
    
//     public function view(): View
//     {
//         if(  $this->districts  == 'all'){
//             return view('viewexport.people.index', [
//                 'people' => User::join('districts', 'users.districts_id', '=', 'districts.districts_id')->where('position','operator')->orderBy('districts.districts_id','asc')->get()
//             ]);
//         }else{
//             return view('viewexport.people.index', [
//                 'people' => User::join('districts', 'users.districts_id', '=', 'districts.districts_id')->where('position','operator')->where('users.districts_id',$this->districts)->orderBy('districts.districts_id','asc')->get()
//             ]);
//         }
       
//     }
  

// }

class SurveyViewExport implements FromCollection
{
    public $districts_id;
    function __construct($district,$survey) {
    $this->districts = $district;
    $this->survey = $survey;
    }
    
    public function collection()
    {
        if($this->districts=='all'){
            $data = DB::table($this->survey)
            ->join('users', $this->survey.'_user', '=', 'users.id')
            ->get();
        }else{

       
        $data = DB::table($this->survey)->where($this->survey.'_districts_id',$this->districts)
        // ->join('districts', $this->survey.'_districts_id', '=', 'districts.districts_id')
        ->join('users', $this->survey.'_user', '=', 'users.id')
        // ->exclude(['pseudo', 'email', 'age', 'created_at'])
        ->get();
    }
    
        return $data ;
        
    }
}