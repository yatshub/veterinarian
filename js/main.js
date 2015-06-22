
///////////////////////////////////////////////////////////////////////////////////////// 
//	                                                                                   //
//	function togGles (переключатель)                                                    //
//	                                                                                   //
//	Функция принимает три параметра:                                                   //
//	1-й параметр принимает id кнопки;                                                  //
//	2-й параметр принимает id элемента;                                                //
//	3-й параметр принимает заголовок блока;                                            //
//	                                                                                   //
//	Функция(переключатель) при щелчке пользователем на кнопку совершает изчезновение   //
//	элемента по направлению от верха к низу, в обратном случае от низу к верху;        // 
//                                                                                     //
/////////////////////////////////////////////////////////////////////////////////////////

function togGles (idBotton, idBlock, inTitle){

	var play = '#' + idBotton;
	var text = '#' + idBlock;
	var plus =  '<strong style="color: black">+</strong> ' + inTitle;
	var minus = '<strong style="color: black">-</strong> ' + inTitle;
	
	$(play).toggle(function(){

      $(play).html(plus);
      $(text).slideUp(2000);
    },function(){
	
	 $(play).html(minus);
      $(text).slideDown(2000);
    });
}// End togGles();

///////////////////////////////////////////////////////////////////////////////////////// 
//	                                                                                   //
//	function processingInput                                                            //
//	                                                                                   //
//	Функция принимает два параметра:                                                   //
//	1-й параметр принимает id элемента;                                                //   
//	2-й параметр принимает шаблон регулярного выражения;                               //
//	                                                                                   //
//	Функция в момент фокуса сравнивает значение элемента и если значение совпадает со  //
//  значением по умолчанию, в этом случае очистить поле для ввода.                     //
//	В момент потери фокуса, если пользователь ввел какие-то данные проверяет их        // 
//	на правильность ввода с помощью регурярных выражений.                              //  
//                                                                                     //
/////////////////////////////////////////////////////////////////////////////////////////

function processingInput(nameID, regV){
	var nameInput = '#' + nameID;
	var query = $(nameInput);
	query.focus(function(){
	if($(this).val() == $(this).attr('defaultValue')){
		$(this).val('');
	}
	});
	query.blur(function(){
        var userV = $(this).val();
        if(userV == ""){
            $(this).val($(this).attr('defaultValue'));
        }
        else if(userV.search(regV) == -1){
            $(this).css('border','2px solid #cc0000');
        }
        else{
            $(this).css('border','1px solid #444');
        }
    });
	
}// End processingInput();

///////////////////////////////////////////////////////////////////////////////////////// 
//	                                                                                   //
//	function processingForms                                                            //
//	                                                                                   //
//	Функция принимает три параметра:                                                   //
//	1-й параметр принимает шаблон регурярного выражения для текстовых полей;           //
//	2-й параметр принимает шаблон регурярного выражения для поля "Телефон";            //
//	3-й параметр принимает шаблон регурярного выражения для поля "E-mail";             //
//	                                                                                   //
//	Функция по нажатии пользователем на кнопку Submit проверяет были ли                // 
//	заполнены обязательные поля формы. Если пользователь не корректно введет данные    //
//	в форму, функция сообщит ему ошибку и попросит исправить.                          // 
//                                                                                     //
/////////////////////////////////////////////////////////////////////////////////////////

function processingForms(Text, Phone, Email){

	$('#isForm').submit(function(){
		var nameV = $('#name').val();
		var phoneV = $('#phone').val();
		var mailV = $('#mail').val();
		var rdV = $('#rd').val();
		var subjectV = $('#subject').val();
	
		/* Проверяет поле "Имя" */
		if(nameV == $('#name').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста Имя!');
			return false;
		}else if(nameV.search(Text) ==  -1){
			alert('Внимание! В поле "Имя" допущена ошибка!');
			return false;
		}
		
		/* Проверяет поле "Телефон" */
		if(phoneV == $('#phone').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста номер Телефона!');
			return false;
		} else if(phoneV.search(Phone) ==  -1){
			alert('Внимание! В поле "Телефон" допущена ошибка!');
			return false;
		}
		
		/* Проверяет поле "E-mail" */
		if(mailV == $('#mail').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста электронный адрес!');
			return false;
		} else if(mailV.search(Email) ==  -1){
			alert('Внимание! В поле "E-mail" допущена ошибка!');
			return false;
		}
		
		/* Проверяет поле "Способ оплаты" */
		if($('#pay :selected').val() == 'Не выбрано'){
			alert('Внимание! Выберите, пожалуйста Способ оплаты!');
			return false;
		}
		
		/* Проверяет поле "Тип работы" */
		if($('#typework :selected').val() == 'Не выбрано'){
			alert('Внимание! Выберите, пожалуйста Тип работы!');
			return false;
		}
		
		/* Проверяет поле "Тема работы" */
		if(rdV == $('#rd').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста свою Тему работы!');
			return false;
		} else if(rdV.search(Text) ==  -1){
			alert('Внимание! В поле "Тема работы" допущена ошибка!');
			return false;
		}
		
		/* Проверяет поле "Предмет" */
		if(subjectV == $('#subject').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста Предмет!');
			return false;
		}else if(subjectV.search(Text) ==  -1){
			alert('Внимание! В поле "Предмет" допущена ошибка!');
			return false;
		}
	});
	
}// End processingForms();


function userInput()
{
	$('#isLogin').submit(function(){
	
		var login = $('#login').val();
		var password = $('#password').val();
		
		/* Checks the "Login" */
		if(login == $('#login').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста Логин!');
			return false;
		}
		
		/* Checks the "Password" */
		if(password == $('#password').attr('defaultValue')){
			alert('Внимание! Введите, пожалуйста Пароль!');
			return false;
		}
	});
}// End userInput();

/* Ready method waits until the page is fully loaded */
$(document).ready(function(){

	/* regular Expressions */
	var regText = /([А-Яа-яA-Za-z-]\D+)/; // Pattern for checking the correctness of the text fields.
	var regPhone = /^((8|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/; // Pattern for checking the correctness of the phone number.
	var regEmail = /[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}/; // Pattern for checking the correctness of the E-mail.
	
	/* Массив который содержит параметры для функции togGles(переключатель) */
	var massBotton = ["play", 
					  "play-2",
					  "play-3"];
	var massBlock = ["block-play", 
					 "block-play-2",
					 "block-play-3"];
	var massTitle = ["Условие работы", 
					"Прайс - лист",
					"Способ оплаты"];
	var masstogGles = [massBotton, massBlock, massTitle];
	
	/* Выполняется функция для блока "Условие работы" */
	togGles(masstogGles[0][0], masstogGles[1][0], masstogGles[2][0]);
	togGles(masstogGles[0][1], masstogGles[1][1], masstogGles[2][1]);
	togGles(masstogGles[0][2], masstogGles[1][2], masstogGles[2][2]);
	
	/* Выполняется функция для блока "Способ оплаты" */
	togGles(masstogGles[0][3], masstogGles[1][3], masstogGles[2][3]);
	togGles(masstogGles[0][4], masstogGles[1][4], masstogGles[2][4]);
	togGles(masstogGles[0][5], masstogGles[1][5], masstogGles[2][5]);
	
	/* Проверка поля Input */
	/*processingInput('phone', regPhone);
	processingInput('email', regEmail);
	processingInput('firstname',regText);
        
        processingInput('phone_school', regPhone);
	processingInput('email_school', regEmail);
	processingInput('firstname_school',regText);
	*/
	
	/* */
	//userInput();
	
	
	/* Проверка формы */
	//processingForms(regText, regPhone, regEmail);
	
	/*
	$('#header .menu li').hover(
		function () {
			$('ul', this).slideDown(400);
		}, 
		function () {
			$('ul', this).slideUp(400);			
		}
	*/
       
       
        $('#form-modal').validate({
        rules:{
           firstname_3:{
                required: true,
                minlength: 3
            },
            
            email_3:{
                required: true,
                minlength: 6
            },
            phone_3:{
                
                required: true,
                minlength: 10
            }
        },
        messages:{
                        firstname_3:{
				required: "поле обязательно для заполнения",
				minlength: "минимум 3 символа"
			},
                        email_3:{
				required: "поле обязательно для заполнения",
				minlength: "минимум 6 символа"
			},
			phone_3:{
				required: "поле обязательно для заполнения",
				minlength: "минимум 10 символа"
			}
        }
      }); 
      
      
    $('.submit-link a').on('click',function () {
    elementClick = $(this).attr("href");
    $.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());
    // вычитаем высоту «шапки»
    destination = $(elementClick).offset().top;
 
    if($.browser.safari || $.browser.chrome){
        $('body').animate( { scrollTop: destination }, 1100 );
    }else{
        $('html').animate( { scrollTop: destination }, 1100 );
    }
    return false;
});
      
    
      
	
	
});// End Ready();
