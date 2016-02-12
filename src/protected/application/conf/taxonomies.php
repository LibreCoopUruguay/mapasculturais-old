<?php
return array(
    1 => array(
        'slug' => 'tag',
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Event',
            'MapasCulturais\Entities\Project'
        )
    ),

    2 => array(
        'slug' => 'area',
        'required' => "Debe informar al menos un área de actuación",
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent'
        ),
        'restricted_terms' => array(
            'Arte Circense',
        		'Antropología',
        		'Arqueología',
        		'Arquitectura',
        		'Arte urbano',
        		'Artes Visuales',
        		'Artesanato',
        		'Audiovisual',
        		'Bibliotecología',
        		'Candombe',
        		'Carnaval',
        		'Cine',
        		'Circo',
        		'Comunicación',
        		'Cultura comunitaria',
        		'Cultura digital',
        		'Cultura Extranjera',
        		'Cultura Indígena',
        		'Cultura LGBT',
        		'Cultura Negra',
        		'Cultura Popular',
        		'Danza Clásica',
        		'Danza Contemporánea',
        		'Danza Folclórica',
        		'Danza Popular',
        		'Danza Tango',
        		'Danza Urbana',
        		'Deporte',
        		'Derechos de autor',
        		'Diseño gráfico',
        		'Diseño industrial',
        		'Diseño interiores',
        		'Diseño textil',
        		'Economía creativa',
        		'Educación formal',
        		'Educación no formal',
        		'Filosofía',
        		'Fotografía',
        		'Gastronomía',
        		'Gastronomía',
        		'Gestión cultural',
        		'Historia',
        		'Investigación',
        		'Juegos electrónicos',
        		'Letras',
        		'Literatura',
        		'Medio Ambiente',
        		'Medios de comunicación',
        		'Moda',
        		'Museología',
        		'Música',
        		'Nuevos Medios',
        		'Patrimonio inmaterial',
        		'Patrimonio material',
        		'Periodismo',
        		'Producción cultural',
        		'Radio',
        		'Redes Sociales',
        		'Salud',
        		'Sociología',
        		'Teatro',
        		'Televisión',
        		'Títeres',
        		'Turismo',
        		'Urbanismo',
        	'Otro'
        )
    ),

    3 => array(
        'slug' => 'linguagem',
        'required' => "Debe informar al menos un tipo",
        'entities' => array(
            'MapasCulturais\Entities\Event'
        ),

        'restricted_terms' => array(
            'Charla',
        	'Ciclo',
        	'Convención',
        	'Encuentro',
        	'Espectáculo',
        	'Festival',
        	'Fiestas tradicionales',
        	'Función',
        	'Jornada',
        	'Lanzamiento',
        	'Muestra y/o exposición',
        	'Panel',
        	'Ponencia',
        	'Presentación',
        	'Reunión',
        	'Seminario',
        	'Taller',
            'Otros'
        )
    )
);