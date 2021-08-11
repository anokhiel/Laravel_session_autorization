<div id="shortinfo">
    <h3>Личный кабинет</h3>
<div style=" padding:5px; margin:15px; width:150px;" id="photoplace">  
    <x-userphoto id='{{$id }} ' /> 
</div>
<div >{{session('lastname').' '.session('name').' '.session('patronom') }}</div>

<div>Группа: {{session('group')}}</div>
<hr/>

 <div><a target="_blank" href="{{route('index') }}/entrant/uploaddocs&user={{session('id')}}">ФОТОКОПИИ ДОКУМЕНТОВ</a>
 %%dogovor%%</div>
 
<div style="width:600px">
<div class="inforchange">Адрес: </div> 
<div class="inforchangevisual">{{session('address')}}</div>
<div class="inforchangehidden">
        <textarea style="width:600px; height:50px;" user="{{session('id')}}" id="address">{{session('address')}}</textarea>
        <div class="enter" style="line-height: 15px; margin-top:50px">Сохранить изменения</div>
    </div>
<div class="inforchange">Телефон:</div>
<div class="inforchangevisual">{{session('phone')}}</div>
<div class="inforchangehidden">
<input type="text" style="width:600px;" id="phone" user="{{session('id')}}"" value="{{session('phone')}}" placeholder="Телефон"/>
<div class="enter" style="line-height: 15px;  margin-top:50px">Сохранить изменения</div>
</div>
    <div class="inforchange">Адрес электронной почты:</div>
<div class="inforchangevisual">{{session('email')}}</div>
<div class="inforchangehidden">
<input type="text" style="width:600px;" id="email" user="{{session('id')}}" value=" {{session('email')}} " placeholder="$lang_enteryouemail"/>
<div class="enter"  style="line-height: 15px; margin-top:50px">Сохранить изменения</div>
</div> 

<div class="inforchange">Пароль:</div>
<div class="inforchangevisual"></div>
<div class="inforchangehidden">
<input type="text" style="width:600px;" id="password" user="{{session('id')}}  placeholder="Введите новый пароль"/>
<div class="enter" style="line-height: 15px;  margin-top:50px">Изменить пароль</div>
</div>
</div>
<div style="text-align:center"><button id="fullinfobutton" onclick="display('student/fullinfo','id={{session('id')}}','#shortinfo')">Расширенная информация</button></div>

</div>
    
<div style="font-size: .9em">Для редактирования щелкните на красное название категории информации (Адрес, Телефон и т.д.)</div>
<script>

          
$('.inforchange').click( function(){
 $(this).next().toggle('slow');
$(this).next().next().toggle('slow');
 
    });
    $('.enter').click(function(){
        var tex=$(this).parent().prev();
       
        var user=$(this).prev().attr('user');
        var type=$(this).prev().attr('id');
        var val=$(this).prev().val();
        var val1 = type=='password'?'':val;
        display('student/updateprofile', 'type='+type+'&val='+val+'&user='+user, '#popup',()=>{$(tex).html(val1);} )
     
    });
    

</script>