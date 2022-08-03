<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DengueCase;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\DB;

class DengueCaseController extends Controller
{
        public function AllCase(){
            $cases = DengueCase::all();
            return view('admin.allcase', compact('cases'));
        }

        public function ViewCase($case_id){
            
            $cases = DengueCase::find($case_id);
            return view('viewcase', compact('cases'));
            
        }
        public function UpdateCase($case_id){
            
            $cases = DengueCase::find($case_id);
            return view('admin.updatecase', compact('cases'));
        }
        public function Update(Request $request, $case_id){
            $cases = DengueCase::find($case_id)->update([

                'date' => $request->date,
                'denguestatus' => $request->denguestatus,
                'created_at' => Carbon::now()
            ]);
            return Redirect()->route('admin.allcase')->with('success','Dengue Case Updated Successfully');
        }

        public function AddCase(Request $request){
            $validateData = $request->validate([
                'patientname' => 'required|max:255',
            ]);

        DengueCase::insert([
            'patientname' => $request->patientname,
            'sex' => $request->sex,
            'age' => $request->age,
            'region' => $request->region,
            'area' => $request->area,
            'date' => $request->date,
            'denguestatus' => $request->denguestatus,
            'denguelevel' => $request->denguelevel,
            'created_at' => Carbon::now()

        ]);
    
        
        return Redirect()->back()->with('success','New Case Registered Successfully');
    }
}
