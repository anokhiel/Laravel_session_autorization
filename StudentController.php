<?php

namespace App\Http\Controllers;

use App\Models\MlReader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;

class StudentController extends Controller
{
    public function router($act, Request $request){
         if(method_exists($this,$act)){
        return $this->$act($request);
 
 }else{
     return view('start.permanent',['message'=>'Page is not found', 'dir'=>'permanent', 'item'=>'']);
 }
}

public function index($request){
    Storage::unlink('data/portraits/'.$request->input('id').'.jpg');

}
public function file($request){ //Отает файл 
    if(!$request->input('file') OR !$request->input('type')){exit();}
   if(Storage::disk('local')->exists('data/'.$request->input('type').'/'.$request->input('file')) ) return Storage::download('data/'.$request->input('type').'/'.$request->input('file'));
   return '';
}

public function rotatephoto($request){
   $path=storage_path('app/data/portraits/'.$request->input('id').'.jpg');
    Image::make($path)->rotate(90)->save($path);
 return '<img src="'.route('index').'/student/file?type=portraits&file='.$request->input('id').'.jpg&z='.rand(100,200).'" style="width:100px;height:auto "/>'; 
}
public function removephoto($request){
        Storage::delete('data/portraits/'.$request->input('id').'.jpg');
return view('components.userphoto',['id'=>1, 'file'=>false]);
}
public function uploadphoto($request){
    $path=storage_path('app/data/portraits/'.$request->input('user').'.jpg');
         Image::make($request->file('Filedata'))->resize(100, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save($path);
    return Redirect::route('user',['act'=>'personalinfo']);

}
public function updateprofile($request){
       if($request->type!='password'){
         $res=MlReader::find($request->input('user'))->update([$request->input('type') => $request->input('val')]);
         session([$request->input('type') => $request->input('val')]);
                 }else{
            $res=MlReader::find($request->input('user'))->update([$request->input('type')=> md5($request->input('val'))]);
            }
    return $res?'Данные сохранены':'Данные не удалось сохранить';
}
public function fullinfo($request){
    $rar=[];
        if(session('id')!=$request->input('id') AND session('level')<3){
    return '<h2>Просмотр профиля запрещен</h2>';
    }
 
        if(Storage::disk('local')->exists('data/personalfiles/'.$request->input('id'))){
            
$rar=Storage::get('data/personalfiles/'.$request->input('id'));
        }
    return view('user.fullinfo',['profile'=>$rar]);
}
public function updateinfo($request){
    //dd($request->all());
  Storage::put('data/personalfiles/'.$request->input('id'), collect($request->all())->filter(function($v,$k){return ($k  !='id');})->toJson());  
  
  return '<script>location.reload()</script>';
}

}
