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
	$('#js-contenido--ciudad').css('display','block'); 
	if(city == 'Bogotá'){
		information.find('h2').text('Miércoles 3 de Octubre, 2018');
		information.find('h3').text('8:00 am a 12:30 pm');
		information.find('p').text('Hotel Bogota plaza');
		information.find('span').text('Calle 100 #18A -30, Bogotá');
		$('#country').val('Colombia');	
	}else if(city == 'Buenos Aires'){
		information.find('h2').text('Miércoles 3 de Octubre, 2018');
		information.find('h3').text('TBC');
		information.find('p').text('TBC');
		information.find('span').text('TBC');
		$('#country').val('Argentina');
	}else if(city == 'Ciudad de México'){
		information.find('h2').text('Miércoles 24 de Octubre, 2018');
		information.find('h3').text('8:30 am a 13:00 pm');
		information.find('p').text('HPE Santa Fe – Sala Instituto I');
		information.find('span').text('Prol. Reforma 700 Lomas de Santa Fe');
		$('#country').val('México');
	}else if(city == 'Santiago'){
		information.find('h2').text('Miércoles 9 de Octubre, 2018');
		information.find('h3').text('9:00 am a 12:00 pm');
		information.find('p').text('HPE Chile – Piso 12 – Sala Maule');
		information.find('span').text('310 Mariano Sanchez Fontecilla, Las Condes');
		$('#country').val('Chile');
	}else{
		information.find('h2').text('Quinta-feira 4 de outubro, 2018');
		information.find('h3').text('9:00 am a 12:00 pm');
		information.find('p').text('HPE São Paulo Office : EZ Towers');
		information.find('span').text('Avenida Cecilia Lottenberg, 105, Torre A, 20º andar - Chácara Santo Antônio (Zona Sul), São Paulo - SP, 04711-904');
		$('#country').val('Brasil');
	}

	if(city == 'Sao Paulo'){
		$('#contenido1').text('HPE SimpliVity: Treinamento técnico para Parceiros de Negócios');
		$('#contenido2').text('Workshop oferecido pela HPE com o patrocínio da Intel®');
		$('#register1').text('Registre-se preenchendo o seguinte formulário');
		$('#name').siblings('label').text('Nome*');
		$('#surname').siblings('label').text('Sobrenome*');
		$('#email').siblings('label').text('E-mail*');
		$('#phone').siblings('label').text('Telefone*');
		$('#company').siblings('label').text('Nome do canal*');
		$('#position').siblings('label').text('Cargo*');
		$('#confirmation').find('h2').text('Registro feito corretamente. Nós esperamos por você')
	}else{
		$('#contenido1').text('HPE Simplivity: Entrenamiento Técnico para Partners');
		$('#contenido2').text('Taller ofrecido por HPE con el patrocinio de Intel®');
		$('#register1').text('Regístrese completando el siguiente formulario');
		$('#name').siblings('label').text('Nombre*');
		$('#surname').siblings('label').text('Apellido*');
		$('#email').siblings('label').text('Email*');
		$('#phone').siblings('label').text('Teléfono*');
		$('#company').siblings('label').text('Nombre del canal*');
		$('#position').siblings('label').text('Cargo*');
		$('#confirmation').find('h2').text('Registro realizado correctamente. Lo esperamos')
	}
}
