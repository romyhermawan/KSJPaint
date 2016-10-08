<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/
use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use App\User;
use Input;
use Auth;
use Validator;
use Redirect;

class admincontroller extends Controller
{
    public function login()
    {
        $username = Request::input('email');
        $password = Request::input('password');

        $valid = Validator::make(Request::all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($valid->fails()){
            return redirect('/loginadmin')->withErrors('Failed to Login');
        }else{
            
            $auth = Auth::attempt([
                'email' => $username,
                'password' => $password
            ]);

            if(!$auth){
                return redirect('/loginadmin')->withErrors('Username or Password doesn\'t exist');
            }else{
                return view('Master.MasterBack');
            }
        }
    }

    public function logout(){
       
        Auth::logout();
        return redirect('/loginadmin');
    }

    public function change()
    {
        $confirm = Request::input('confirm');
        $new = Request::input('new');
        $old = Request::input('old');
        //$user = User::find(Auth::user()->id);
        $valid = Validator::make(Request::all(),[
            'old' => 'required'
        ]);
        $auth = Auth::attempt([
            'password' => $old
            ]); 
 
        if($valid->fails())
        {
            return redirect('changepass')->with('message','Please Fill The Current Password');
        }
        elseif (empty($new)) {
            return redirect('changepass')->with('message','Please Fill The New Password');
        }
        elseif(empty($confirm)){
            return redirect('changepass')->with('message','Please Fill The Confirmasi New Password');
        }
        elseif($new != $confirm)
        {
            return redirect('changepass')->with('message','Please Check The New & Confirm Password');
        }
        elseif($old != $auth){
            return redirect('changepass')->with('message','Please Check Your Old Password');
        }
        elseif($old == $auth){
            //echo $new; die();
            $data = User::first();
            $data->password = bcrypt($new);
            $data->save();

            return redirect('changepass')->with('success','Password has been changed');
        }
    }
}
