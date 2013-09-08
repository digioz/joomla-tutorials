<?php

// For debugging errors
//error_reporting(E_ALL);
//init_set('display_errors', 1);

defined('_JEXEC') or die ("Access Denied");
jimport('joomla.application.component.controller');

// Create controller instance
$controller=JController::getInstance('MyComp');

// Execute Task
$controller->execute(JRequest::getCmd('task'));

// If redirect set
$controller->redirect();
