<?php
// Text
$_['text_title']          = 'Klarna Rechnung';
$_['text_fee']            = 'Klarna Rechnung - Zahlbar innerhalb von 14 Tagen <span id="klarna_invoice_toc_link"></span> (+%s)<script text="javascript\">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\', charge: %s});})</script>';
$_['text_no_fee']         = 'Klarna Rechnung - Zahlbar innerhalb von 14 Tagen <span id="klarna_invoice_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\'});})</script>';
$_['text_additional']     = 'Klarna benötigt weitere Informationen, um Ihren Auftrag zu verarbeiten.';
$_['text_wait']           = 'Bitte warten!';
$_['text_male']           = 'Männlich';
$_['text_female']         = 'Weiblich';
$_['text_year']           = 'Jahr';
$_['text_month']          = 'Monat';
$_['text_day']            = 'Tag';
$_['text_comment']        = 'Klarna\'s Rechnungsnummer: %s\n%s/%s: %.4f';

// Entry
$_['entry_gender']        = 'Geschlecht:';
$_['entry_pno']           = 'Sozialversicherungsnummer:<br /><span class="help">Bitte geben Sie Ihre Sozialversicherungsnummer ein.</span>';
$_['entry_dob']           = 'Geburtsdatum:';
$_['entry_phone_no']      = 'Telefonnummer:<br /><span class="help">Bitte geben Sie Ihre Telefonnummer ein.</span>';
$_['entry_street']        = 'Strasse:<br /><span class="help">Die Lieferung kann nur an eine gemeldete Adresse erfolgen, wenn Sie das Klarna Zahlungsmodul benutzen.</span>';
$_['entry_house_no']      = 'Hausnummer:';
$_['entry_house_ext']     = 'Zusatz Hausnummer:';
$_['entry_company']       = 'Firmennummer:<br /><span class="help">Bitte geben Sie Ihre Firmennummer ein</span>';

// Error
$_['error_deu_terms']     = 'Sie müssen den Klarna\'s Datenschutzbedingungen zustimmen';
$_['error_address_match'] = 'Liefer- und Rechnungsadresse müssen übereinstimmen, , wenn Sie das Klarna Zahlungsmodul benutzen.</span>';
$_['error_network']       = 'Ein Fehler ist bei der Verbindung mit Klarna aufgetreten. Bitte versuchen Sie es später noch mal.';
?>