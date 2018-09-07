<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Simplivity - Intel">
    <meta name="keywords"               content="HPE Simplivity - Intel">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="August 01, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>HPE Simplivity - Intel</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hpe-intel.png">
            </div>
            <div class="js-header--right">
                <p>Si tiene Intel&reg;, tiene una productividad poderosa</p>
            </div>
        </div>
    </div>
    <section id="home">
        <div class="js-fondo"></div>
        <div class="js-container">
            <div class="js-home js-flex">
                <div class="js-contenido">
                    <h2>HPE Simplivity: Entrenamiento T&eacute;cnico para Partners</h2>
                    <p>Taller ofrecido por HPE con el patrocinio de Intel&reg;</p>
                </div>
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="js-input js-select">
                        <select name="city" id="city" title="Seleccione aquí su ciudad*" onchange="goToCity()"> 
                            <option value="Bogotá">Bogotá</option>
                            <option value="Buenos Aires">Buenos Aires</option>
                            <option value="Ciudad de México">Ciudad de México</option>
                            <option value="Santiago">Santiago</option>
                            <option value="Sao Paulo">Sao Paulo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="js-contenido--ciudad">
                <div class="js-information">
                    <h2>Mi&eacute;rcoles 3 de Octubre, 2018</h2>
                    <h3>9:00 am a 5:00 pm</h3>
                    <p>Oficina HPE</p>
                    <span>Direcci&oacute;n</span>
                </div>
                <div class="js-title">
                    <h2>Reg&iacute;strese completando el siguiente formulario</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="js-input">
                            <label for="text">Nombre*</label>
                            <input type="text" id="name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="js-input">
                            <label for="text">Apellido*</label>
                            <input type="text" id="surname">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" js-input">
                            <label for="text">Email*</label>
                            <input type="text" id="email" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" js-input">
                            <label for="text">Teléfono*</label>
                            <input type="text" id="phone">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                         <div class=" js-input">
                            <label for="text">Nombre de Canal*</label>
                            <input type="text" id="company" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" js-input">
                            <label for="text">Cargo*</label>
                            <input type="text" id="position">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" js-input">
                            <label for="text">País*</label>
                            <input type="text" id="country" disabled>
                        </div>
                    </div>
                </div>
                <div class="js-section--button text-left">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendInformation()">Enviar</button>
                </div>
                <div id="confirmation" class="js-confirmation">
                    <h2>Registro realizado correctamente. Lo esperamos</h2>
                </div>
            </div>
        </div>
    </section>
    <footer class="js-section">
        <div class="js-container text-center">
            <p class="content">Intel y el logotipo de Intel son marcas comerciales de la Corporación Intel o sus filiales en los Estados Unidos o en otros países</p>
            <p>&copy;2018 Copyright Hewlett Packard Enterprise Development LP</p>
        </div>
    </footer>
    <!--MODAL-->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="mdl-card">
                    <div class="mdl-card__title">
                        <p>Completar la siguiente informaci&oacute;n</p>
                    </div>
                    <div class="mdl-card__supporting-text p-t-0">
                        <div class="col-xs-12 p-0">
                            <div class="js-input js-date js-flex">
                                <input class="js-disabled" type="text" id="llegada" name="llegada" maxlength="10" placeholder="Fecha de Llegada" value="" style="pointer-events: none">
                                <div class="js-icon">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-date_range"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 p-0">
                            <div class="js-input js-date js-flex">
                                <input class="js-disabled" type="text" id="retorno" name="retorno" maxlength="10" placeholder="Fecha de Retorno" value="" style="pointer-events: none">
                                <div class="js-icon">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-date_range"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 p-0">
                            <div class=" js-input">
                                <label for="text">#Reserva de Hotel</label>
                                <input type="text" id="reserva" >
                            </div>
                        </div>
                        <div class="col-xs-12 p-0">
                            <div class="js-input js-radio">
                                <label>¿Participar&aacute; en la visita al Shopping Mall del d&iacute;a Miercoles (6 pm)&#63;</label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="invitado">
                                    <input type="radio" id="invitado" class="mdl-radio__button" name="options" value="1" checked>
                                    <span class="mdl-radio__label">Si</span>
                                </label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="noinvitado">
                                    <input type="radio" id="noinvitado" class="mdl-radio__button" name="options" value="0">
                                    <span class="mdl-radio__label">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card__actions text-right">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Cerrar</button>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="sendReserva()">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        var URLactual = window.location;
        if(URLactual['href'] != 'http://www.marketinghpe.com/microsite/Simplivity_Workshop/'){
            location.href = 'http://www.marketinghpe.com/microsite/Simplivity_Workshop/';
        }
    </script>
</body>
</html>