<?php
// Text
$_['text_title']           = 'Klarna Account';
$_['text_pay_month']       = 'Klarna Rechnung - Zahle ab %s/Monat <span id="klarna_account_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Account({ el: \'klarna_account_toc_link\', eid: \'%s\',   country: \'%s\'});})</script>';
$_['text_information']     = 'Klarna Information';
$_['text_additional']      = 'Klarna benötigt weitere Informationen, um Ihren Auftrag zu verarbeiten.';
$_['text_wait']            = 'Bitte warten!';
$_['text_male']            = 'Männlich';
$_['text_female']          = 'Weiblich';
$_['text_year']            = 'Jahr';
$_['text_month']           = 'Monat';
$_['text_day']             = 'Tag';
$_['text_payment_option']  = 'Zahlungsoptionen';
$_['text_single_payment']  = 'Einmalzahlung';
$_['text_monthly_payment'] = '%s - %s pro Monat';
$_['text_comment']         = 'Klarna\'s Rechnungsnummer: %s\n%s/%s: %.4f';

// Entry
$_['entry_gender']         = 'Geschlecht:';
$_['entry_pno']            = 'Sozialversicherungsnummer:<br /><span class="help">Bitte geben Sie Ihre Sozialversicherungsnummer ein.</span>';
$_['entry_dob']            = 'Geburtsdatum:';
$_['entry_phone_no']       = 'Telefonnummer:<br /><span class="help">Bitte geben Sie Ihre Telefonnummer ein.</span>';
$_['entry_street']         = 'Strasse:<br /><span class="help">Die Lieferung kann nur an eine gemeldete Adresse erfolgen, wenn Sie das Klarna Zahlungsmodul benutzen.</span>';
$_['entry_house_no']       = 'Hausnummer:';
$_['entry_house_ext']      = 'Zusatz Hausnummer:';
$_['entry_company']        = 'Firmennummer:<br /><span class="help">Bitte geben Sie Ihre Firmennummer ein</span>';

// Error
$_['error_deu_terms']      = 'Sie müssen den Klarna\'s Datenschutzbedingungen zustimmen';
$_['error_address_match']  = 'Liefer- und Rechnungsadresse müssen übereinstimmen, , wenn Sie das Klarna Zahlungsmodul benutzen.</span>';
$_['error_network']        = 'Ein Fehler ist bei der Verbindung mit Klarna aufgetreten. Bitte versuchen Sie es später noch mal.';
?>