<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function formulaires_configurer_plugfc_entete_saisies_dist(){
    $saisies = array(
        'options' => array(
            'inserer_debut' => '<h3 class"titrem">'._T('plugfc:entete').'</h3>'
        ),
        array(
            'saisie' => 'explication',
            'options' => array(
                'nom' => 'explic_entete',
                'texte' => '<:plugfc:doc_entete:>',
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'identificationetablissement',
                'label' => '<:plugfc:entete_identification:>',
            ),
            'verifier' => array(
                'type' => 'taille',
                'options' => array(
                    'min' => 0,
                    'max' => 100
                )
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'villeetablissement',
                'label' => '<:plugfc:entete_ville:>',
            ),
            'verifier' => array(
                'type' => 'taille',
                'options' => array(
                    'min' => 0,
                    'max' => 100
                )
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'telenteteetablissement',
                'label' => '<:plugfc:entete_tel:>',
                'explication' => '<:plugfc:entete_desc_tel:>'
            ),
            'verifier' => array(
                'type' => 'telephone',
            )
        ),
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'mailetablissement',
                'label' => '<:plugfc:entete_mail:>',
            ),
            'verifier' => array(
                'type' => 'email',
                'options' => array(
                    'mode' => 'normal'
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