 
    @if($file)
    
     <div><span id="myphoto"><img src="{{route('index')}}/student/file?type=portraits&file={{$id}}.jpg&z={{$rand}}" style="width:100px; "/></span></div>
     <div style="color:red; font-size:10px; cursor:pointer"'.$target .' id="photo">Удалить</div>
     <div style="color:red; font-size:10px; cursor:pointer" id="rotate">Повернуть</div>
    <script> 
    $('#rotate').click(()=>display('student/rotatephoto','id={{$id}}', '#myphoto') );
    $('#photo').click(()=>{if(confirm('Удалить фотографию?')){ display('student/removephoto','id={{$id}}','#photoplace')}});
            </script>
    @else
        <form method="POST" id="photoform" action="{{ url('student/uploadphoto')}}"  enctype="multipart/form-data" > 
            @csrf 
            <lable  for="perphoto">Загрузить фото</lable>
            <input id="perphoto" name="Filedata" style="width:90px; font-size:10px"  type="file" onchange="$(this).parent().submit()"/>
            <input type="hidden" name="user" value="{{$id}}"/>
        </form> 
  
    @endif
