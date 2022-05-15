<?php
function autoriser_plugfc_menu_dist($faire, $type, $id, $qui, $opt) {
    return ($qui['webmestre'] == 'oui');
}
function autoriser_plugfc_configurer_dist($faire, $type, $id, $qui, $opt) {
    return ($qui['webmestre'] == 'oui');
}