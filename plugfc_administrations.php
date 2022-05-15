<?php

/**
 * Plugin ExpPlug
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function plugfc_upgrade($nom_meta_base_version, $version_cible) {

    error_log("test error plugfc, origine : ". $nom_meta_base_version.", cible : ".$version_cible);
    $maj = array();
    include_spip('plugfc_fonctions');
    include_spip('inc/config');
    include_spip('action/editer_objet');



    $maj['create'] = array(
        array('ecrire_config', 'plugfc', array())
    );

   //$maj['create'] = array();

    include_spip('base/upgrade');
    maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

function plugfc_vider_tables($nom_meta_base_version){

    include_spip('plugfc_fonctions');
    uninstal_plugfc();

    effacer_config('plugfc');
    effacer_config($nom_meta_base_version);
}