<?php
defined('_JEXEC') or die ('Access Denied');
jimport('joomla.application.componenet.controller');

class MyCompController extends JController {

	function display() {
		JToolBarHelper::Title('My Component');
		echo JText::_('COM_MYCOMP_WELCOME');
	}

	function create() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/backend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/backend_create_task.js');
		JToolBarHelper::Title('Create New Task');
		echo '<div id="welcome">'.JText::_('COM_MYCOMP_TASK_CREATE').'</div>';
	}
	
	function listtask() {
		JToolBarHelper::Title('List All Tasks');
		echo JText::_('COM_MYCOMP_TASK_LISTTASK');
	}
	
	function help() {
		JToolBarHelper::Title('Help Documentation');
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is the Help Task <input type="text">';
	}
	
	function delete() {
		JToolBarHelper::Title('My Component');
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}
	

}