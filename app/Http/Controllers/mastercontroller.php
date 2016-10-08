<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Logo;
use Input;
use Auth;
use Validator;
use Redirect;
use File;

class mastercontroller extends Controller
{
    public function indexslider()
    {
        $data= Slider::all();

        return view('BackEnd.slider',compact('data'));
    }
    public function editslider()
    {
        $counter = Request::input('hiddenCounter');
        for($i=1;$i<=$counter;$i++){
            $validator = Validator::make(Request::all(),[
          'slider'.$i => 'mimes:jpeg,jpg,png,bmp,gif|max:10000|required',
          ]);

          if($validator->fails()){
            $message = $validator->errors();
            return redirect('master/slider')->with('message2',$message->first());
          }
        }
        
        Slider::truncate();
        $path = public_path().'/assetweb/images';

        if (file_exists($path)) {
            $this->removeDIR($path);
        }
        
        for($i=1;$i<=$counter;$i++){
            if(!is_null(Request::file('slider'.$i))){
                $url = Request::file('slider'.$i);

                $filename = $url->getClientOriginalName();
                $ext = pathinfo($filename,PATHINFO_EXTENSION);
                $url->move($path,'slider'.$i.'.'.$ext);
                $Slider = new Slider;
                $Slider->order = $i;
                $Slider->url = 'assetweb/images/'.'slider'.$i.'.'.$ext;
                $Slider->save();
            }
        } 
        return redirect('master/slider')->with('message2','Slider Updated');
      
    }

    public function removeDIR($path)
    {
        if (is_dir($path) === true)
        {
            $files = array_diff(scandir($path), array('.', '..'));

            foreach ($files as $file)
            {
                $this->removeDIR(realpath($path) . '/' . $file);
            }

            return rmdir($path);
        }

        else if (is_file($path) === true)
        {
            return unlink($path);
        }

        return false;
    }

    public function indexlogo()
    {
        $data = Logo::find(1);

        return view('BackEnd.logo',compact('data'));
    }

    public function editlogo()
    {
         $picture = Request::file('url');
         $validator = Validator::make(Request::all(),[
            'url' => 'required|mimes:jpeg,jpg,png,bmp,gif|max:1000'
          ]);
          if($validator->fails()){
            $message = $validator->errors();
            return redirect('master/logo')->with('message1',$message->first());
          
          }
          else{
            File::delete(public_path('logo').'/logo.png');
            $picture = Request::file('url')->move(public_path('logo'),'logo.png');
            
            return redirect('master/logo')->with('message1','Logo Updated');
          }
    }
}
