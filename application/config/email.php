<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['smtp_host'] = 'mail.meigasoft.es';
$config['smtp_user'] = 'david@meigasoft.es';
$config['smtp_pass'] = '8775Ntd55';*/

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.meigasoft.es';
$config['smtp_port'] = 25;
$config['smtp_user'] = 'david@meigasoft.es';
$config['smtp_pass'] = '8775Ntd55';
$config['smtp_timeout'] = '7';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not