<?php
defined('_JEXEC') or die ('Access Denied');

jimport('joomla.application.component.controller');

class OpenChatController extends JController
{
	function chat() {
		$doc = JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_openchat/css/frontend.css');
		?>
			<div id="openchat">
				<div id="chat-msg-area">
					<ul id="chat-msg">
						<li>
							<span class="user">admin:</span>
							<span class="msg">Hi</span>
						</li>
						<li>
							<span class="user">admin:</span>
							<span class="msg">Test 1</span>
						</li>
						<li>
							<span class="user">admin:</span>
							<span class="msg">Test 2</span>
						</li>
					</ul>
				</div>
				<div id="chat-toolbar">
					<input type="text" name="msg" id="msg">
					<input type="button" class="btn" name="chat_btn" id="chat_btn" value="SEND" />
				</div>
			</div>
		<?php
	}
}