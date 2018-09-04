<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="HPE Simplivity - Intel">
        <meta name="keywords"               content="HPE Simplivity - Intel">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="January 25, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
        <title>HPE Simplivity - Intel</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>admin.css?v=<?php echo time();?>">
        <style type="text/css">
            .js-container--admin{
                max-width: 1350px
            }
        </style>
    </head>
    <body>
        <div class="js-header js-fixed">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hpe-intel.png">
            </div>
            <div class="js-header--right">
                <p>HPE Simplivity - Intel</p>
            </div>
        </div>
        <section id="principal" class="js-section js-section--admin">
            <div id="content" class="js-container js-container--admin">
                <div class="col-xs-12 text-right p-0">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-logout" onclick="cerrarCesion()">Cerrar Sesión</button> 
                </div>
                <div class="mdl-card">
                    <div class="js-select m-t-15 m-b-15">
                        <select name="cityAdmin" id="cityAdmin" title="Seleccione una ciudad*" onchange="goToCityAdmin()"> 
                            <option value="Bogotá">Bogotá</option>
                            <option value="Buenos Aires">Buenos Aires</option>
                            <option value="Ciudad de México">Ciudad de México</option>
                            <option value="Santiago">Santiago</option>
                            <option value="Sao Paulo">Sao Paulo</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr class="tr-header-reporte">
                                    <th class="text-left">Nombre</th>
                                    <th class="text-left">Email</th>
                                    <th class="text-right">Tel&eacute;fono</th>
                                    <th class="text-left">Canal</th>
                                    <th class="text-left" style="display: none;">Ciudad</th>
                                    <th class="text-left">Cargo</th>
                                    <th class="text-left">País</th>
                                </tr>
                            </thead>
                          <tbody id="tablecity">
                              <?php echo $html ?>  
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
        <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable( {
                    searching : false,
                    responsive: true,
                    dom: 'Bfrtip',
                    aLengthMenu : [100],
                    destroy : true,
                    buttons: [
                        {
                            extend:'excel',
                            text: 'Exportar a Excel'
                        },
                        {
                            extend:'print',
                            text: 'Imprimir'
                        }
                    ],
                    language : {
                        info : "Mostrando _TOTAL_ registros",
                    }
                });
            });
        </script>
    </body>
</html>