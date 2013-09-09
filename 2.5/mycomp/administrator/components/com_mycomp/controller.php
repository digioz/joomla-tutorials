<?php
defined('_JEXEC') or die ('Access Denied');
jimport('joomla.application.componenet.controller');

class MyCompController extends JController {

	function display() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolBarHelper::Title('My Component','mycomp.png');
		echo JText::_('COM_MYCOMP_WELCOME');
	}

	function create() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/backend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/backend_create_task.js');
		JToolBarHelper::Title('Create New Task','createtask.png');
		echo '<div id="welcome">'.JText::_('COM_MYCOMP_TASK_CREATE').'</div>';
	}
	
	function listtask() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolBarHelper::Title('List All Tasks','listtask.png');
		echo JText::_('COM_MYCOMP_TASK_LISTTASK');
	}
	
	function help() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolBarHelper::Title('Help Documentation','helptask.png');
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is the Help Task <input type="text">';
	}
	
	function delete() {
		JToolBarHelper::Title('My Component');
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}
	

}