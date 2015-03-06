<?php
//Headings
$_['heading_title'] = 'PayPal Payflow Pro iFrame';
$_['heading_refund'] = 'Devolución';

//Table columns
$_['column_transaction_id'] = 'ID de la Transacción';
$_['column_transaction_type'] = 'Tipo de transacción';
$_['column_amount'] = 'Monto';
$_['column_time'] = 'Tiempo';
$_['column_actions'] = 'Acciones';

//Text
$_['text_payment'] = 'Pago';
$_['text_success'] = 'Exito: has modificado los detalles de la cuenta Payflow Pro iFram!';
$_['text_pp_payflow_iframe'] = '<a onclick="window.open(\'\');"><img src="view/image/payment/paypal.png" alt="PayPal Payflow Pro" title="PayPal Payflow Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization'] = 'Autorización';
$_['text_sale'] = 'Venta';
$_['text_authorise'] = 'Autorizo';
$_['text_capture'] = 'Captura retardada';
$_['text_void'] = 'Anular';
$_['text_payment_info'] = 'Información del pago';
$_['text_complete'] = 'Completo';
$_['text_incomplete'] = 'Incompleto';
$_['text_transaction'] = 'Transacción';
$_['text_confirm_void'] = 'Si tu anulas tu no puedes capturar ningun fondo despues';
$_['text_refund'] = 'Devolución';
$_['text_refund_issued'] = 'La devolución fue emitida con exito';
$_['text_redirect'] = 'Redireccionar';
$_['text_iframe'] = 'Iframe';
$_['help_vendor'] = 'Id de comerciante que tu creaste cuando te registraste para la cuenta de en Payments Pro account.';
$_['help_user'] = 'Si tu tienes configurada una o mas usuarios en la cuenta, este valor es el ID del usuario autorizado para procesar transacciones. Si no tienes ningun usuario adicional en la cuenta , el USUARIO es el mismo que el VENDEDOR.';
$_['help_password'] = 'Tu contraseña de 6 a 32 caracteres que tu definiste cuando registraste la cuenta.';
$_['help_partner'] = 'El ID que se te provisiono por el vendedor autorizado de PayPal quien te registro  para el Payflow SDK. Si tu compraste directamente tu cuenta desde PayPal, usa PayPal';
$_['help_checkout_method'] = "Por favor usar el metodo de redireccionamiento si no tienes instalado SSL installed o si no tienes habilitados pagos con PayPal.";
$_['help_debug'] = "Información adicional de los Logs.";

//Buttons
$_['button_refund'] = 'Devolución';
$_['button_void'] = 'Anular';
$_['button_capture'] = 'Capturar';

//Tabs
$_['tab_settings'] = 'Configuraciones';
$_['tab_order_status'] = 'Estado del pedido';
$_['tab_checkout_customisation'] = 'Personalización del Pago';

//Form entry
$_['entry_vendor'] = 'Vendedor:';
$_['entry_user'] = 'Usuario:';
$_['entry_password'] = 'Contraseña:';
$_['entry_partner'] = 'Socio:';
$_['entry_test'] = 'Modo Prueba:<br /><span class="help">Usar en vivo o en modo prueba (sandbox) para procesar las transacciones del servidor? En modo prueba puede fallar en el navegador Internet Explorer</span>';
$_['entry_total'] = 'Total:<br /><span class="help">El monto total que debe alcanzar el pedido antes que el metodo de pago sea activado.</span>';
$_['entry_order_status'] = 'Estatus del Pedido:';
$_['entry_geo_zone'] = 'Zona geografica:';
$_['entry_status'] = 'Estatus:';
$_['entry_sort_order'] = 'Orden de aparción:';
$_['entry_transaction_method'] = 'Metodo de la transacción:';
$_['entry_transaction_id'] = 'ID de la transacción';
$_['entry_full_refund'] = 'Devolución completa';
$_['entry_amount'] = 'Monto';
$_['entry_message'] = 'Mensaje';
$_['entry_ipn_url'] = 'IPN URL:';
$_['entry_checkout_method'] = 'Metodo de compra:';
$_['entry_debug'] = 'Modo Debug:';
$_['entry_transaction_reference'] = 'Refernecia de la transacción';
$_['entry_transaction_amount'] = 'Monto de la Transacción';
$_['entry_refund_amount'] = 'Monto devuelto';
$_['entry_capture_status'] = 'Capturar estatus';
$_['entry_void'] = 'Anular';
$_['entry_capture'] = 'Capturar';
$_['entry_transactions'] = 'Transacciones';
$_['entry_complete_capture'] = 'Caputra completa';
$_['entry_canceled_reversal_status'] = 'Estado cancelado de la inversión:';
$_['entry_completed_status'] = 'Estatus completo:';
$_['entry_denied_status'] = 'Estatus denegado:';
$_['entry_expired_status'] = 'Estatus expirdado:';
$_['entry_failed_status'] = 'Estatus fallido:';
$_['entry_pending_status'] = 'Estatus pendiente:';
$_['entry_processed_status'] = 'Estatus procesado:';
$_['entry_refunded_status'] = 'Estatus de la devolución:';
$_['entry_reversed_status'] = 'Estatus de la inversión:';
$_['entry_voided_status'] = 'Estatus anulado:';
$_['entry_cancel_url'] = 'URL para cancelar:';
$_['entry_error_url'] = 'URl del Error:';
$_['entry_return_url'] = 'URL de regreso:';
$_['entry_post_url'] = 'Silent POST URL:';

//Errors
$_['error_permission'] = 'Cuidado: No tienes permisos para modifcar pagos de  PayPal Website Payment Pro iFrame (UK)!';
$_['error_vendor'] = 'Vendedor Obligatorio!';
$_['error_user'] = 'Usuario Obligatorio!';
$_['error_password'] = 'Contraseña Obligatoria!';
$_['error_partner'] = 'Socio Obligatorio!';
$_['error_missing_data'] = 'Datos perdidos';
$_['error_missing_order'] = 'No se pudo encontrar la orden';
$_['error_general'] = 'Hubo un error';
$_['error_capture_amt'] = 'Introducir el monto a cpaturar';
?>