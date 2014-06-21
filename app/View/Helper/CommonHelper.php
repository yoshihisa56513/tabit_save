<?php 
App::uses('AppHelper', 'View/Helper');
class CommonHelper extends AppHelper {
	
	function tmb($embedUrl) {
		$returnValue = "";
		$pattern = '/www.youtube.com\/embed\/(.{11})/';
		preg_match($pattern, $embedUrl, $returnValue);

		
		print('<img alt="サムネイル" data-thumb="//i1.ytimg.com/vi/' . $returnValue[1] . '/mqdefault.jpg" src="//i1.ytimg.com/vi/' . $returnValue[1] . '/mqdefault.jpg" width="175" data-group-key="thumb-group-0">');
		


}


	

}

?>