<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configuración General de la Aplicación
    |--------------------------------------------------------------------------
    */
    'app' => [
        'name' => 'Invoice Day',
        'version' => '1.0.0',
        'company' => 'Tu Empresa S.A.',
        'copyright_year' => date('Y'),
        'default_currency' => 'COP',
        'default_language' => 'es-ES',
        'debug_mode' => env('APP_DEBUG', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración de Textos e Idiomas
    |--------------------------------------------------------------------------
    */
    'text' => [
        'titles' => [
            'main_header' => 'Sistema de Facturación Electrónica',
            'dashboard' => 'Panel Principal',
            'invoices' => 'Facturas',
            'quotes' => 'Cotizaciones',
            'clients' => 'Clientes',
            'settings' => 'Configuración',
        ],

        'messages' => [
            'welcome' => 'Bienvenido a Invoice Day',
            'loading' => 'Cargando, por favor espere...',
            'saved' => 'Cambios guardados correctamente',
            'deleted' => 'Registro eliminado',
            'confirm_delete' => '¿Está seguro que desea eliminar este registro?',
            'no_results' => 'No se encontraron resultados',
        ],

        'buttons' => [
            'save' => 'Guardar',
            'cancel' => 'Cancelar',
            'edit' => 'Editar',
            'delete' => 'Eliminar',
            'generate' => 'Generar',
            'print' => 'Imprimir',
            'download' => 'Descargar',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración de Facturación
    |--------------------------------------------------------------------------
    */
    'invoice' => [
        'default_terms' => 'Pago a 30 días',
        'default_notes' => 'Gracias por su preferencia',
        'next_number' => 1001,
        'prefix' => 'FAC-',
        'decimal_places' => 2,
        'tax_rate' => 0.16, // 16% de IVA
        'allow_decimal_quantity' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración de Cotizaciones
    |--------------------------------------------------------------------------
    */
    'quote' => [
        'validity_days' => 30,
        'prefix' => 'COT-',
        'next_number' => 501,
        'default_footer' => 'Esta cotización es válida por 30 días naturales',
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración de Interfaz de Usuario
    |--------------------------------------------------------------------------
    */
    'ui' => [
        'theme' => 'light', // light | dark
        'primary_color' => '#333399',
        'secondary_color' => '#ffffff',
        'accent_color' => '#888484',
        'results_per_page' => 15,
        'show_notifications' => true,
        'animation_enabled' => true,
    ],
];