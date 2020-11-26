function get_season_and_ep_regex($url)

{
	
//http://103.237.37.181/server1/Movies/South_Indian/rest_of_all/OK%20Kanmani%20%282015%29/OK%20Kanmani%20%5B2015%5D%20Tamil%20720p%20HDRip%20x264%20AC3%205.1%201.4GB%20ESubs.mkv	

//http://103.56.6.6/Data/TV%20Series/2014/Youre.the%20Worst%202014/Youre.the.Worst.Season%201E04.mp4


// for S03E08 
$pattern_1 = '/s([0-9]{1,2})e([0-9]{1,3})/i'; 

//S03.E08        
$pattern_2 = '/s([0-9]{1,2})\.\e([0-9]{1,3})/i'; 


//11x12
$pattern_3 = '/([0-9]{1,2})x([0-9]{1,2})/i'; 


//Homem-Aranha/S01/Homem.Aranha.E32.Homens.Foguetes.avi
$pattern_4 = '/\/s([0-9]{1,2})\/(.*?)e([0-9]{1,3})/i'; 



//S06.?E01
$pattern_5 = '/s([0-9]{1,2}).?e([0-9]{1,3})/i'; 



//2014/Youre.the%20Worst%202014/Youre.the.Worst.Season%201E04.mp4
$pattern_5_1 = '/([0-9]{1,2}).?e([0-9]{1,3})/i'; 



//Season 1/Koreanlanguage/Another.Miss.Oh.E12.KOR.720p.HDTV.x265-WITH.mkv
$pattern_6 = '/\/Season ([0-9]{1,2})(.*?)e([0-9]{1,2})/i'; 

 
 
// /Serial/Youre.The.Worst/2/01.mp4
$pattern_6_1 = '/\/([0-9]{1,2})\/([0-9]{1,3})\.[mp4|mkv|avi]/i'; 
 
//Defendant Episode 16.MP4
$pattern_7 = '/episode\s?([0-9]{1,3})/i'; 



//Keijo!!!!!!!!_[06]_[HDTV-Rip_720p].mkv
$pattern_8 = '/\[([0-9]{1,2})\]/i'; 


//Pretty Rhythm Dear My Future Ep 15 [720p] .mkv
$pattern_9 = '/ep\s?([0-9]{1,3})/i'; 


//Serial/Mahabharat/267.mp4
$pattern_10 = '/\/([0-9]{1,3})\.[mp4|mkv|avi]/i'; 






$Url_Parts = parse_url($url);
$url = isset($Url_Parts['path']) ? $Url_Parts['path'] : '';
$url .= isset($Url_Parts['query']) ? "?".$Url_Parts['query'] : '';	
$path = urldecode($url);
switch ($path) {

case (preg_match($pattern_1,$path)==true):
	preg_match($pattern_1,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[2], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"1");
	break;
	
	
	
case (preg_match($pattern_2,$path)==true):
	preg_match($pattern_2,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[2], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"2");
	break;
	
	

case (preg_match($pattern_3,$path)==true):
	preg_match($pattern_3,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[2], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"3");
	break;
	
	
	
case (preg_match($pattern_4,$path)==true):
	preg_match($pattern_4,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[3], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"4");
	break;
	
	
	
case (preg_match($pattern_5,$path)==true):
	preg_match($pattern_5,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[2], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"5");
	break;
	
	
	
case (preg_match($pattern_5_1,$path)==true):
	preg_match($pattern_5_1,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[2], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"5");
	break;
	
	
	
case (preg_match($pattern_6,$path)==true):
	preg_match($pattern_6,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[3], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"6");
	break;
	
	
	
case (preg_match($pattern_6_1,$path)==true):
	preg_match($pattern_6_1,$path,$output);
	$season_no = ltrim($output[1], '0');
	$ep_no = ltrim($output[2], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"6_1");
	break;
	
	
	
case (preg_match($pattern_7,$path)==true):
	preg_match($pattern_7,$path,$output);
	$ep_no = ltrim($output[1], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"7");
	break;
	
	
	
case (preg_match($pattern_8,$path)==true):
	preg_match($pattern_8,$path,$output);
	$ep_no = ltrim($output[1], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"8");
	break;
	
	
	
case (preg_match($pattern_9,$path)==true):
	preg_match($pattern_9,$path,$output);
	$ep_no = ltrim($output[1], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"8");
	break;
	
	
	
case (preg_match($pattern_10,$path)==true):
	preg_match($pattern_10,$path,$output);
	$ep_no = ltrim($output[1], '0');
	$output = array("season_no"=>"$season_no","ep_no"=>"$ep_no","pattern"=>"10");
	break;


default:
   $output = array("season_no"=>"","ep_no"=>"","pattern"=>"");

}

return $output;


}

?>
