<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - COD fee';
$_['heading_getting_started']    = 'Introduzione';
$_['heading_setup']              = 'Configurazione della commissione COD';
$_['heading_faq']                = 'FAQ';
$_['heading_contact']            = 'Contatta il supporto';

// Text
$_['text_extension']             = 'Estensioni';
$_['text_success']               = 'Successo: Hai modificato la commissione per il contrassegno!';
$_['text_edit']                  = 'Modifica la commissione per il contrassegno';
$_['text_getting_started']       = '<p><strong>Panoramica:</strong> La commissione COD di Playful Sparkle per OpenCart 3.x permette ai proprietari di negozi di aggiungere una commissione configurabile agli ordini che utilizzano il metodo di pagamento Contrassegno (COD). Questa funzionalità aiuta a compensare i costi di gestione COD, offrendo maggiore controllo sui totali degli ordini.</p><p><strong>Requisiti:</strong> OpenCart 3.x+, PHP 7.3 o superiore.</p>';
$_['text_setup']                 = '<p>Per configurare, inserire l’importo della commissione desiderato (comprensivo di IVA), selezionare la classe fiscale appropriata e attivare l’estensione. La commissione verrà applicata automaticamente e si adatterà alle impostazioni fiscali del negozio, ricalcolando la commissione netta in base all’aliquota fiscale specificata. Ad esempio, se la commissione è impostata a 5 EUR e l’aliquota è del 20%, la commissione sarà ricalcolata a 4,17 EUR (netto) al momento del pagamento.</p>';
$_['text_faq']                   = '<details><summary>L’importo della commissione inserito è con o senza IVA?</summary>L’importo della commissione deve essere inserito comprensivo di IVA. L’estensione ricalcolerà automaticamente l’importo netto in base alle impostazioni fiscali del negozio; ad esempio, una commissione di 5 EUR con un’aliquota del 20% sarà adeguata a 4,17 EUR (netto) al pagamento.</details><details><summary>Posso applicare commissioni diverse per altri metodi di pagamento?</summary>No, questa estensione si applica solo agli ordini con il metodo di pagamento Contrassegno (COD).</details><details><summary>La commissione verrà visualizzata separatamente nel riepilogo dell’ordine?</summary>Sì, la commissione sarà visualizzata come voce separata nel riepilogo dell’ordine durante il checkout, con adeguamenti fiscali effettuati secondo le impostazioni fiscali del negozio.</details>';
$_['text_contact']               = '<p>Per ulteriore assistenza, si prega di contattare il nostro team di supporto:</p><ul><li><strong>Contatto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentazione:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentazione Utente</a></li></ul>';

// Tab
$_['tab_general']                = 'Generale';
$_['tab_help_and_support']       = 'Assistenza &amp; Supporto';

// Entry
$_['entry_fee']                  = 'Commissione (con IVA)';
$_['entry_tax_class']            = 'Classe Fiscale';
$_['entry_status']               = 'Stato';
$_['entry_sort_order']           = 'Ordine di Visualizzazione';

// Error
$_['error_total_ps_cod_fee_fee'] = 'La commissione non può essere vuota, minore o uguale a zero';

// Error
$_['error_permission']           = 'Avviso: Non hai i permessi per modificare la commissione per il contrassegno!';
