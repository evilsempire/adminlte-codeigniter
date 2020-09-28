<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * set flash data for showing alerts
 * @param type $type
 * @param type $message
 */
function setAlertMessage($type = "primary", $message = "", $dismissible = FALSE)
{
    $_CI = &get_instance();
    $alertMessage = "";

    $alertMessage = "<div class='col-md-12'>";

    $alertMessage .= "<div class='alert alert-{$type}' role='alert'>";

    //use dismissible alert box
    if ($dismissible) {
        $alertMessage .= "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><i class='ti-close'></i></button>";
    }

    $alertMessage .= "{$message}</div>";
    $alertMessage .= "</div>";

    $_CI->session->set_flashdata("alert", $alertMessage);
}

function get_site_acronym()
{
    $words = explode(" ", SITE_NAME);
    $acronym = "";

    foreach ($words as $w) {
        $acronym .= $w[0];
    }

    return $acronym;
}
