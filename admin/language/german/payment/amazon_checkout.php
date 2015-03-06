<?php
//Payment page links
$_['text_amazon_checkout']          = '<a onclick="window.open(\'http://go.amazonservices.com/UKCBASPOpenCart.html\');"><img src="view/image/payment/amazon.png" alt="Amazon Zahlungen" title="Amazon Zahlungen" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']              = '<a href="http://go.amazonservices.com/UKCBASPOpenCart.html" title="Hier klicken, um ein Konto für Amazon Zahlungen zu erstellen.">Hier klicken, um ein Konto für Amazon Zahlungen zu erstellen.</a>';

//Headings
$_['heading_title']                 = 'Amazon Zahlungen';
$_['text_home']                     = 'Startseite';
$_['text_payment']                  = 'Zahlung';

//Text
$_['text_cron_job_url']             = 'URL cron Job:';
$_['help_cron_job_url']             = 'Mit dieser URL kann ein cron Job eingerichtet werden.';
$_['text_cron_job_token']           = 'Cron Schlüssel';
$_['help_cron_job_token']           = 'Bitte möglichst viele und schwer zu ratende Zeichen wählen.';
$_['text_access_key']               = 'Zugriffsschlüssel:';
$_['text_access_secret']            = 'Geheimschlüssel:';
$_['text_merchant_id']              = 'Verkäufer-ID:';
$_['text_marketplace']              = 'Marktplatz:';
$_['text_germany']                  = 'Deutschland';
$_['text_uk']                       = 'Großbritannien';
$_['text_checkout_mode']            = 'Betriebsart:';
$_['text_geo_zone']                 = 'Geo Zone:';
$_['text_status']                   = 'Status:';
$_['text_live']                     = 'Live';
$_['text_sandbox']                  = 'Sandbox';
$_['text_sort_order']               = 'Sortierreihenfolge:';
$_['text_minimum_total']            = 'minimale Auftragssumme:';
$_['text_all_geo_zones']            = 'Alle Geo Zonen';
$_['text_status_enabled']           = 'Aktiviert';
$_['text_status_disabled']          = 'Deaktiviert';
$_['text_default_order_status']     = 'Status Auftrag ausstehend:';
$_['text_ready_order_status']       = 'Status Fertig zur Lieferung:';
$_['text_canceled_order_status']    = 'Status Auftrag storniert:';
$_['text_shipped_order_status']     = 'Status Auftrag versendet:';
$_['text_last_cron_job_run']        = 'letzte Startzeit cron Job:';
$_['text_allowed_ips']              = 'erlaubte IP-Adressen';
$_['text_add']                      = 'Hinzufügen';
$_['text_upload_success']           = 'Die Datei wurde erfolgreich hochgeladen.';
$_['help_adjustment']               = 'fettgedruckte Felder um mindestens ein "-adj" Feld sind Pflichtfelder.';
$_['help_allowed_ips']              = 'Leer lassen, um Zugriffe von allen Computern zuzulassen.';

// Buttons
$_['button_cancel']                 = 'Abbrechen';
$_['button_save']                   = 'Speichern';

// Errors
$_['error_permissions']             = 'Sie haben keine Berechtigung, um dieses Modul zu bearbeiten!';
$_['error_empty_access_secret']     = 'Geheimschlüssel ist ein Pflichtfeld.';
$_['error_empty_access_key']        = 'Zugriffsschlüssel ist ein Pflichtfeld.';
$_['error_empty_merchant_id']       = 'Verkäufer-ID ist ein Pflichtfeld.';
$_['error_curreny']                 = 'In Ihrem Shop muss die Währung %s eingerichtet und aktiviert werden.';
$_['error_upload']                  = 'Hochladen fehlgeschlagen';

// Checkout button settings
$_['text_button_settings']          = 'Einstellungen Bestell-Button';
$_['text_colour']                   = 'Farbe:';
$_['text_orange']                   = 'Orange';
$_['text_tan']                      = 'Braun';
$_['text_white']                    = 'Weiß';
$_['text_light']                    = 'Hell';
$_['text_dark']                     = 'Dunkel';
$_['text_size']                     = 'Größe:';
$_['text_medium']                   = 'Mittel';
$_['text_large']                    = 'Gross';
$_['text_x_large']                  = 'Extra gross';
$_['text_background']               = 'Hintergrund:';
$_['text_download']                 = 'Vorlage <a href="%s">downloaden</a>';

// Messages
$_['text_success']                  = 'Das Modul Amazon Zahlungen wurde aktualisiert.';

// Order Info
$_['text_amazon_details']           = 'Amazon Details';
$_['text_amazon_order_id']          = 'Amazon Auftragsnummer:';
$_['text_upload']                   = 'Hochladen';
$_['text_upload_template']          = 'Die ausgefüllte Vorlage können Sie durch Anklicken des Button hochladen. Die Vorlage muss als Datei mit dem Trennzeichen Tab gespeichert sein.';
$_['tab_order_adjustment']          = 'Auftragsänderung';

//Table columns
$_['column_submission_id']          = 'Übermittlungs-ID';
$_['column_status']                 = 'Status';
$_['column_text']                   = 'Antwort';
$_['column_amazon_order_item_code'] = 'Amazon Artikelnummer Auftrag';
?>