<?php
	class Home extends db{
		public function Home($pages){
			$this->displayHome();
			return false;
		}
		
		private function displayHome(){
			$this->info = null;
			$this->render('home/displayHome');
		}
	}
?>