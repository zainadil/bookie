<?php

class AddNewExpense extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$fb_config = array('appId' => '570515386348687', 'secret' => '844705f10757e09b10bc16ab1a3ad65e');
		$this -> load -> library('facebook', $fb_config);
		$user = $this -> facebook -> getUser();

		if ($user) {
			try {
				$data['user_profile'] = $this -> facebook -> api('/me');
				$friends = $this -> facebook -> api('/me/friends');
				$friends = $friends['data'];
				$friendsString = sizeof($friends);
				foreach($friends as $friend)
					$friendsString = $friendsString . ":" . $friend['id'] .":" . $friend['name']; 
				$data['user_friends'] = $friendsString;
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}

		if ($user) {
			$data['logout_url'] = $this -> facebook -> getLogoutUrl();
			$this -> load -> view('addNewExpensePage', $data);
			
		} else {
			redirect('login');
		}
	}
	
}
