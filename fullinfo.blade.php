
<div>
    <h3>Расширенная информация</h3>
    <button id="savefullinfo" >Сохранить</button>    <button onclick="if(confirm('Закончить редактирование без сохранения?')){location.reload()}" >Вернуться в личный кабинет</button>
    <div id="fullinforesponse"></div>

    <form method="POST" id="fullinfoform" onsubmit="updateinfo(this); return false" action="{{url('student/updateinfo')}}">
<x-profile/>
<input type='hidden' value='{{session('id')}}' id='id' />

    </form>  
 
   </div>
  
<script>
var profile={!!$profile!!}

var change='no';
if(change!='yes'){ 
   $('*[change="no"]').parent().hide(); 
   
    $('.official').parent().css('display','none')
    }
    $.map(profile,function(v,k){
        v=v!=null?v:'';
           $('#'+k).val(v).css('display','none'); 
    $('#'+k).prev().html('<p onclick="$(this).parent().next().toggle()"><b style="color:red">'+$('#'+k).attr('placeholder')+'</b>: '+v+'</p>');
     $('#'+k).prev().attr('class','spoiler');
} );


    
$('input, select').attr("name", function(){return this.id});
$('#savefullinfo').click(function(){
    //if(!$('input[status="compulsary"], select[status="compulsary"]').val()){alert("Не заполнены обязательные поля!"); return false;}
$('#fullinfoform').ajaxSubmit({
		type: 'POST',
		url: '{{url('student/updateinfo')}}',                
		target: '#fullinforesponse',
		success: function(e){return e},	      
        error: function (xhr, ajaxOptions, thrownError) {
            $('#fullinforesponse').html('<h2>Ошибка ввода данных</h2> '+xhr.responseText);
        }
	});
})


</script>