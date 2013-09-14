<?php

defined('_JEXEC') or die ('Access Denied');

jimport('joomla.application.component.controller');

$controller = JController::getInstance('OpenChat');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();