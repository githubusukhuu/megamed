<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('admin', 'prod', false);
#$configuration = ProjectConfiguration::getApplicationConfiguration('admin', 'dev', true);
sfContext::createInstance($configuration)->dispatch();
