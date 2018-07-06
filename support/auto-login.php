<?php
/*********************************************************************
    login.php

    User access link recovery

    TODO: This is a temp. fix to allow for collaboration in lieu of real
    username and password coming in 1.8.2

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once('client.inc.php');
if(!defined('INCLUDE_DIR')) die('Fatal Error');
define('CLIENTINC_DIR',INCLUDE_DIR.'client/');
define('OSTCLIENTINC',TRUE); //make includes happy

require_once(INCLUDE_DIR.'class.client.php');
require_once(INCLUDE_DIR.'class.ticket.php');

if ($cfg->getClientRegistrationMode() == 'disabled'
        || isset($_POST['lticket']))
    $inc = 'accesslink.inc.php';
else
    $inc = 'login.inc.php';

$suggest_pwreset = false;

$user = UserAuthenticationBackend::process($_GET['email'],
    'Induco@123!', $errors);

if($user){
    Http::redirect($_SESSION['_client']['auth']['dest']
        ?: 'tickets.php');
} else {
    Http::redirect($_SESSION['_client']['auth']['dest']
        ?: 'tickets.php');
}


?>
