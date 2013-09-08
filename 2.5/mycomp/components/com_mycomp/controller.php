<?php

defined('_JEXEC') or die ('Access Denied');
jimport('joomla.application.component.controller');

class MyCompController extends JController {

	function display() {
		echo JText::_('COM_MYCOMP_WELCOME');
	}

	function create(){
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/frontend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/frontend_create_task.js');
		echo '<div id="welcome">Welcome to Create</div>';
	}
	
	function delete(){
		$app = JFactory::getApplication(); // Don't use a template
		$id = JRequest::getInt('id');
		echo "You want to delete $id"; 
		$app->close();
	}
}