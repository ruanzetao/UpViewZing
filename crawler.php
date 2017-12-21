<?php
require "simple_html_dom.php";

	function upViewZing(){
		$html=file_get_html("https://news.zing.vn/hanh-trinh-hoi-sinh-xe-porsche-901-1964-huyen-thoai-da-cu-nat-post805713.html");
		//echo $html;
		

	}

	function thisLoop(){
		for($i=0;$i<5;$i++){
			upViewZing();
			sleep(2);
			echo "This page will refresh!<br>";
			header("Refresh: 5; url=index.html");
			echo "done!";
		}
	}

	thisLoop();

?>