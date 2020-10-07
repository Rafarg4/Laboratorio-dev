<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasoPositivosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso_positivos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_region');
            $table->text('region');
            $table->integer('codigo_distrito');
            $table->text('distrito');
            $table->date('fecha_notificacion');
            $table->date('fecha_notificacion_se');
            $table->text('medico');
            $table->text('medida_edad');
            $table->text('grupo_etareo');
            $table->text('residente');
            $table->text('hospedaje');
            $table->integer('telefono_verificado');
            $table->integer('codigo_departamento');
            $table->text('departamento');
            $table->text('zona');
            $table->text('personal_blanco');
            $table->text('profesion');
            $table->text('profesion_otro');
            $table->text('albergue');
            $table->text('lugar_albergue');
            $table->text('fiebre');
            $table->text('tipo_fiebre');
            $table->integer('grado');
            $table->date('inicio_fiebre_sintoma');
            $table->date('inicio_fiebre_sintoma_se');
            $table->date('fecha_primera_consulta');
            $table->date('fecha_primera_consulta_se');
            $table->text('asistencia_respiratoria_mecanica');
            $table->text('hospitalizado');
            $table->date('fecha_hospitalizacion');
            $table->date('fecha_hospitalizacion_se');
            $table->text('lugar_hospitalizacion');
            $table->text('lugar_hospitalizacion_se');
            $table->date('fecha_alta');
            $table->date('fecha_alta_se');
            $table->text('uci');
            $table->date('fecha_ingreso_uci');
            $table->date('fecha_ingreso_uci_se');
            $table->text('lugar_uci');
            $table->text('lugar_uci_otro');
            $table->date('fecha_egreso_uci');
            $table->date('fecha_egreso_uci_se');
            $table->text('fallecido');
            $table->date('fecha_fallecido');
            $table->date('fecha_fallecido_se');
            $table->text('lugar_fallecido_residencia');
            $table->text('lugar_fallecido_otro');
            $table->text('clasificacion_final_obito');
            $table->date('cierre_obito_fecha');
            $table->text('responsable_cierre_ovito');
            $table->text('signos_sintomas');
            $table->text('fiebre_referida');
            $table->text('temperatura_mayor');
            $table->text('coriza_rinorrea');
            $table->text('congestion_nasal');
            $table->text('tos');
            $table->text('dificultad_de_respirar');
            $table->text('irritabilidad_confusion');
            $table->text('dolor_de_cabeza');
            $table->text('inyeccion_cojuntival');
            $table->text('disnea_taquipnea');
            $table->text('nauseas_vomitos');
            $table->text('dolor_abdominal');
            $table->text('convulsiones');
            $table->text('auscultacion_pulmonar_anormal');
            $table->text('dolor_de_oido');
            $table->text('dolor_de_garganta');
            $table->text('mialigas');
            $table->text('postracion');
            $table->text('diarrea');
            $table->text('sintomas_otro');
            $table->text('factor_de_riesgo');
            $table->text('cardiopatia_cronica');
            $table->text('asma');
            $table->text('enfermedad_pulmonar_cronica');
            $table->text('diabetes');
            $table->text('enfermedad_hepatica_cornica');
            $table->text('enfermedad_tratamiento');
            $table->text('enfe_neurologica_cronica');
            $table->text('sindrome_de_down');
            $table->text('desnutricion');
            $table->text('obesidad');
            $table->text('masa_corporal');
            $table->text('masa_corporal_mayor');
            $table->text('otro');
            $table->text('embarazada');
            $table->text('trimestre_embarazo');
            $table->text('puerpera');
            $table->text('vacuna_influenza');
            $table->date('fecha_vacunacion');
            $table->date('fecha_vacunaciondos');
            $table->text('viajo_reside');
            $table->text('lugar');
            $table->date('fecha_de_ingreso_pai');
            $table->text('centro_asistencial_con_covid');
            $table->text('centro_asistencial_pais');
            $table->text('centro_asistencial_ciudad');
            $table->text('nombre_centro_asistencial');
            $table->date('fecha_en_que_asistio');
            $table->text('contacto_con_animales');
            $table->text('animal');
            $table->text('animal_otro');
            $table->text('contacto_con_personas');
            $table->text('tipo_de_contacto');
            $table->text('contacto_otro');
            $table->text('contacto_con_infectado');
            $table->text('nombre_contacto');
            $table->integer('documento_contacto');
            $table->text('pai_contacto');
            $table->text('ciudad_contacto');
            $table->text('toma_de_muestra');
            $table->integer('nro_muestra');
            $table->text('lugar_toma_muestra');
            $table->text('otro_lugar_muestra');
            $table->text('muestra');
            $table->date('fecha_toma');
            $table->date('hora_toma');
            $table->date('fecha_envio');
            $table->integer('nro_laboratorio');
            $table->text('laboratorio');
            $table->text('otro_laboratorio');
            $table->text('tecnica');
            $table->text('otra_tecnica');
            $table->text('clasificacion_final');
            $table->text('resultado');
            $table->text('otro_agente');
            $table->text('observacion_laboratorio');
            $table->integer('nro_plantilla_dato');
            $table->text('clasi_final_sarc_cov');
            $table->date('fecha_cierre_sars_cov');
            $table->text('responsable_cierre_sarscov');
            $table->text('recuperado');
            $table->date('anho');
            $table->text('responsble_carga');
            $table->text('usuario_lugar');
            $table->integer('paciente_id')->unsigned();
            $table->integer('prueba_id')->unsigned();
            $table->integer('laboratorio_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('prueba_id')->references('id')->on('tipo_pruebas');
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('caso_positivos');
    }
}
