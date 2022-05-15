<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function formulaires_configurer_plugfc_contacts_saisies_dist(){
    $saisies = array(
        'options' => array(
            'inserer_debut' => '<h3 class"titrem">'._T('plugfc:contacts').'</h3>'
        ),
        array(
            'saisie' => 'fieldset',
            'options' => array(
                'nom' => 'fieldsetmap',
                'label' => '<:plugfc:map:>',
                'onglet' => 'oui',
            ),
            'saisies' => array(
                array(
                    'saisie' => 'explication',
                    'options' => array(
                        'nom' => 'explic_map',
                        'texte' => '<:plugfc:doc_map:>',
                    )
                ),
                array(
                    'saisie' => 'radio',
                    'options' => array(
                        'nom' => 'type_map',
                        'label' => '<:plugfc:typemap:>',
                        'defaut' => 'MapIntegre',
                        'data' => array(
                            'MapIntegre' => '<:plugfc:mapintegre:>',
                            'MapCoord' => '<:plugfc:mapcoord:>'
                        )
                    )
                ),
                array(
                    'saisie' => 'explication',
                    'options' => array(
                        'nom' => 'explic_infomap',
                        'texte' => '<:plugfc:infomap:>'
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'embedmap',
                        'label' => '<:plugfc:embedmap:>',
                        'explication' => '<:plugfc:doc_embedmap:>',
                        'afficher_si' => '@type_map@=="MapIntegre"',
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coordmaplongitude',
                        'label' => '<:plugfc:coordmaplongitude:>',
                        'explication' => '<:plugfc:doc_maplongitude:>',
                        'afficher_si' => '@type_map@=="MapCoord"',
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coordmaplattitude',
                        'label' => '<:plugfc:coordmaplattitude:>',
                        'explication' => '<:plugfc:doc_maplattitude:>',
                        'afficher_si' => '@type_map@=="MapCoord"',
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coordmaptaille',
                        'label' => '<:plugfc:coordmaptaille:>',
                        'explication' => '<:plugfc:doc_maptaille:>',
                        'afficher_si' => '@type_map@=="MapCoord"',
                    )
                )
            )
        ),
        array(
            'saisie' => 'fieldset',
            'options' => array(
                'nom' => 'fieldsetcoord',
                'label' => '<:plugfc:coord:>',
                'onglet' => 'oui',
            ),
            'saisies' => array(
                array(
                    'saisie' => 'explication',
                    'options' => array(
                        'nom' => 'explic_coord',
                        'texte' => '<:plugfc:doc_coord:>',
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coord_nom',
                        'label' => '<:plugfc:coord_nom:>'
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coord_tel',
                        'label' => '<:plugfc:coord_tel:>'
                    ),
                    'verifier' => array(
                        'type' => 'telephone',
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coord_adresse',
                        'label' => '<:plugfc:coord_adresse:>'
                    ),
                    'verifier' => array(
                        'type' => 'telephone',
                    )
                ),
                array(
                    'saisie' => 'input',
                    'options' => array(
                        'nom' => 'coord_horaires',
                        'label' => '<:plugfc:coord_horaires:>'
                    )
                )
            )
        ),
        array(
            'saisie' => 'hidden',
            'options' => array(
                'nom' => '_meta_casier',
                'defaut' => 'plugfc/config',
            )
        ),
    );
    return $saisies;
}