<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Fee por Contra Reembolso';
$_['heading_getting_started']    = 'Comenzando';
$_['heading_setup']              = 'Configurando la Fee por Contra Reembolso';
$_['heading_faq']                = 'Preguntas Frecuentes';
$_['heading_contact']            = 'Contactar Soporte';

// Text
$_['text_extension']             = 'Extensiones';
$_['text_success']               = 'Éxito: ¡Ha modificado la fee por Contra Reembolso!';
$_['text_edit']                  = 'Editar fee por Contra Reembolso';
$_['text_getting_started']       = '<p><strong>Resumen:</strong> La extensión Playful Sparkle - COD fee para OpenCart 3.x permite a los propietarios de tiendas añadir una tarifa configurable a los pedidos que utilicen el método de pago contra reembolso (COD). Esta función ayuda a compensar las tarifas de procesamiento de COD y proporciona un mayor control sobre los totales de los pedidos.</p><p><strong>Requisitos:</strong> OpenCart 3.x+, PHP 7.3 o superior.</p>';
$_['text_setup']                 = '<p>Para configurar, ingrese el monto deseado de la tarifa (incluyendo impuestos), seleccione la clase fiscal apropiada y habilite la extensión. La tarifa se aplicará automáticamente y se ajustará a la configuración fiscal de su tienda, recalculando la tarifa neta en función de la tasa de impuesto especificada. Por ejemplo, si la tarifa está configurada a 5 EUR y la tasa de impuestos es del 20%, la tarifa se recalculará a 4,17 EUR (netos) al finalizar la compra.</p>';
$_['text_faq']                   = '<details><summary>¿Puedo aplicar tarifas diferentes para otros métodos de pago?</summary>No, esta extensión solo aplica para pedidos que utilicen el método de pago contra reembolso (COD).</details><details><summary>¿La tarifa se mostrará de manera separada en el resumen del pedido?</summary>Sí, la tarifa se mostrará como un ítem separado en el resumen del pedido durante el proceso de pago, con los ajustes de impuestos realizados según la configuración fiscal de la tienda.</details>';
$_['text_contact']               = '<p>Para obtener más asistencia, por favor póngase en contacto con nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación del Usuario</a></li></ul>';

// Tab
$_['tab_general']                = 'General';
$_['tab_help_and_support']       = 'Ayuda &amp; Soporte';

// Entry
$_['entry_fee']                  = 'Fee';
$_['entry_tax_class']            = 'Clase Impositiva';
$_['entry_status']               = 'Estado';
$_['entry_sort_order']           = 'Orden de Clasificación';

// Error
$_['error_total_ps_cod_fee_fee'] = 'La fee no puede estar vacía, ni ser menor o igual a cero';

// Error
$_['error_permission']           = 'Advertencia: ¡No tiene permiso para modificar la fee por Contra Reembolso!';
