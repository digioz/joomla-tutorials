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
		
		// Create database object
		$db=JFactory::getDBO();
		// Set your query
		// Short Hand - $db->setQuery("SELECT * FROM #__users")->query();
		$query = "INSERT INTO `#__mycomp_posts`(`title`,`body`) VALUES ('First Post','This is the post body')";
		$db->setQuery($query);
		// Execute Your Query
		$db->query();

		echo '<div id="welcome">'.JText::_('COM_MYCOMP_TASK_CREATE').'</div>';
	}
	
	function listtask() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolBarHelper::Title('List All Tasks','listtask.png');
		echo JText::_('COM_MYCOMP_TASK_LISTTASK');
	}
	
	function updatepost(){
		$id = JRequest::getInt('id',0);
		
		if ($id > 0){
			$db=JFactory::getDBO();
			$query="UPDATE `#__mycomp_posts` SET `title`='Changed By User' WHERE `id`=$id";
			$db->setQuery($query);
			$db->query();
		}
		else
		{
			echo "Pass ID for Update";
		}
	}
	
	function listposts(){
		$id = JRequest::getInt('id',0); // In case someone asks for a specific post
		// http://docs.joomla.org/Inserting,_Updating_and_Removing_data_using_JDatabase
		$db=JFactory::getDBO();
		
		if ($id > 0)
		{
			$query="SELECT * FROM `#__mycomp_posts` WHERE `id`=$id";
			$db->setQuery($query);
			$row=$db->loadObject(); // Use loadObject() if there is only 1 record
			
			echo '<h3>'.$row->id.'</h3>';
			echo '<h1>'.$row->title.'</h1>';
			echo '<p>'.$row->body.'</p>';
			echo '<hr>';
		}
		else
		{
			$query="SELECT * FROM `#__mycomp_posts`";
			$db->setQuery($query);
			$rows=$db->loadObjectList(); // Use loadObject() if there is only 1 record
			
			for($i=0; $i<count($rows); $i++)
			{
				$row = $rows[$i];
				
				$id = $row->id;
				$title = $row->title;
				$body = $row->body;
				
				echo '<h3>'.$id.'</h3>';
				echo '<h1>'.$title.'</h1>';
				echo '<p>'.$body.'</p>';
				echo '<hr>';
			}
		}
		
		echo '<pre>';
		print_r($rows);
		echo '</pre>';
	}
	
	function help() {
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolBarHelper::Title('Help Documentation','helptask.png');
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is the Help Task <input type="text">';
	}
	
	function delete() {
		echo JText::_('COM_MYCOMP_TASK_DELETE');
		$id=JRequest::getInt('id',0);
		if ($id > 0)
		{
			$db=JFactory::getDBO();
			$query="DELETE FROM `#__mycomp_posts` WHERE `id`=$id LIMIT 1";
			$db->setQuery($query);
			$db->query();
		}
		else
		{
			echo "Pass ID for Delete";
		}
	}
}