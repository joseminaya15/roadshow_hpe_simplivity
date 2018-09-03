var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$(".js-header").addClass("navbarcolor");
	} else {
		$(".js-header").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : (y - 40)
 	}, 'slow');
});
function sendInformation(){
	var city        = $('#city').val();
	var name 		= $('#name').val();
	var surname 	= $('#surname').val();
	var email 		= $('#email').val();
	var phone 		= $('#phone').val();
	var company 	= $('#company').val();
	var position 	= $('#position').val();
	var country 	= $('#country').val();
	if(city == null || city == '') {
		msj('error', 'Deebe escoger una ciudad');
		return;
	}
	if(name == null || name == '') {
		msj('error', 'Nombre debe completarse');
		return;
	}
	if(surname == null || surname == '') {
		msj('error', 'Apellido debe completarse');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Email debe completarse');
		return;
	}
	if(!validateEmail(email)){
		msj('error', 'El formato de email es incorrecto');
		return;
	}
	if(phone == null || phone == '') {
		msj('error', 'Teléfono debe completarse');
		return;
	}
	if(company == null || company == '') {
		msj('error', 'Empresa debe completarse');
		return;
	}
	if(position == null || position == '') {
		msj('error', 'Cargo debe completarse');
		return;
	}
	if(country == null || country == '') {
		msj('error', 'País debe completarse');
		return;
	}
	$.ajax({
		data : {City        : city,
				Name	    : name,
				Surname	    : surname,
				Email 	    : email,
				Phone	    : phone,
				Company	    : company,
				Position    : position,
				Country	    : country},
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				$('.js-input').find('select').val('0');
				$('.js-input').find('select').selectpicker('refresh');
				$('#confirmation').addClass('aparecer');
				msj('success', data.msj);
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function verificarDatos(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}
function goToCity(){
	var city        = $('#city').val();
	var information = $('.js-information'); 
	if(city == 'Bogotá'){
		information.find('h2').text('Miércoles 3 de Octubre, 2018');
		information.find('h3').text('Hora: 9:00 am a 5:00 pm');
		information.find('p').text('Oficina HPE');
		console.log("entra");
	}else if(city == 'Buenos Aires'){
		information.find('h2').text('Miércoles 3 de Octubre, 2018');
		information.find('h3').text('Hora: 8:00 am a 6:00 pm');
		information.find('p').text('Oficina HPE');
		console.log("entra");
	}else if(city == 'Ciudad de México'){
		information.find('h2').text('Miércoles 24 de Octubre, 2018');
		information.find('h3').text('Hora: 9:30 am a 6:30 pm');
		information.find('p').text('Oficina HPE Santa Fe');
	}else if(city == 'Santiago'){
		information.find('h2').text('Miércoles 3 de Octubre, 2018');
		information.find('h3').text('Hora: 8:30 am a 5:30 pm');
		information.find('p').text('Oficina HPE Chile – Piso 12 – Sala Maule');
	}else{
		information.find('h2').text('Miércoles 3 de Octubre, 2018');
		information.find('h3').text('Hora: 9:30 am a 7:00 pm');
		information.find('p').text('Oficina HPE Sala Paulista');
	}
}
