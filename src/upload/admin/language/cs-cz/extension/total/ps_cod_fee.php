<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Poplatek za platbu na dobírku';
$_['heading_getting_started']    = 'Začínáme';
$_['heading_setup']              = 'Nastavení poplatek za platbu na dobírku';
$_['heading_faq']                = 'Často kladené otázky';
$_['heading_contact']            = 'Kontaktujte podporu';

// Text
$_['text_extension']             = 'Rozšíření';
$_['text_success']               = 'Úspěch: Upravil(a) jste celkový poplatek za platbu na dobírku!';
$_['text_edit']                  = 'Upravit celkový poplatek za platbu na dobírku';
$_['text_getting_started']       = '<p><strong>Přehled:</strong> Rozšíření Playful Sparkle - Poplatek za dobírku pro OpenCart 3.x umožňuje majitelům obchodů přidat konfigurovatelný poplatek k objednávkám využívajícím metodu platby na dobírku (COD). Tato funkce pomáhá kompenzovat poplatky za zpracování dobírky a poskytuje větší kontrolu nad celkovými náklady na objednávku.</p><p><strong>Požadavky:</strong> OpenCart 3.x+, PHP 7.2 nebo vyšší.</p>';
$_['text_setup']                 = '<p>Pro konfiguraci zadejte požadovanou částku poplatku (včetně daně), vyberte odpovídající daňovou třídu a povolte rozšíření. Poplatek se automaticky použije a přizpůsobí nastavením daně vašeho obchodu, přičemž se znovu vypočítá čistý poplatek na základě stanovené daňové sazby. Například pokud je poplatek nastaven na 5 EUR a daňová sazba je 20 %, poplatek se při pokladně přepočítá na 4,17 EUR (čistého).</p>';
$_['text_faq']                   = '<details><summary>Je částka poplatku uvedena včetně daně nebo bez daně?</summary>Částka poplatku by měla být uvedena včetně daně. Rozšíření automaticky přepočítá čistou částku na základě daňových nastavení obchodu; například poplatek 5 EUR s daňovou sazbou 20 % se při pokladně přizpůsobí na 4,17 EUR (čistého).</details><details><summary>Mohu aplikovat různé poplatky pro jiné platební metody?</summary>Ne, toto rozšíření se aplikuje pouze na objednávky využívající metodu platby na dobírku (COD).</details><details><summary>Zobrazí se poplatek samostatně v přehledu objednávky?</summary>Ano, poplatek se zobrazí jako samostatná položka v přehledu objednávky během pokladny, přičemž se úpravy daně provedou podle daňových nastavení obchodu.</details>';
$_['text_contact']               = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';

// Tab
$_['tab_general']                = 'Obecné';
$_['tab_help_and_support']       = 'Nápověda a podpora';

// Entry
$_['entry_fee']                  = 'Poplatek (s daní)';
$_['entry_tax_class']            = 'Daňová třída';
$_['entry_status']               = 'Stav';
$_['entry_sort_order']           = 'Pořadí třídění';

// Error
$_['error_total_ps_cod_fee_fee'] = 'Poplatek nesmí být prázdný, menší nebo roven nule';

// Error
$_['error_permission']           = 'Upozornění: Nemáte oprávnění upravovat celkový poplatek za platbu na dobírku!';
