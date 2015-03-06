<?php
//Headings
$_['heading_title']                  = 'PayPal Payflow Pro iFrame';
$_['heading_refund']                 = 'Erstattung';

//Table columns
$_['column_transaction_id']          = 'Belegnummer';
$_['column_transaction_type']        = 'Belegart';
$_['column_amount']                  = 'Betrag';
$_['column_time']                    = 'Zeit';
$_['column_actions']                 = 'Aktionen';

//Text
$_['text_payment']                   = 'Zahlung';
$_['text_success']                   = 'Erfolgreich: PayPal Payflow Pro iFrame geändert!';
$_['text_pp_payflow_iframe']         = '<a onclick="window.open(\'\');"><img src="view/image/payment/paypal.png" alt="PayPal Payflow Pro" title="PayPal Payflow Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']             = 'Genehmigung';
$_['text_sale']                      = 'Verkauf';
$_['text_authorise']                 = 'Genehmigen';
$_['text_capture']                   = 'verzögertes Einziehen';
$_['text_void']                      = 'Ungültig';
$_['text_payment_info']              = 'Zahlungsinformation';
$_['text_complete']                  = 'Vollständig';
$_['text_incomplete']                = 'Unvollständig';
$_['text_transaction']               = 'Transaktion';
$_['text_confirm_void']              = 'Wenn Sie die Zahlung als ungültig markieren, können Sie keine weiteren Beträge einziehen.';
$_['text_refund']                    = 'Erstatten';
$_['text_refund_issued']             = 'Die Erstattung wurde erfolgreich durchgeführt.';
$_['text_redirect']                  = 'Umleiten';
$_['text_iframe']                    = 'Iframe';
$_['help_vendor']                    = 'Ihre Verkäufer-ID, die Sie während der Anmeldung für die Website Payments Pro erstellt haben.';
$_['help_user']                      = 'Wenn Sie einen oder mehrere zusätzliche Benutzer anlegen, dann enthält dieser Wert die ID des Users, der berechtigt ist, Transaktionen zu verarbeiten. Wenn Sie keine zusätzlichen Benutzer erstellt haben, hat BENUTZER denselben WERT wie LIEFERANT.';
$_['help_password']                  = 'Das Passwort mit 6 bis 32 Zeichen, das Sie während der Anmeldung Ihres Kontos definiert haben.';
$_['help_partner']                   = 'Diese ID wird Ihnen vom offiziellen PayPal Reseller mitgeteilt, der Sie für das Payflow SDK angemeldet hat. Wenn Sie Ihre Konto direkt bei PayPal gekauft haben, benutzen Sie PayPal.';
$_['help_checkout_method']           = 'Bitte nutzen Sie die Umleitungsmethode, wenn Sie kein SSL installiert haben oder die Zahlung durch PayPal bei Ihrem Webhoster nicht aktiviert ist.';
$_['help_debug']                     = 'Zeichnet zusätzliche Informationen in der Protokolldatei auf.';

//Buttons
$_['button_refund']                  = 'Erstatten';
$_['button_void']                    = 'Ungültig';
$_['button_capture']                 = 'Einziehen';

//Tabs
$_['tab_settings']                   = 'Einstellungen';
$_['tab_order_status']               = 'Auftragsstatus';
$_['tab_checkout_customisation']     = 'Anpassung Kasse';

//Form entry
$_['entry_vendor']                   = 'Lieferant:';
$_['entry_user']                     = 'Benutzer:';
$_['entry_password']                 = 'Passwort:';
$_['entry_partner']                  = 'Partner:';
$_['entry_test']                     = 'Testmodus:';
$_['entry_total']                    = 'Summe:<br /><span class="help">Der Warenkorb muss diese Summe beinhalten, damit dieses Zahlungsverfahren verfügbar ist.</span>';
$_['entry_order_status']             = 'Auftragsstatus:';
$_['entry_geo_zone']                 = 'Geo Zone:';
$_['entry_status']                   = 'Status:';
$_['entry_sort_order']               = 'Reihenfolge:';
$_['entry_transaction_method']       = 'Belegart:';
$_['entry_transaction_id']           = 'Belegnummer';
$_['entry_full_refund']              = 'vollständige Erstattung';
$_['entry_amount']                   = 'Betrag';
$_['entry_message']                  = 'Nachricht';
$_['entry_ipn_url']                  = 'URL IPN:';
$_['entry_checkout_method']          = 'Methode Warenkorb:';
$_['entry_debug']                    = 'Debug-Modus:';
$_['entry_transaction_reference']    = 'Belegreferenz';
$_['entry_transaction_amount']       = 'Betrag';
$_['entry_refund_amount']            = 'Erstattungsbetrag';
$_['entry_capture_status']           = 'Status Einzug';
$_['entry_void']                     = 'Ungültig';
$_['entry_capture']                  = 'Einziehen';
$_['entry_transactions']             = 'Belege';
$_['entry_complete_capture']         = 'vollständig Einziehen';
$_['entry_canceled_reversal_status'] = 'Auftragsstatus Erstattung Abgebrochen:';
$_['entry_completed_status']         = 'Status Fertig:';
$_['entry_denied_status']            = 'Auftragsstatus Abgelehnt:';
$_['entry_expired_status']           = 'Status abgelaufen:';
$_['entry_failed_status']            = 'Auftragsstatus Fehlgeschlagen:';
$_['entry_pending_status']           = 'Auftragsstatus Ausstehend:';
$_['entry_processed_status']         = 'Status bearbeitet:';
$_['entry_refunded_status']          = 'Auftragsstatus Erstattet:';
$_['entry_reversed_status']          = 'Auftragsstatus Gutschrift:';
$_['entry_voided_status']            = 'Status ungültig:';
$_['entry_cancel_url']               = 'URL Abbruch:';
$_['entry_error_url']                = 'URL Fehler:';
$_['entry_return_url']               = 'URL Zurück:';
$_['entry_post_url']                 = 'URL Silent POST:';

//Errors
$_['error_permission']               = 'Warnung: Sie haben keine Berechtigung, um PayPal Website Payment Pro iFrame (UK) zu bearbeiten!';
$_['error_vendor']                   = 'Lieferant erforderlich!';
$_['error_user']                     = 'Benutzer erforderlich!';
$_['error_password']                 = 'Passwort erforderlich!';
$_['error_partner']                  = 'Partner erforderlich!';
$_['error_missing_data']             = 'Es fehlen Daten.';
$_['error_missing_order']            = 'Der Auftrag konnte nicht gefunden werden.';
$_['error_general']                  = 'Es ist ein Fehler aufgetreten.';
$_['error_capture_amt']              = 'Bitte geben Sie einen Betrag ein, der eingezogen werden soll.';
?>