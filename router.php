<?php 
class Generate {
	public $menu = array(
		1=>array(
			'file_name'=>'home',
			'menu_name'=>'Strona główna',
		),
		2=>array(
			'file_name'=>'us',
			'menu_name'=>'Amerykański program kosmiczny',
		
		),
		3=>array(
			'file_name'=>'rus',
			'menu_name'=>'Rosyjski program kosmiczny',
		
		),
	);
	
	private function _getFile() {
		empty($_REQUEST['p']) ? $file="home.html" : $file=$_REQUEST['p'].".html";
		return $file;
	}
	
	public function loadPage() {
		include('pages'.DIRECTORY_SEPARATOR.$this->_getFile());
	}
	
	public function generateMobileHeaderMenu() {
		if(!empty($_REQUEST['p'])){
			$html  ="";
			$html .="<nav id=\"menu-rwd\">\n";
			$html .="	<a class=\"back\" id=\"back\" href=\"#\"><i class=\"fa fa-bars\" style=\"font-size:24px\"></i></a>\n";
			$html .="		<ul>\n";
				foreach($this->menu as $val){
					if($val['file_name']==$_REQUEST['p']){
						$html .="<li class=\"navigation-rwd\"><a href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}else{
						$html .="<li class=\"navigation-rwd\"><a class=\"active\" href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}
				}
			$html .="	</ul>\n";
			$html .="</nav>\n";
			print $html;
		}else{
			$html  ="";
			$html .="<nav id=\"menu-rwd\">\n";
			$html .="	<a class=\"back\" id=\"back\" href=\"#\"><i class=\"fa fa-bars\" style=\"font-size:24px\"></i></a>\n";
			$html .="		<ul>\n";
				foreach($this->menu as $val){
					if($val['file_name']=="home"){
						$html .="<li class=\"navigation-rwd\"><a href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}else{
						$html .="<li class=\"navigation-rwd\"><a class=\"active\" href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}
				}
			$html .="	</ul>\n";
			$html .="</nav>\n";
			print $html;
		}
	}
	
	public function generateDesktopHeaderMenu() {
		if(!empty($_REQUEST['p'])){
			$html  ="";
			$html .="	<ul>\n";
				foreach($this->menu as $val){
					if($val['file_name']==$_REQUEST['p']){
						$html .="<li><a href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}else{
						$html .="<li><a class=\"non-active\" href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}
				}
			$html .="	</ul>\n";
			print $html;
		}else{
			$html  ="";
			$html .="	<ul>\n";
				foreach($this->menu as $val){
					if($val['file_name']=="home"){
						$html .="<li><a href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}else{
						$html .="<li><a class=\"non-active\" href=\"?p=".$val['file_name']."\">".$val['menu_name']."</li></a>\n";
					}
				}
			$html .="	</ul>\n";
			print $html;
		}
	}
	
} 

?>