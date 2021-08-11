<style>
  #message  input{
        margin-top:15px;
        width:80%
    }
    select{   margin-top:15px;}
    .calendar{
         margin-top:15px;
         
    }
     input[type=text]{width:700px}
    .calendar span{
         margin-top:15px;
         cursor: pointer;
         color:blue;
    }
    .uheading{font-size:1.2em; font-weight:bold; margin: 10px; text-align: center; }
</style>
<p class="uheading">Личная информация</p>

<p><span></span><input change="no" status='compulsary' class="general" type="text" id="lname" placeholder="Фамилия"/><span></span></p>
<p><span></span><input status='compulsary' class="general" change="no"  type="text" id="name" placeholder="Имя"/><span></span></p>
<p><span></span><input class="general" change="no" type="text" id="fname" placeholder="Отчество"/><span></span></p>

<p><span></span><select change="no" status='compulsary'  class="general"  id="sex" placeholder="Пол"><option value=''>Пол</option><option>мужской</option><option>женский</option></select><span></span></p>
<p><span></span> <input status='compulsary'  type='date' style='width:150px' class='general' id='birthday' placeholder='Дата рождения'><span></span></p>
<p><span></span> <input status='compulsary'   class="general"   type='text' style='width:150px' id='birthplace' placeholder='Место рождения'><span></span></p>
<p><span></span> <input status='compulsary'   class="general"   type='text' style='width:150px' id='citizen' placeholder='Гражданство'><span></span></p>
<p> <span></span><select class="general"  status='compulsary'  id="family" placeholder="Семейное положение" ><option value=''>Семейное положение</option><option>Неженат/незамужем</option><option>Женат/Замужем</option><option>Вдовец/вдова</option><option>Разведен/разведена</option></select><span></span></p>
<p><span></span><input class="general" type="text" id="children" style='width:150px' placeholder="Количество детей"/><span></span></p>
<p>  <span></span><select class="general"  status='compulsary'  id="educlassion" placeholder="Образование"><option value=''>Образование</option><option>Неоконченное среднее</option><option>Среднее</option><option>Средне-специальное</option><option>Неоконченное высшее</option><option>Высшее</option><option>Ученая степень</option></select><span></span></p>
<p><span></span><input class="general" type="text" id="speciality" placeholder="Специальность"/><span></span></p>
<p><span></span><input class="general" type="text" id="work" placeholder="Место работы"/><span></span></p>

<p class="uheading" ><span class="official" >Группa</span></p>

<p><span></span><input class="official" placeholder="id" type="hidden" id="id" /><span></span></p>
<p><span></span><input  class="official" type="text" id="group"  placeholder="Группа"/><span></span></p>
<!--<p><span></span><input  class="official"  type="text" id="diplomadate" placeholder="Дата выдачи диплома"/><span></span></p>
<p><span></span><input  class="official"  type="text" id="deplomanumber" placeholder="Номер диплома"/><span></span></p>-->


<p class="uheading">Контакты</p>
<p><span></span><input change="no" class="general" status='compulsary'  type="tel" id="cphone" placeholder="Сотовый телефон"/><span></span></p>
<p><span></span><input change="no"  class="general"  status='compulsary'  type="email" id="email" placeholder="Электронная почта"/><span></span></p>
<p><span></span><input class="general" type="text" id="republic" placeholder="Республика"/><span></span></p>
<p><span></span><input class="general" type="text" id="index" placeholder="Индекс"/><span></span></p>
<p><span></span><input class="general" type="text" id="oblast" placeholder="Область"/><span></span></p>
<p><span></span><input class="general" type="text" id="city" placeholder="Населенный пункт"/><span></span></p>
<p><span></span><input class="general" type="text" id="district" placeholder="Микрорайон"/><span></span></p>
<p><span></span><input class="general" type="text" id="street" placeholder="Улица"/><span></span></p>
<p><span></span><input class="general" type="text" id="house" placeholder="Дом"/><span></span></p>
<p><span></span><input class="general" type="text" id="corpus" placeholder="Корпус"/><span></span></p>
<p><span></span><input class="general" type="text" id="flat" placeholder="Квартира"/><span></span></p>
<p><span></span><input  class="general" type="tel" id="hphone" placeholder="Домашний телефон"/><span></span></p>


<p class="uheading">Церковь</p>
<p><span></span><input  status='compulsary' class="general" type="text" id="dateofbaptism" style='width:150px'  onfocus="$(this).attr('type','date').click()" onblur="if($(this).val()){showtitle(this)}else{ $(this).attr('type','text'); showtitle(this)}" min="1930-01-01" max="2020-01-01"  placeholder="Дата крещения"/><span></span></p>
<p><span></span><input class="general" type="text" id="ministry" placeholder="Служение"/><span></span></p>
<p><span></span><input class="general" type="text" id="churchtitle" placeholder="Полное название церкви"/><span></span></p>
<p><span></span><input class="general" type="text" id="pastorname" placeholder="ФИО пастора"/><span></span></p>
<p><span></span><input class="general" type="text" id="pastordata" placeholder="Контактные данные пастора(телефон)"/><span></span></p>
<p class="uheading">Образование</p>
<p><span></span><input class="general"   type="text" id="documentofeduction" placeholder="Документ об образовании(полностью)"/><span></span></p>
<p><span></span><input class="general"   type="text" id="documentofeductionseries" placeholder="Серия документа об образовании"/><span></span></p>
<p><span></span><input class="general"   type="text" id="documentofeductionnumber" placeholder="Номер документа об образовании"/><span></span></p>
<p><span></span><input class="general"   type="text" id="documentofeductioninstitution" placeholder="Наименование учебного заведения"/><span></span></p>
<p><span></span><input class="general"   type="text" id="documentofeductionyear" placeholder="Год окончания учебного заведения"/><span></span></p>
<p><span></span><input class="general"   type="text" id="documentofeductionspeciality" placeholder="Полученая специальность"/><span></span></p>




<p class="uheading">Документы</p>
<p><span></span><input class="general" type="text" id="passseries" placeholder="Серия паспорта"/><span></span></p>
<p><span></span><input class="general" type="text" id="passnumber" placeholder="Номер паспорта"/><span></span></p>
<p><span></span><input class="general" type="text" id="passorganization" placeholder="Кем выдан паспорт"/><span></span></p>
<p><span></span><input class="general" type="text" id="passdate" placeholder="Когда выдан паспорт"/><span></span></p>
<p><span></span><input class="general" type="text" id="passcode" placeholder="Код подразделения паспорта"/><span></span></p>
<p><span></span><input class="general" type="text" id="snils" placeholder="СНИЛС (для граждан РФ)"/><span></span></p>

<script>
   
    $('.general').blur(function(e){ showtitle($(e.target))});
    
    $('#email').blur(function(e){           
        var email=$(this).val();
     $.ajax({type:"POST", url:'entrant/checkemail',data:'email='+email, success:function(e){ 
      
     if(e=='found'){ if(confirm('Этот адрес электронной почты уже зарегистрирован! Каждый студент должен иметь свой собственный адрес. Хотите авторизоваться под этим адресом?')){display('user/remindpassresponse','pl=entrant/registeronline&email='+email);}else{ $('#email').val('').focus()}}        
     }});   
    })
  
            //$('#birthday').datepick({ yearRange: '1950:2015', dateFormat:'dd/mm/yyyy', onSelect: function(){showtitle('#birthday')}});
//$('#dateofbaptism').datepick({ yearRange: '1970:2020', dateFormat:'dd/mm/yyyy', onSelect: function(){showtitle('#dateofbaptism')}});

function showtitle(place){
    if($(place).val()){ $(place).prev().html('<br/><br/><b>'+$(place).attr('placeholder')+'</b><img src="{{url('images/checked.jpg')}}"/><br/>');}else{ $(place).prev().html('');}
}
</script>