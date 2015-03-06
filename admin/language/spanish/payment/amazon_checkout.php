<?php
//Payment page links
$_['text_amazon_checkout'] = '<a onclick="window.open(\'http://go.amazonservices.com/UKCBASPOpenCart.html\');"><img src="view/image/payment/amazon.png" alt="Amazon Payments" title="Amazon Payments" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join'] = '<a href="http://go.amazonservices.com/UKCBASPOpenCart.html" title="Click aqui para unirse a los pagos de Amazon">Click aquí para crear una cuenta de Pagos de Amazon</a>';

//Headings
$_['heading_title'] = 'Pagos de Amazon';
$_['text_home'] = 'Pricipal';
$_['text_payment'] = 'Pago';

//Text
$_['text_cron_job_url'] = "URL del Cron:";
$_['help_cron_job_url'] = "Colocar un cron para llamar esta url";
$_['text_cron_job_token'] = "Token secreto";
$_['help_cron_job_token'] = "Hacer este largo dificil de imaginar";
$_['text_access_key'] = 'Llave de acceso:';
$_['text_access_secret'] = 'Llave secreta:';
$_['text_merchant_id'] = 'ID del comerciante:';
$_['text_marketplace'] = 'Mercado:';
$_['text_germany'] = 'Alemania';
$_['text_uk'] = 'Reyno Unido';
$_['text_checkout_mode'] = 'Modo pedido:';
$_['text_geo_zone'] = 'Zona geografica:';
$_['text_status'] = 'Estatus:';
$_['text_live'] = 'en vivo';
$_['text_sandbox'] = 'Sandbox';
$_['text_sort_order'] = 'Orden de aparción:';
$_['text_minimum_total'] = 'Total minimo del pedido:';
$_['text_all_geo_zones'] = 'Todas las zonas geograficas';
$_['text_status_enabled'] = 'Habilitado';
$_['text_status_disabled'] = 'No habilitado';
$_['text_default_order_status'] = 'Pendiente:';
$_['text_ready_order_status'] = 'Estado listo para ser enviado:';
$_['text_canceled_order_status'] = 'Estado del pedido cancelado:';
$_['text_shipped_order_status'] = 'Estado del pedido enviado:';
$_['text_last_cron_job_run'] = "Ultima vez que el Cron se corrio:";
$_['text_allowed_ips'] = "IPs permitidas";
$_['text_add'] = "Agregar";
$_['text_upload_success'] = 'El archivo fue subido con exito';
$_['help_adjustment'] = 'Campos en engritas y el ultimo "-adj" son obligatorios';
$_['help_allowed_ips'] = "Dejar vacio si quieres que cualquiera pueda ver el boton de pedido";

// Buttons
$_['button_cancel'] = 'Cancelar';
$_['button_save'] = 'Guardar';

// Errors
$_['error_permissions'] = 'No tienes permisos para modificar este modulo';
$_['error_empty_access_secret'] = 'La llave secreta es obligatoria';
$_['error_empty_access_key'] = 'La llave de acceso es obligatoria';
$_['error_empty_merchant_id'] = 'El Id de comerciante es obligatoria';
$_['error_curreny'] = 'Tu tienda deve tener la moneda %s instalada y habilitada';
$_['error_upload'] = 'La subida fallo';

// Checkout button settings
$_['text_button_settings'] = 'Buton para los ajustes del pedido';
$_['text_colour'] = 'Color:';
$_['text_orange'] = 'Naranja';
$_['text_tan'] = 'Bronceado';
$_['text_white'] = 'Blanco';
$_['text_light'] = 'Iluminado';
$_['text_dark'] = 'Obscuro';
$_['text_size'] = 'Tamaño:';
$_['text_medium'] = 'Mediano';
$_['text_large'] = 'Largo';
$_['text_x_large'] = 'Extra largo';
$_['text_background'] = 'Fondo:';
$_['text_download'] = '<a href="%s">Descargar</a> archivo de la plantilla';

// Messages
$_['text_success'] = 'El modulo de pagos de Amazon ha sido actualizado';

// Order Info
$_['text_amazon_details'] = 'Detalles de Amazon';
$_['text_amazon_order_id'] = 'ID del pedido de Amazon:';
$_['text_upload'] = 'Subir';
$_['text_upload_template'] = 'Subir lo llenado en la plantilla dando click en el boton de abajo. Estar seguro que se guardo como un archivo delimitado por la pestaña.';
$_['tab_order_adjustment'] = 'Ajusted del pedido';

//Table columns
$_['column_submission_id'] = 'Id de la sumisión';
$_['column_status'] = 'Estatus';
$_['column_text'] = 'Respuesta';
$_['column_amazon_order_item_code'] = 'Código del producto del Pedido de Amazon';
?>
