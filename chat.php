<?php
/**
 * Created by PhpStorm.
 * User: renaldo
 * Date: 18-01-2018
 * Time: 17:26
 */
require 'vendor\autoload.php';
use PubNub\PubNub;

$initialConfig=new \PubNub\PNConfiguration();
$initialConfig->setPublishKey("pub-c-8a0fcc87-a53b-4b0b-a35c-24450672545c");
$initialConfig->setSubscribeKey("sub-c-8cc1876a-fc6b-11e7-9db3-6a45f64fc571");
$initialConfig->setSecretKey("sec-c-NmQ5ZWQ3NDEtMWZhNy00NDIzLWFjMWMtNjA2ZDEyODk4YTkx");

$pubNub=new PubNub($initialConfig);
