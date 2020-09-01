export default {
    init() {

        var coordinador = {};
        var integrantes = [];
        var indexIntegranteEditar = -1;

        $('.open-modal-registrar').click(function () {
            coordinador = {};
            integrantes = [];
            indexIntegranteEditar = -1
            limpiarRegistro();
            $('#btn-ingresar-coordinador').html($('#btn-ingresar-coordinador').html().replace('EDITAR', 'INGRESAR'));
            $('#campo-coordinador').hide();
            $('#campo-integrantes').hide();
            $('#txt-nombre-grupo').val('');
            $('#campo-coordinador').html('');
            $('#lista-integrantes').html('');
            verPrincipal()
            $('#modal-registro-purdy-mobility-chanllenge').modal();
        });

        $('#btn-ingresar-coordinador').click(function (e) {
            e.preventDefault();
            $('.coodinador').show();
            $('.integrante').hide();
            if ($('#btn-ingresar-coordinador').html().indexOf('EDITAR') != -1) {
                cargarRespuestas(coordinador);
            }
            verRegistro();
        });

        $('#btn-ingresar-integrante').click(function (e) {
            e.preventDefault();
            $('.coodinador').hide();
            $('.integrante').show();
            verRegistro();
        });

        $('.btn-cancelar-formulario-registro').click(function (e) {
            e.preventDefault();
            limpiarRegistro();
            verPrincipal();
        });

        $('.btn-cancelar-formulario-aviso').click(function (e) {
            e.preventDefault();
            verPrincipal();
        });

        $('#btn-guardar-coordinador').click(function () {
            if (!verificarRegistro()) {
                return;
            }
            $('#campo-coordinador').html($('#txt-nombre-completo').val());
            $('#btn-ingresar-coordinador').html($('#btn-ingresar-coordinador').html().replace('INGRESAR', 'EDITAR'));
            $('#campo-coordinador').show();
            coordinador = guardarRespuestas();
            verPrincipal();
        });

        $('#btn-guardar-integrante').click(function () {
            if (!verificarRegistro()) {
                return;
            }
            $('#campo-integrantes').show();
            if (indexIntegranteEditar < 0) {
                var numIntegrantes = parseInt($('#numero-integrantes').text()) + 1;
                $('#numero-integrantes').text(numIntegrantes);
                integrantes.push(guardarRespuestas());
            } else {
                integrantes[indexIntegranteEditar] = guardarRespuestas();
                indexIntegranteEditar = -1;
            }
            $('#lista-integrantes').html('');
            for (let i = 0; i < integrantes.length; i++) {
                $('#lista-integrantes').append('<option>' + integrantes[i]['nombre-completo'] + '</option>');
            }
            verPrincipal();
        });

        $('#btn-guardar-integrante-ingresar').click(function () {
            if (!verificarRegistro()) {
                return;
            }
            $('#campo-integrantes').show();
            if (indexIntegranteEditar < 0) {
                var numIntegrantes = parseInt($('#numero-integrantes').text()) + 1;
                $('#numero-integrantes').text(numIntegrantes);
                integrantes.push(guardarRespuestas());
            } else {
                integrantes[indexIntegranteEditar] = guardarRespuestas();
                indexIntegranteEditar = -1;
            }
            $('#lista-integrantes').html('');
            for (let i = 0; i < integrantes.length; i++) {
                $('#lista-integrantes').append('<option>' + integrantes[i]['nombre-completo'] + '</option>');
            }
        });

        $('#btn-editar-integrante').click(function (e) {
            e.preventDefault();
            if ($('#lista-integrantes option:selected').index() < 0) {
                $('#alert-integrantes').show();
                return;
            }
            $('#alert-integrantes').hide();
            indexIntegranteEditar = $('#lista-integrantes option:selected').index();
            cargarRespuestas(integrantes[indexIntegranteEditar]);
            $('.coodinador').hide();
            $('.integrante').show();
            verRegistro();
        });

        $('#chk-terminos-condiciones').change(function () {
            comprobrarRequisitosRegistro();
        });

        $('.btn-cancelar-principal').click(function () {
            verAviso('#cancelar-formulario');
        });

        $('.btn-aprobar-cerrar-modal').click(function () {
            verAviso('#aprobar-cancelar-formulario');
        });

        $('.btn-registrar').click(function () {
            $('.from-submit').click();
        });

        $('.btn-registrar-equipo').click(function () {
            $('.form-grupo').val($('#txt-nombre-grupo').val());
            $('.form-coordinador').val(respuestasAString(coordinador));
            var strIntegrantes = 'Total de integrantes: ' + integrantes.length + '\n\n';
            for (let index = 0; index < integrantes.length; index++) {
                const integrante = integrantes[index];
                strIntegrantes += 'Integrante #' + (index + 1) + '\n';
                strIntegrantes += respuestasAString(integrante) + '\n\n';
            }
            $('.form-integrantes').val(strIntegrantes);
            verAviso('#confirmar-formulario');
        });

        document.addEventListener('wpcf7mailsent', function () {
            verAviso('#aprobar-confirmar-formulario');
        }, false);

        $('.btn-cerrar-modal').click(function (e) {
            e.preventDefault();
            coordinador = {};
            integrantes = [];
            indexIntegranteEditar = -1;
            $('#modal-registro-purdy-mobility-chanllenge').modal('hide');
            window.location.reload();
        });

        function verificarRegistro() {
            $('#alert-registro').show();
            if ($('#txt-nombre-completo').val().trim() == '') {
                $('#txt-nombre-completo').select();
                $('#txt-nombre-completo').focus();
                return false;
            }

            else if ($('#txt-numero-cedula').val().trim() == '') {
                $('#txt-numero-cedula').select();
                $('#txt-numero-cedula').focus();
                return false;
            }
            else if ($('#txt-edad').val().trim() == '') {
                $('#txt-edad').select();
                $('#txt-edad').focus();
                return false;
            }
            else if ($('#txt-correo-electronico').val().trim() == '') {
                $('#txt-correo-electronico').select();
                $('#txt-correo-electronico').focus();
                return false;
            }
            else if ($('#txt-telefono').val().trim() == '') {
                $('#txt-telefono').select();
                $('#txt-telefono').focus();
                return false;
            }
            else if ($('#txt-lugar-trabajo-estudio').val().trim() == '') {
                $('#txt-lugar-trabajo-estudio').select();
                $('#txt-lugar-trabajo-estudio').focus();
                return false;
            }
            else if ($('#txt-nombre-completo').val().trim() == '') {
                $('#txt-nombre-completo').select();
                $('#txt-nombre-completo').focus();
                return false;
            }
            else if ($('#txt-especialidad').val().trim() == '') {
                $('#txt-especialidad').select();
                $('#txt-especialidad').focus();
                return false;
            }
            $('#alert-registro').hide();
            return true;
        }

        $('input[type=number]').keypress(function (e) {
            if (e.key == 'e' || e.key == 'E' || e.key == '-' || e.key == '+' || e.key == ',' || e.key == '.') {
                e.preventDefault();
            }
        });

        function guardarRespuestas() {
            var respuestas = {
                'nombre-completo': $('#txt-nombre-completo').val(),
                'numero-cedula': $('#txt-numero-cedula').val(),
                'edad': $('#txt-edad').val(),
                'correo-electronico': $('#txt-correo-electronico').val(),
                'telefono': $('#txt-telefono').val(),
                'lugar-trabajo-estudio': $('#txt-lugar-trabajo-estudio').val(),
                'especialidad': $('#txt-especialidad').val(),
                'perfil-1': $('#txt-perfil-1').val(),
                'perfil-2': $('#txt-perfil-2').val(),
                'perfil-3': $('#txt-perfil-3').val(),
            }
            limpiarRegistro();
            return respuestas;
        }

        function cargarRespuestas(respuestas) {
            $('#txt-nombre-completo').val(respuestas['nombre-completo']);
            $('#txt-numero-cedula').val(respuestas['numero-cedula']);
            $('#txt-edad').val(respuestas['edad']);
            $('#txt-correo-electronico').val(respuestas['correo-electronico']);
            $('#txt-telefono').val(respuestas['telefono']);
            $('#txt-lugar-trabajo-estudio').val(respuestas['lugar-trabajo-estudio']);
            $('#txt-especialidad').val(respuestas['especialidad']);
            $('#txt-perfil-1').val(respuestas['perfil-1']);
            $('#txt-perfil-2').val(respuestas['perfil-2']);
            $('#txt-perfil-3').val(respuestas['perfil-3']);
        }

        function limpiarRegistro() {
            $('#txt-nombre-completo').val('');
            $('#txt-numero-cedula').val('');
            $('#txt-edad').val('');
            $('#txt-correo-electronico').val('');
            $('#txt-telefono').val('');
            $('#txt-lugar-trabajo-estudio').val('');
            $('#txt-especialidad').val('');
            $('#txt-perfil-1').val('');
            $('#txt-perfil-2').val('');
            $('#txt-perfil-3').val('');
        }

        function verPrincipal() {
            if (!('.modal-xl').length <= 0) {
                $('.modal-dialog').addClass('modal-xl');
            }
            comprobrarRequisitosRegistro();
            $('#alert-integrantes').hide();
            $('#formulario-aviso').hide();
            $('#formulario-registro').hide();
            $('#formulario-principal').fadeIn();
        }

        function verRegistro() {
            $('#alert-registro').hide();
            $('#formulario-aviso').hide();
            $('#formulario-principal').hide();
            $('#formulario-registro').fadeIn();
        }

        function verAviso(elemento) {
            $('.div-aviso').hide();
            $(elemento).show();
            $('#formulario-principal').hide();
            $('#formulario-registro').hide();
            $('.modal-xl').removeClass('modal-xl');
            $('#formulario-aviso').fadeIn();
        }

        function comprobrarRequisitosRegistro() {
            if (!$.isEmptyObject(coordinador) && integrantes.length > 0 && $('#chk-terminos-condiciones:checked').length > 0) {
                $('.btn-registrar-equipo').addClass('btn-danger');
                $('.btn-registrar-equipo').removeClass('btn-dark');
                $('.btn-registrar-equipo').prop('disabled', false);
            } else {
                $('.btn-registrar-equipo').addClass('btn-dark');
                $('.btn-registrar-equipo').removeClass('btn-danger');
                $('.btn-registrar-equipo').prop('disabled', true);
            }
        }

        function respuestasAString(respuestas) {
            var strRespuestas = 'Nombre Completo: ' + respuestas['nombre-completo'] + '\n' +
                'Cedula: ' + respuestas['numero-cedula'] + '\n' +
                'Correo electronico: ' + respuestas['correo-electronico'] + '\n' +
                'Telefono: ' + respuestas['telefono'] + '\n' +
                'Lugar de trabajo o estudio: ' + respuestas['lugar-trabajo-estudio'] + '\n' +
                'especialidad: ' + respuestas['especialidad'] + '\n' +
                'Perfil general e Importancia de su papel en el grupo: ' + respuestas['perfil-1'] + '\n' +
                'Experiencia en proyectos de investigación, desarrollo de producto, concursos, etc: ' + respuestas['perfil-2'] + '\n' +
                'Desde perspectiva personal, ¿por qué es importante resolver el problema planteado?: ' + respuestas['perfil-3'];
            return strRespuestas;
        }

    },
};
