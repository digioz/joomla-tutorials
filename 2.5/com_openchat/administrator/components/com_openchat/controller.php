<?php
defined('_JEXEC') or die ('Access Denied');

jimport('joomla.application.component.controller');

class OpenChatController extends JController
{
	function chat_history()
	{
		$doc = JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_openchat/css/openchat.css');
		JToolBarHelper::Title('Chat History', 'chathistory.png');
		echo "Welcome to the chat history page";
	}
	
	function blocked_users()
	{
		$doc = JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_openchat/css/openchat.css');
		JToolBarHelper::Title('Blocked Users', 'blockusers.png');
		echo "Welcome to the blocked users page";
	}
}