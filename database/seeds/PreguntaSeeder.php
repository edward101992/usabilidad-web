<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//DB::table('preguntas')->truncate();
    	/**
    	 * Encuesta de Eficiencia
    	 */
    	
    	$pregunta = Pregunta::create([

    		'pregunta_descripcion'=>'La información obtenida durante la revisión del software es clara durante el recorrido por el mismoLa información obtenida durante la revisión del software es clara durante el recorrido por el mismo',
			'encuesta_id'=>3

    	]);
            
        $pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La información da a conocer el objetivo principal del por qué fue creada la plataforma web',
			'encuesta_id'=>3

    	]);

    	 $pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Las imágenes distribuidas en la plataforma web, tienen relación con la información planteada',
			'encuesta_id'=>3
			
    	]);  

    	 $pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La modalidad lingüística que se encuentra en esta plataforma es la correcta para su comprensión',
			'encuesta_id'=>3
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'El diseño empleado para dar a conocer la información es el adecuado, la letra es clara',
			'encuesta_id'=>3
			
    	]);   

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Utiliza un mínimo de dos tipos de letras',
			'encuesta_id'=>3
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'El tamaño de letra que se emplea en la página web es el adecuado',
			'encuesta_id'=>3
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La plataforma contiene poca información en algunas áreas',
			'encuesta_id'=>3
			
    	]);  

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La plataforma web es apropiada para la información que contiene',
			'encuesta_id'=>3
			
    	]); 

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La información planteada se encuentra ordenada y completa',
			'encuesta_id'=>3
			
    	]);

    	/**
    	 * Encuesta de Satisfaccion
    	 */

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Con qué facilidad recuerda la manera en cómo funciona el sistema.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Con qué facilidad recuerda la manera en cómo funciona el sistema.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Recuerda los pasos que hay que seguir para completar las tareas propuestas por sistema.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que el software cumple con la funcionalidad para la cual estuvo creada.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Dentro de la página web, encontró algún tipo de elementos gráficos que le permitieron entender el contenido de esta.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que los colores implementados en el sitio web son adecuados y ayudan a reconocer la funcionalidad del software.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que en la plataforma web hay imágenes que no se relacionan con la funcionalidad de este.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Dentro de la página web, se hace fácil la identificación de procedimientos, tareas y selección de archivos si es el caso para este',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Cuándo está navegando por la página, logra identificar en que sitio de la página web se encuentra actualmente',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Si ya no desea seguir interactuando con la plataforma, es fácil regresar o salir de esta sin problema alguno',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que el software es rápido para ejecutar las tareas propuestas',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Durante el proceso de recorrido por la página web, tuvo problemas o errores que impidieron la terminación de estos.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted, que la parte visual de la plataforma web es fácil de entender y qué la funcionalidad es la adecuada',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que el diseño de la plataforma va de la mano con la información que esta ofrece al usuario (colores e imágenes).',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que el software es fácil de manejar, o es necesario usar guías de usuario para su comprensión.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que la información que se encuentra a lo largo de la página web es repetitiva.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Al interactuar con la información que la página web, es fácil comprenderla y concentrarse',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que la página web es de agrado para cualquier usuario.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que los elementos manejados en la página web son presentados de forma adecuada',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Durante el recorrido de la página web la información presentada por cada menú fue relacionada a lo que este se dirigía',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que los procedimientos que realizó para llevar a cabo una tarea son extensos',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Le permitió la plataforma web tener un equilibrio en lo que realizaba, entendía y visualizaba',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que la página web si cumplió su propósito',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La página web brindo ayuda al usuario para conocer su funcionamiento',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Pudo realizar los procedimientos de las tareas sin dificultad alguna',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que la página web tiene los elementos adecuados según el propósito de esta',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que la página web tiene los elementos adecuados según el propósito de esta',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera que el contenido visualizado aporta una buena lectura',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Tuvo una buena combinación en cuanto al color del texto y el fondo',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'El tamaño de los caracteres numéricos si los posee fue el apropiado para que el usuario no tuviera dificultad al visualizarlos',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que el tamaño de la letra fue el adecuado para tener una lectura clara y sin inconvenientes.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que, si había un orden en los temas, teniendo en cuenta la diferenciación entre un tema y otro.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Tuvo problemas visuales con la página web, ya que los diferentes usuarios tienen condiciones ópticas diferentes',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'La página web tiene información concreta y puntual, es decir no se extiende mucho en los temas.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'En la página web se tuvieron en cuenta viñetas en los diferentes temas abordados, para que los usuarios tiendan a leer el texto',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Se podía diferenciar los títulos del contenido',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Pudo encontrar contenido importante y saber dónde está ubicado.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Considera usted que los títulos del menú describieron correctamente la información de cada uno.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'El orden de la información del menú si era secuencial',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Los enlaces encontrados en el recorrido de la página web pudieron ser navegados sin ningún inconveniente.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Se puede identificar el propósito de cada enlace solo con el nombre de este.',
			'encuesta_id'=>1
			
    	]);

    	$pregunta = Pregunta::create([
    		
    		'pregunta_descripcion'=>'Se puede identificar el propósito de cada enlace solo con el nombre de este.',
			'encuesta_id'=>1
			
    	]);


    }
}



