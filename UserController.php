<?php
namespace App\Http\Controllers;
use App\Models\MlReader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class UserController extends Controller{
    public function router($act, Request $request){
     if(method_exists($this,$act)){
        return $this->$act($request);
}else{
    return view('start.permanent',['message'=>'Page is not found', 'dir'=>'permanent', 'item'=>'']);
}
    }
    public function register(){ //Information about registration

        return view('user.register');
    }
public function enter(Request $request){//Authorization
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
               ]);
 $credentials['email']=strtolower($credentials['email']);
 $remember=$request->post('remember')=='yes'?true:false;
    $reader=MlReader::where('email',$credentials['email'])->first();
if($reader->password==md5($credentials['password'])){
    session([
        'id'=>$reader->id_reader,
        'email'=>$reader->email,
        'name'=>$reader->name ,
        'lastname'=>$reader->lastname ,
        'patronom'=>$reader->patronom ,
        'phone'=>$reader->phone ,
        'group'=>$reader->group ,
        'xgroup'=>$reader->xgroup,
        'address'=>$reader->address,
        'lang'=>$reader->lang,
        'level'=>$reader->level,
        'student'=>$reader->student,
        'sl'=>generatesl($reader),
        'certificates'=>$reader->certificates,
        'graduate'=>$reader->graduate,
        'fullinfo'=>$reader->fullinfo
    ]);
 if($remember){
      return response('<script>location.reload()</script>')->withCookie('mlremember', $reader->email, 525600 );
    }
return '<script>location.reload()</script>';
}else{
return '<h3>Вы указали неверные данные</h3>';
}
}
public function out(Request $request){ //Exit from account
    $token = $request->session()->token();
    $request->session()->flush();
    Cookie::queue(Cookie::forget('mlremember'));
    return ['csrf-token' => $token, ];
}
public function personalinfo(){ //Страница с личной информацией
if(session('id')){
    return view('start.permanent',['message'=>view('user/personalinfo',['id'=>session('id') ]), 'dir'=>'user', 'item'=>'personalinfo']);
}
return redirect()-> route('permanent', ['permissiondenied']);
}
    
}