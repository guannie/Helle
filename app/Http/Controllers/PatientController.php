<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Patient;

use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use View; /*bg thu laravel gune class view*/

class PatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //for search filter
        // $filterArr = ["1"=>"id", "2"=>"name"];
        // if(!empty(Input::get('filter')))
        //     $filter = $filterArr[Input::get('filter')];
        // else
        //     $filter = "id";

        // $amino = Amino::all(); /*select semua, studbiru utk pggl model*/
        // $amino = \DB::table('patientinfo') /*select semua, studbiru utk pggl model*/
        // ->selectRaw("id, name")
        // ->orderBy($filter)
        // ->get();
        $record = DB::table('patientinfo')->get();
        
        //return View::make('admin.amino_index', array('amino' => $amino));
        return view('patientrecord')->with('record', $record);
    }

    public function create()
    {
        return view('newpatient');
    }


    public function show($id)  /*anta id dlm func niyh*/
    {
         //$record = DB::table('patientinfo')->find($id);  
         //return view('newpatient')->with('record', $record);
    //     $record = patientinfo::where("patientID", $id)->list('patientID', 'name');
    // return response()->json(['success' => true, 'record' => $record]);

         $record = DB::select("SELECT * FROM patientinfo WHERE patientID=$id");
         //$record = DB::table('patientinfo')->where('patientID', $id)->first(); 
        return response()->json(['success' => true, 'record' => $record]);
    }

    public function delete($id)
    {
        //$patient = DB::select("SELECT * FROM patientinfo WHERE patientID=$id")->delete(); /*syntax lara,*/
        Patient::where('patientID', $id)->delete();
        Session::flash('message', 'Succesfully delete patient record!');
        return Redirect::to('patientrecord'); /*flash, digunakan sekali shje. then terminated*/
    }



     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Patient::find($id);
        return View::make('editrecord', array('record'=>$record));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_process(Request $request)
    {
        // $rules_edit = array(
        //     'name'            => 'required',
        //     // 'picture'         => 'required',
        //     'symbol'          => 'required',
        //     'polarity'        => 'required', /*student is table name*/
        //     'acidity'         => 'required',
        //     'codon'           => 'required',
        //     'esential'        => 'required',
        //     'isoelectric'     => 'required',
        //     'formula'         => 'required',
        //     'iupac'           => 'required',
        //     'molar'           => 'required',
        //     'hydropathy'      => 'required',
        //     'melting'         => 'required',
        //     'boiling'         => 'required',
        //     'density'         => 'required',
        //     'water'           => 'required'
        // );
        // $validator = Validator::make(Input::all(), $rules_edit);

        // $id         = Input::get('id');
        // $isNewPic   = Input::get('isNewPic', 0);

        // if($isNewPic)
        //     array_push($rules_edit,"'picture' => 'required'");

        // if ($validator->fails()) {
            
        //     $messages = $validator->messages(); /*klau fails, laravel sent a message*/
        //     return Redirect::to('amino_edit/'.$id)/*ikut name dlm route*/
        //      ->withErrors($validator);
        //  }
        //  else
        //  {
            $id   = Input::get('id');
            $edit = Patient::find($id); /*mcm insert into db edit tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
            $edit->name = Input::get('name');
            $edit->age = Input::get('age');
            $edit->gender = Input::get('gender');
            $edit->daysInHospital = Input::get('days');
            /*$edit->password = Hash::make(Input::get('password')); /*hash utk encrypt*/



            $edit->save();

            Session::flash('message', 'Successfully edited Amino Acid!');
            return Redirect::to('patientrecord'); /*flash, digunakan sekali shje. then terminated*/

         }
    
}
