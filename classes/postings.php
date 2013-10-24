<?php
	class Postings extends db{
		public function Postings($pages){
			try{
				if(!isset($pages[1])){
					throw new Exception('Page is not enabled');
				}
				if(!method_exists($this,$pages[1])){
					throw new Exception('Page does not Exists');
				}
				$this->{$pages[1]}($pages);
			} catch(Exception $e) {
				echo $e->getMessage();
			}
			return false;
		}
		
		public function getField($pages){
			$field = '';
			switch($pages[1]){
				case 'addTextField':
					$field = '<div><input type="text" name="text_'.$pages[2].'"/></div>';
					break;
				case 'addTextAreaField':
					$field = '<div><input type="text" name="textarea_'.$pages[2].'"/></div>';
					break;
				case 'addDropdownField':
					$field = '<div><input type="text" name="dropdown_'.$pages[2].'"</div>';
					break;
			}
			echo $field;
		}
		
		public function createPosting($pages){
			if($_POST && sizeof($_POST) > 0){
				$errors = $this->validate($_POST['postings']);
				$values = $errors['values'];
				if($errors['total'] < 0){
					$this->save('posting_layout',$values);
					header('LOCATION: ?page=postings/showAll');
				} else {
					$this->info['postings'] = $values;
				}
			} else {
				$this->info = null;
			}
			$this->render('postings/create');
		}
		
		public function publishPosting($pages){
			if()
			$this->render('postings/publish');
			return false;
		}
		
		function showAll(){
			return true;
		}
	}
?>