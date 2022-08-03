<?php
namespace App\Http\Controllers;
use App\newcase;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class InsertCaseController extends Controller
{
    
    public function insert(){
        //$urlData = getURLList();
        return view('insertcase');
    }
    public function create(Request $request){
        $rules = [
			'patientname' => 'required|string|min:3|max:255',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$newcase = new newcase;
                $newcase->patientname = $data['patientname'];
                $newcase->sex = $data['sex'];
				$newcase->age = $data['age'];
				$newcase->region = $data['region'];
                $newcase->area = $data['area'];
                $newcase->date = $data['date'];
				$newcase->denguestatus = $data['denguestatus'];
				$newcase->denguelevel = $data['denguelevel'];
				$newcase->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}