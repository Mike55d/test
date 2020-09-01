{{--
Template Name: purdy-mobility
--}}
@extends('layouts.app')
@section('content')
<div class="page-mobility">
  <section id="top" class="section">
    <div class="hero d-none d-md-flex" style="background-image:url('{{ $cf["hero"]["imagen"] }}')">
      <a href="/"><i class="icn icn-1 icn-chevron"></i>Volver a <b>Grupo Purdy</b></a>
      <h1>{{ App::title() }}</h1>
      {!! $cf["hero"]["descripcion"] !!}
      <img src="/wp-content/themes/theme_purdy/img/wave.png" class="img-wave">
    </div>
    <div class="hero d-md-none" style="background-image:url('{{ $cf["hero"]["imagen_mobile"] }}')">
      <a href="/"><i class="icn icn-1 icn-chevron"></i>Volver a <b>Grupo Purdy</b></a>
      <h1>{{ App::title() }}</h1>
      {!! $cf["hero"]["descripcion"] !!}
      <img src="/wp-content/themes/theme_purdy/img/wave.png" class="img-wave">
    </div>
  </section>

  <section id="registrar_equipo" class="container">
    <h1 class="titulo">{{ $cf["registrar_equipo"]["titulo"] }}</h1>
    <div class="descripcion">
      {!! $cf["registrar_equipo"]["descripcion"] !!}
      <button class="btn btn-danger open-modal-registrar">{{ $cf["registrar_equipo"]["texto_boton"] }}</button>
    </div>
  </section>

  <section id="forma_de_desarrollar" class="container">
    <h1 class="titulo">{{ $cf["forma_de_desarrollar"]["titulo"] }}</h1>
    <div class="descripcion mb-5">{!! $cf["forma_de_desarrollar"]["descripcion"] !!}</div>
  </section>

  <div id="pasos">
    @if ($cf["forma_de_desarrollar"]["items"])
    @foreach ($cf["forma_de_desarrollar"]["items"] as $item)
    <table class="table-pasos">
      <tr>
        <td><img src="{{ $item['imagen'] }}" alt="Imagen {{ $item['titulo'] }}"></td>
        <td>
          <h5>{{ $item['titulo'] }}</h5>
          <div>{!! $item['descripcion'] !!}</div>
        </td>
      </tr>
    </table>
    @endforeach
    @endif
  </div>

  <section id="acerca_del_concurso">
    <h1 class="titulo">{{ $cf["acerca_del_concurso"]["titulo"]}}</h1>
    <div class="container">
      <img src="{{ $cf["acerca_del_concurso"]['imagen'] }}" alt="Imagen - {{ $cf["acerca_del_concurso"]['titulo'] }}"
        class="my-4">
      <h4>{{ $cf["acerca_del_concurso"]["sub_titulo"]  }}</h4>
      <div class="row">
        <div class="col-sm-12 col-md-6">@if ($cf["acerca_del_concurso"]["fechas"])
          <div id="box-fechas">
            <table>
              @foreach ($cf["acerca_del_concurso"]["fechas"] as $fecha)
              <tr>
                <td>
                  <div>&nbsp;</div>
                </td>
                <td class="pb-4">
                  <h5 class="pb-2">{{ $fecha['titulo'] }}</h5>
                  {{ $fecha['fecha'] }}
                </td>
              </tr>
              @endforeach
            </table>
          </div>
          @endif
        </div>
        @if ( $cf["acerca_del_concurso"]["imagen_fechas"] )
        <div class="col-md-6 img-calendario">
          <img src="{{ $cf["acerca_del_concurso"]["imagen_fechas"] }}" alt="Imagen fechas">
        </div>
        @endif
      </div>

      <img src="{{ $cf["premios"]['imagen'] }}" alt="Imagen - {{ $cf["premios"]['sub_titulo'] }}"
        class="my-4 img-fluid">
      <h4>{{ $cf["premios"]["sub_titulo"] }}</h4>
      <div class="slider-multi">
        @foreach($cf["premios"]["items"] as $item)
        <div class="slider-item text-center">
          <div class="card card-social mb-2">
            <div class="card-thumbnail mb-4">
              <img src="{{ $item['imagen'] }}" alt="PREMIO - {{ $item['titulo'] }}">
            </div>
            <h4>{{ $item['titulo'] }}</h4>
            <div>{!! $item["descripcion"] !!}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section id="formar_parte" class="container">
    <h1 class="titulo">{{ $cf["formar_parte"]["titulo"] }}</h1>
    <div class="descripcion">
      {!! $cf["formar_parte"]["descripcion"] !!}
      <button class="btn btn-danger open-modal-registrar">{{ $cf["formar_parte"]["texto_boton"] }}</button>
    </div>
  </section>

  <section id="preguntas_fecuentes" class="container">
    <h1 class="titulo">{{ $cf["preguntas_fecuentes"]["titulo"]}}</h1>
    <div class="accordion" id="accordion-preguntas-mobility">
      @if ($cf["preguntas_fecuentes"]["preguntas"])
      @foreach ($cf["preguntas_fecuentes"]["preguntas"] as $pregunta)
      <div class="card">
        <div class="card-header" id="heading{{ $loop->index }}">
          <button class="button button-collapse collapsed" type="button" data-toggle="collapse"
            data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
            <i class="icn icn-1 icn-plus"></i> {{ $pregunta['pregunta'] }}
          </button>
        </div>
        <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}"
          data-parent="#accordion-preguntas-mobility">
          <div class="card-body">
            {!! $pregunta['respuesta'] !!}
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </section>

  <section id="documentos" class="container">
    <h3 class="mb-4">{{ $cf["documentos"]["titulo"]}}</h3>
    @if ($cf["documentos"]["archivos"])
    @foreach ($cf["documentos"]["archivos"] as $item)
    <div class="mb-3"><img src="{{ $cf["documentos"]["imagen"] }}" alt="{{ $item['titulo'] }}">
      <a href="{{ $item['archivo'] }}" target="_blank">{{ $item['titulo'] }}</a></div>
    @endforeach
    @endif
  </section>

  <div class="modal fade" id="modal-registro-purdy-mobility-chanllenge" tabindex="-1" role="dialog"
    data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content p-4">
        {{-- Registro principal --}}
        <div id="formulario-principal">
          <a href="#" class="btn-cancelar-principal"><i class="icn icn-1 icn-chevron volver"></i>Cancelar <b>Inscripción</b></a>
          <div class="row mt-3">
            <div class="col-sm-12 col-md-8">
              <h2>FORMULARIO DE INSCRIPCIÓN</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-8">
              Aquí podés encontrar el formulario de inscripcion para tu equipo.
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6">

              <div class="form-input" id="fi-nombre-grupo">
                <label>
                  <input type="text" id="txt-nombre-grupo" required>
                  <span class="placeholder">Nombre del grupo (opcional)</span>
                </label>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-sm-12 col-md-6">
              <h4>1. COORDINADOR DE GRUPO</h4>
              <p>Primero ingresá la información del coordinador del equipo.</p>
              <div><a href="#" class="button button-chevron" id="btn-ingresar-coordinador">INGRESAR COORDINADOR <span><i
                class="icn icn-1 icn-chevron"></i></span></a></div>
              <div id="campo-coordinador"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <h4>2. INTEGRANTES DEL GRUPO</h4>
              <p>Ahora ingresá la información del resto de participantes del equipo.</p>
              <div><a href="#" class="button button-chevron" id="btn-ingresar-integrante">INGRESAR INTEGRANTE <span><i
                class="icn icn-1 icn-chevron"></i></span></a></div>
              <div id="campo-integrantes">
                <select id="lista-integrantes" multiple="multiple" size="4"></select>
                <div class="alert alert-danger m-0" role="alert" id="alert-integrantes">Favor elige un integrante.</div>
                <div><b>Integrantes: <span id="numero-integrantes">0</span></b><a href="#" class="float-right" id="btn-editar-integrante">EDITAR</a></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 mb-2 mt-5 text-center">
              <label class="lbl-checkbox" id="chk-terminos-mobility">
                Acepto <a href="{{ $cf['terminos_condiciones'] }}" target="_blank">Términos y condiciones</a>
                <input type="checkbox" id="chk-terminos-condiciones">
                <i class="checkmark"></i>
              </label>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-12 text-center">
              <button class="btn btn-dark btn-registrar-equipo" disabled>REGISTRAR MI EQUIPO</button>              
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <button class="btn btn-outline-dark btn-cancelar-principal">CANCELAR</button>
              </div>
          </div>
        </div>
        {{-- Registro de personas --}}
        <div id="formulario-registro">
          <a href="#" class="btn-cancelar-formulario-registro"><i class="icn icn-1 icn-chevron volver"></i>Cancelar este
            <b>Ingreso</b></a>
          <div class="row mt-3">
            <div class="col-sm-12">
              <h2 class="coodinador">FORMULARIO DE COORDINADOR</h2>
              <h2 class="integrante">FORMULARIO DE INTEGRANTE</h2>
              <span class="text-small">Los campos con * son obligatorios.</span>
            </div>
          </div>
          <div class="row my-1">
            <div class="col-sm-12 text-uppercase">
              <h5 class="m-0">1. Información personal</h5>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="text" id="txt-nombre-completo" required>
                <span class="placeholder">Nombre completo *</span>
              </label>
            </div>
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="text" id="txt-numero-cedula" required>
                <span class="placeholder">Numero de cédula *</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="number" id="txt-edad" min="0" max="200" required>
                <span class="placeholder">Edad *</span>
              </label>
            </div>
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="text" id="txt-correo-electronico" required>
                <span class="placeholder">Correo electrónico *</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="tel" id="txt-telefono" required>
                <span class="placeholder">Teléfono *</span>
              </label>
            </div>
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="text" id="txt-lugar-trabajo-estudio" required>
                <span class="placeholder">Lugar de trabajo/estudio *</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12 col-md-6">
              <label>
                <input type="text" id="txt-especialidad" required>
                <span class="placeholder">Especialidad *</span>
              </label>
            </div>
          </div>
          <div class="row mt-5 mb-1">
            <div class="col-sm-12 text-uppercase">
              <h5 class="m-0">2. Perfil de integrante</h5>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12">
              Perfil general e importancia de su papel en el grupo
              <label>
                <input type="text" id="txt-perfil-1" required>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12">
              Experiencia en proyectos de investigación, desarrollo de producto, concursos, etc
              <label>
                <input type="text" id="txt-perfil-2" required>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-input col-sm-12">
              Desde perspectiva personal, ¿por qué es importante resolver el problema planteado?
              <label>
                <input type="text" id="txt-perfil-3" required>
              </label>
            </div>
          </div>
          <div class="alert alert-danger" role="alert" id="alert-registro">Debe ingresar todos los campos obligatorios.
          </div>
          <div class="row mt-3 coodinador">
            <div class="col text-center">
              <button class="btn btn-danger" id="btn-guardar-coordinador">GUARDAR</button>
            </div>
          </div>
          <div class="row mt-3 integrante">
            <div class="col text-center">
              <button class="btn btn-danger" id="btn-guardar-integrante-ingresar">GUARDAR E INGRESAR</button>
            </div>
          </div>
          <div class="row mt-3 integrante">
            <div class="col text-center">
              <button class="btn btn-danger" id="btn-guardar-integrante">GUARDAR</button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col text-center">
              <button class="btn btn-outline-dark btn-cancelar-formulario-registro"
                id="btn-cancelar-registro">CANCELAR</button>
            </div>
          </div>
        </div>
        {{-- Avisos --}}
        <div id="formulario-aviso">
          <div id="cancelar-formulario" class="div-aviso">
            <div class="row">
              <div class="col">
                <a href="#" id="btn-volver-registro" class="btn-cancelar-formulario-aviso">&times;</a>
              </div>
            </div>
            <div class="row">
              <div class="col text-center">
                <img src="/wp-content/themes/theme_purdy/img/icons/pregunta.png" class="my-5" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col text-center text-uppercase mb-4">
                ¿Estás seguro?
              </div>
            </div>
            <div class="row">
              <div class="col text-center mb-3">
                Deberás iniciar tu formulario de nuevo si aún deseas participar.
              </div>
            </div>
            <div class="row">
              <div class="col text-center text-uppercase my-2">
               <button class="btn btn-danger btn-aprobar-cerrar-modal">Sí, cancelar</button>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col text-center text-uppercase my-2">
               <button class="btn btn-outline-dark btn-cancelar-formulario-aviso">No, volver</button>
              </div>
            </div>
          </div>
          <div id="aprobar-cancelar-formulario" class="div-aviso">
            <div class="row">
              <div class="col text-center">
                <img src="/wp-content/themes/theme_purdy/img/icons/aprobado.png" class="my-5" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col text-center text-uppercase mb-4">
                Tu inscripción ha sido cancelada
              </div>
            </div>
            <div class="row">
              <div class="col text-center mb-3">
                Esperamos puedas inscribirte pronto
              </div>
            </div>
            <div class="row mb-4">
              <div class="col text-center text-uppercase my-2">
               <button class="btn btn-danger btn-cerrar-modal">Aceptar</button>
              </div>
            </div>           
          </div>
          <div id="confirmar-formulario" class="div-aviso">
            <div class="row">
              <div class="col">
                <a href="#" id="btn-volver-registro" class="btn-cancelar-formulario-aviso">&times;</a>
              </div>
            </div>
            <div class="row">
              <div class="col text-center">
                <img src="/wp-content/themes/theme_purdy/img/icons/pregunta.png" class="my-5" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col text-center text-uppercase mb-4">
                ¿Estás seguro?
              </div>
            </div>
            <div class="row">
              <div class="col text-center mb-3">
                La información que introdujiste se enviará a la organizadores del concurso.
              </div>
            </div>
            <div class="row">
              <div class="col text-center text-uppercase mt-3">
                {!! $cf['form'] !!}
                <button class="btn btn-danger btn-registrar">Sí, registrar mi equipo</button>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col text-center text-uppercase mt-3">
               <button class="btn btn-outline-dark btn-cancelar-formulario-aviso">No, volver</button>
              </div>
            </div>            
          </div>
          <div id="aprobar-confirmar-formulario" class="div-aviso">
            <div class="row">
              <div class="col text-center">
                <img src="/wp-content/themes/theme_purdy/img/icons/aprobado.png" class="my-5" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col text-center text-uppercase mb-4">
                ¡Gracias por formar parte de este evento!
              </div>
            </div>
            <div class="row">
              <div class="col text-center mb-3">
                Tu grupo fue inscrito correctamente
              </div>
            </div>
            <div class="row mb-4">
              <div class="col text-center text-uppercase mt-3">
               <button class="btn btn-danger btn-cerrar-modal">Aceptar</button>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection