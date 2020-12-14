@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')

             <br>
               <div class="container">
<!-- Card -->
<div class="card card-image"
  style="background-image: url(/fondo.jpeg);">

  <!-- Content -->
  <div class="rgba--strong py-5 px-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion accordion-8" id="accordionEx8" role="tablist"
          aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading30">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30" aria-expanded="true"
                aria-controls="collapse30">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Introducción
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse30" class="collapse show" role="tabpanel" aria-labelledby="heading30"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">Para generar los casos se deben seguir el orden que presentamos a continuación para tener una mejor experiencia de carga y sea mas agil al momento de crear los casos positivos:
                    <br>
               <br> Orden de carga</br>      
               <br> 1- Crear laboratorio con el boton <i class=" fa fa-plus-square"></i>
               <br> 2- Crear Usuario con el boton <i class=" fa fa-plus-square"></i>
               <br> 3- Crear Tipo de Prueba con el boton <i class=" fa fa-plus-square"></i>
               <br> 4- Crear Paciente con el boton <i class=" fa fa-plus-square"></i>
               <br> 5- En este punto podemos crear Caso Positivo con el boton <i class=" fa fa-plus-square"></i></br></p>
               Observación: Todos los campos son requeridos en el momento de la carga de cualquier formulario, de no completarse algun dato no se guardaran los datos cargados y habra una alerta especificando los campos vacios que falta cargar.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31" aria-expanded="true"
                aria-controls="collapse31">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Laboratorio
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">En este punto se debe generar un laboratorio con el boton <i class=" fa fa-plus-square"></i> que redirecciona a un formulario con los datos necesarios para incorporar un nuevo laboratorio, para que al momento de cargar los casos positivos obtenga los datos del laboratorio de manera automatica.</p>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse32" aria-expanded="true"
                aria-controls="collapse32">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Usuario
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="heading32"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">En este punto se debe generar un usuario con el boton <i class=" fa fa-plus-square"></i> que redirecciona a un formulario con los datos necesarios para incorporar un nuevo usuario con el rol debido, para que al momento de cargar los casos positivos obtenga los datos del usuario de manera automatica.</p>
              </div>
            </div>
          </div>
          <!-- Accordion card -->
        </div>
        <!--/.Accordion wrapper-->

        <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading33">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse33" aria-expanded="true"
                aria-controls="collapse33">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Tipo de Prueba
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse33" class="collapse" role="tabpanel" aria-labelledby="heading33"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">En este punto se debe generar los tipos de pruebas existentes para lo cual se agrega con el boton <i class=" fa fa-plus-square"></i> de esta manera, para que al momento de la carga de pacientes y casos positivos puedan tener de una selección el tipo de prueba precargada automaticamente.  </p>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading34">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse34" aria-expanded="true"
                aria-controls="collapse34">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Paciente
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse34" class="collapse" role="tabpanel" aria-labelledby="heading34"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">En este punto se debe generar los pacientes con el boton <i class=" fa fa-plus-square"></i> que redirecciona a un formulario con los datos necesarios para incorporar un nuevo paciente, para que al momento de cargar los casos positivos obtenga los datos completos del paciente de manera automatica.</p>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading35">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse35" aria-expanded="true"
                aria-controls="collapse35">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Caso Positivo
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse35" class="collapse" role="tabpanel" aria-labelledby="heading35"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">Caso Positivo es componente principal del sistema, de ello se obtienen todos los datos estadisticos necesarios para que se pueda accionar de manera eficiente al momento de la toma de decisiones por parte de el ministerio de salud y las instituciones involucradas. Para ello se debe generar un nuevo caso positivo con el boton <i class=" fa fa-plus-square"></i> que redirecciona a un formulario con los datos necesarios para el registro del nuevo caso y se generen los informes necesarios, todos los campos son requeridos en el momento de la carga.</p>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading36">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse36" aria-expanded="true"
                aria-controls="collapse36">
                <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase black-text mb-0 py-3 mt-1">
                  Control
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse36" class="collapse" role="tabpanel" aria-labelledby="heading36"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
                <p class="p-md-4 mb-0">En este punto se debe generar los controles realizados al paciente con el boton <i class=" fa fa-plus-square"></i> que redirecciona a un formulario con los datos necesarios para incorporar un nuevo control, para tener un seguimiento del paciente positivo.</p>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

      </div>
    </div>
  </div>
  <!-- Content -->
</div>
<!-- Card -->
</div>

          </br>
   
@endsection
