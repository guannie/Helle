<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;

use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

class patientInfoController extends Controller
{
     public function create()
    {
        return View::make('newpatient'); /*akan return satu file view- paparkan pd end user, make- syntax dlm laravel*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function patientInfo_create_process(Request $request)
    {
        // $rules = array(
        //     'name'            => 'required',
        //     'picture'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'symbol'          => 'required',
        //     'polarity'        => 'required', /*student is table name*/

        //     ); /*validation*/
        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails())
        // {
        //     $messages = $validator->messages(); /*klau fails, laravel sent a message*/
        //     return Redirect::to('amino_create')/*ikut name dlm route*/
        //      ->withErrors($validator);
        // }
        // else
        // {

            //$imageName = time().'.'.$request->picture->getClientOriginalExtension();
            //$request->picture->move(public_path('upload/amino'), $imageName);

            $add = new Patient; /*mcm insert into db add tuh var, bley letak name ape2, stud tuh modelnya=tbl*/
            $add->name = Input::get('name');
            $add->age = Input::get('age');
            $add->gender = Input::get('gender');
            $add->daysInHospital = Input::get('days');
            /*$add->password = Hash::make(Input::get('password')); /*hash utk encrypt*/



            $add->save();

            Session::flash('message', 'Successfully created Amino Acid!');
            return Redirect::to('patientrecord'); /*flash, digunakan sekali shje. then terminated*/
        //}
    }
}
