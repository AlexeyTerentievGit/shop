<?php
$_['lang_heading']                      = 'Artikelimport';
$_['lang_openbay']                      = 'OpenBay Pro';
$_['lang_page_title']                   = 'OpenBay Pro für eBay';
$_['lang_ebay']                         = 'eBay';
$_['lang_btn_return']                   = 'Zurück';
$_['lang_sync_import_line1']            = '<strong>Vorsicht!</strong> Damit importieren Sie alle eBay-Artikel und erstellt eine Kategoriestruktur in OpenCart. Bitte löschen Sie alle Kategorien und Produkte bevor Sie diese Funktion nutzen. <br />Die Struktur wird aus den eBay-Kategorien erstellt, nicht aus den Shop-Kategorien (wenn Sie einen eBay-Shop haben). Sie können die importierten Kategorien umbenennen, löschen und ändern ohne die eBay Produkte zu verändern.';
$_['lang_sync_import_line2']            = 'Diese Funktion benutzt häufig Aufrufe des API, einen Aufruf für jeden Artikel plus einen Aufruf pro 20 Artikel.';
$_['lang_sync_import_line3']            = 'Sie müssen sicherstellen, dass Ihr Server große Mengen an POST Daten akzeptiert. 1000 eBay-Artikel entsprechen ca. 40Mb Speicherplatz. Sie müssen also kalkulieren, wie viel Speicher Sie benötigen. Wenn die Funktion fehlschlägt, ist es wahrscheinlich, dass die Einstellungen zu gering eingestellt sind. Ihr PHP Speicherlimit sollte bei ca. 128Mb eingestellt sein.';
$_['lang_sync_server_size']             = 'Momentan aktiviert Ihr Server: ';
$_['lang_sync_memory_size']             = 'Ihr PHP Speicherlimit: ';
$_['lang_sync_item_description']        = 'Importiere Artikelbezeichnung<span class="help">Damit wird alles importiert<br />auch HTML, Zähler usw.</span>';
$_['lang_sync_notes_location']          = 'Importiere eBay Notizen zu Orten';
$_['lang_import_ebay_items']            = 'Importiere eBay-Artikel';
$_['lang_import']                       = 'Import';
$_['lang_error_validation']             = 'Sie müssen sich für Ihr API Token anmelden und das Modul aktivieren.';
$_['lang_ajax_import_confirm']          = 'Mit dieser Funktion werden alle eBay Produkte als neue Artikel importiert. Sind Sie sicher ? Der Import kann NICHT rückgängig gemacht werden ! Bitte fertigen Sie VORHER eine Sicherung an !';
$_['lang_ajax_import_notify']           = 'Ihre Importanforderung wurde zur Bearbeitung gesendet. Der Import benötigt ca. 1 Stunde pro 1000 Artikel.';
$_['lang_ajax_load_error']              = 'Die Verbindung zum Server ist fehlgeschlagen.';
$_['lang_maintenance_fail']             = 'Ihr Shop ist im Wartungsmodus. Ein Import ist nicht möglich!';
$_['lang_import_images_msg1']           = 'Bilder warten auf den Import aus eBay. Bitte aktualisieren Sie die Seite. Wenn die Anzahl nicht weniger wird, ';
$_['lang_import_images_msg2']           = 'dann bitte hier klicken';
$_['lang_import_images_msg3']           = 'und warten. Weitere Informationen warum dies passieren kann, finden Sie <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">hier</a>';
?>