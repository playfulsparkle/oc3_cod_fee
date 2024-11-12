<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Frais à la livraison';
$_['heading_getting_started']    = 'Démarrage';
$_['heading_setup']              = 'Configuration des frais à la livraison';
$_['heading_faq']                = 'FAQ';
$_['heading_contact']            = 'Contactez le support';

// Text
$_['text_extension']             = 'Extensions';
$_['text_success']               = 'Succès : Vous avez modifié les frais de paiement à la livraison !';
$_['text_edit']                  = 'Modifier les frais de paiement à la livraison';
$_['text_getting_started']       = '<p><strong>Aperçu :</strong> L\'extension Playful Sparkle - Frais à la livraison pour OpenCart 3.x permet aux propriétaires de boutique d\'ajouter un frais configurable aux commandes utilisant le mode de paiement à la livraison (COD). Cette fonctionnalité permet de compenser les frais de traitement du paiement à la livraison et offre un meilleur contrôle sur le montant total des commandes.</p><p><strong>Exigences :</strong> OpenCart 3.x+, PHP 7.3 ou supérieur.</p>';
$_['text_setup']                 = '<p>Pour configurer, saisissez le montant souhaité des frais (taxes comprises), sélectionnez la classe fiscale appropriée et activez l\'extension. Les frais seront automatiquement appliqués et ajustés en fonction des paramètres fiscaux de votre boutique, recalculant le montant net des frais en fonction du taux de taxe spécifié. Par exemple, si les frais sont définis à 5 EUR et que le taux de taxe est de 20 %, les frais seront recalculés à 4,17 EUR (net) lors de la validation de la commande.</p>';
$_['text_faq']                   = '<details><summary>Puis-je appliquer des frais différents pour d\'autres modes de paiement ?</summary>Non, cette extension ne s\'applique qu\'aux commandes utilisant le mode de paiement à la livraison (COD).</details><details><summary>Les frais seront-ils affichés séparément dans le récapitulatif de la commande ?</summary>Oui, les frais seront affichés en tant que ligne distincte dans le récapitulatif de la commande lors de la validation, avec les ajustements fiscaux effectués selon les paramètres fiscaux de la boutique.</details>';
$_['text_contact']               = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation utilisateur</a></li></ul>';

// Tab
$_['tab_general']                = 'Général';
$_['tab_help_and_support']       = 'Aide et support';

// Entry
$_['entry_fee']                  = 'Frais';
$_['entry_tax_class']            = 'Classe de taxe';
$_['entry_status']               = 'Statut';
$_['entry_sort_order']           = 'Ordre de tri';

// Error
$_['error_total_ps_cod_fee_fee'] = 'Les frais ne peuvent pas être vides, inférieurs ou égaux à zéro';

// Error
$_['error_permission']           = 'Avertissement : Vous n\'avez pas la permission de modifier les frais de paiement à la livraison !';
