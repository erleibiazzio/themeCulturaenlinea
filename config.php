<?php
return [
    'app.siteName' => 'xxxx Cultura en Línea',
    'app.siteDescription' => 'Esta es una herramienta que permite conocer el escenario cultural de nuestro país. Es un espacio colaborativo en el que podés registrarte como agente cultural, difundir tus eventos, subir espacios, proyectos, e inscribirte a las convocatorias y concursos publicados.',

    "module.FAQ" => [
        'support-message' => '¿No encontraste lo que buscabas? Comunicate con el soporte a través del canal <a href="mailto:culturaenlinea@mec.gub.uy" style="color: #00a2f0; display: inline;">culturaenlinea@mec.gub.uy</a>.
',
    ],

    'mailer.templates' => [
        'welcome' => [
            'title' => "Bienvenido(a) a Cultura en Línea",
            'template' => 'welcome.html'
        ],
        'last_login' => [
            'title' => "Acceda a Cultura en Línea",
            'template' => 'last_login.html'
        ],
        'new' => [
            'title' => "Nuevo registro",
            'template' => 'new.html'
        ],
        'update_required' => [
            'title' => "Acceda a Cultura en Línea",
            'template' => 'update_required.html'
        ],
        'compliant' => [
            'title' => "Denuncia - Cultura en Línea",
            'template' => 'compliant.html'
        ],
        'suggestion' => [
            'title' => "Mensaje - Cultura en Línea",
            'template' => 'suggestion.html'
        ],
        'seal_toexpire' => [
            'title' => "Sello Certificador por expirar",
            'template' => 'seal_toexpire.html'
        ],
        'seal_expired' => [
            'title' => "Sello Certificador Expirado",
            'template' => 'seal_expired.html'
        ],
        'opportunity_claim' => [
            'title' => "Solicitud de Reclamo de Oportunidad",
            'template' => 'opportunity_claim.html'
        ],
        'request_relation' => [
            'title' => "Solicitud",
            'template' => 'request_relation.html'
        ],
        'start_registration' => [
            'title' => "Inscripción inciciada",
            'template' => 'start_registration.html'
        ],
        'start_data_collection_phase' => [
            'title' => "Su inscripción avanzó de fase",
            'template' => 'start_data_collection_phase.html'
        ],
        'export_spreadsheet' => [
            'title' => "Archivo generado",
            'template' => 'export_spreadsheet.html'
        ],
        'send_registration' => [
            'title' => "Inscripción enviada",
            'template' => 'send_registration.html'
        ],
        'claim_form' => [
            'title' => "Solicitud de reclamo",
            'template' => 'claim_form.html'
        ],
        'claim_certificate' => [
            'title' => "Certificado de solicitud de reclamo",
            'template' => 'claim_certificate.html'
        ],
    ]
];
