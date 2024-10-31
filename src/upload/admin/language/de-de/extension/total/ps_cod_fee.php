<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Nachnahmegebühr';
$_['heading_getting_started']    = 'Erste Schritte';
$_['heading_setup']              = 'Einrichtung des Nachnahmegebühr';
$_['heading_faq']                = 'Häufig gestellte Fragen';
$_['heading_contact']            = 'Support kontaktieren';

// Text
$_['text_extension']             = 'Erweiterungen';
$_['text_success']               = 'Erfolg: Sie haben die Nachnahmegebühr erfolgreich bearbeitet!';
$_['text_edit']                  = 'Nachnahmegebühr bearbeiten';
$_['text_getting_started']       = '<p><strong>Überblick:</strong> Die Erweiterung "Playful Sparkle - COD-Gebühr" für OpenCart 3 ermöglicht es Shop-Besitzern, eine konfigurierbare Gebühr zu Bestellungen hinzuzufügen, die die Zahlungsmethode Nachnahme (COD) verwenden. Diese Funktion hilft, die Bearbeitungsgebühren für Nachnahme zu kompensieren und bietet mehr Kontrolle über die Gesamtsumme der Bestellungen.</p><p><strong>Voraussetzungen:</strong> OpenCart 3.0+, PHP 7.2 oder höher.</p>';
$_['text_setup']                 = '<p>Um die Konfiguration vorzunehmen, geben Sie den gewünschten Gebührenbetrag (einschließlich Steuer) ein, wählen Sie die entsprechende Steuerklasse aus und aktivieren Sie die Erweiterung. Die Gebühr wird automatisch angewendet und an die Steuereinstellungen Ihres Shops angepasst, indem der Nettobetrag basierend auf dem festgelegten Steuersatz neu berechnet wird. Wenn beispielsweise die Gebühr auf 5 EUR festgelegt ist und der Steuersatz 20 % beträgt, wird die Gebühr an der Kasse auf 4,17 EUR (netto) neu berechnet.</p>';
$_['text_faq']                   = '<details><summary>Wird der eingegebene Gebührenbetrag mit oder ohne Steuer angegeben?</summary>Der Gebührenbetrag sollte inklusive Steuer eingegeben werden. Die Erweiterung berechnet den Nettobetrag automatisch basierend auf den Steuereinstellungen des Shops neu; zum Beispiel wird eine Gebühr von 5 EUR bei einem Steuersatz von 20 % an der Kasse auf 4,17 EUR (netto) angepasst.</details><details><summary>Kann ich unterschiedliche Gebühren für andere Zahlungsmethoden anwenden?</summary>Nein, diese Erweiterung gilt nur für Bestellungen, die die Zahlungsmethode Nachnahme (COD) verwenden.</details><details><summary>Wird die Gebühr separat in der Bestellübersicht angezeigt?</summary>Ja, die Gebühr wird während des Checkouts als separater Posten in der Bestellübersicht angezeigt, wobei Steueranpassungen gemäß den Steuereinstellungen des Shops vorgenommen werden.</details>';
$_['text_contact']               = '<p>Für weitere Unterstützung wenden Sie sich bitte an unser Support-Team:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentation:</strong> <a href="https://github.com/playfulsparkle/oc4_google_tag_manager" target="_blank" rel="noopener noreferrer">Benutzerdokumentation</a></li></ul>';

// Tab
$_['tab_general']                = 'Allgemein';
$_['tab_help_and_support']       = 'Hilfe &amp; Support';

// Entry
$_['entry_fee']                  = 'Gebühr (mit Steuer)';
$_['entry_tax_class']            = 'Steuerklasse';
$_['entry_status']               = 'Status';
$_['entry_sort_order']           = 'Sortierreihenfolge';

// Error
$_['error_total_ps_cod_fee_fee'] = 'Die Gebühr darf nicht leer, kleiner oder gleich null sein';

// Error
$_['error_permission']           = 'Warnung: Sie haben keine Berechtigung, die Nachnahmegebühr zu ändern!';
