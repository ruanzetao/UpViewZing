<?php
require "simple_html_dom.php";
//$count=0;

	function upViewZing(){
		$html=file_get_html("https://news.zing.vn/morgan-ev3-bat-dau-duoc-san-xuat-tu-2018-post805717.html");
		//echo $html;
		

	}

	function thisLoop(){
		for($i=0;$i<1000;$i++){
			upViewZing();
			//sleep(2);
			//echo "This page will refresh!<br>";
			//header("Refresh: 0; url=https://news.zing.vn/morgan-ev3-bat-dau-duoc-san-xuat-tu-2018-post805717.html");
			//$count=$count+1;
		}
	}

	thisLoop();
	//echo $count;

?>