
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<meta property="og:title" content="Anti | Download" />
<meta property="og:type" content="AntifansubID" />
<meta property="og:image" content="https://kireisubs.org/wp-content/uploads/2019/05/bcl.jpg" />
<meta property="og:description" content="bring in end the fansub" />
<style>
.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 50%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.bokong {
  margin: auto;
  text-align: center;
  width: 100%;
  padding: 1px;
}

.koceng {
  display: inline-block;
  text-align: left;
 }

 div.rounded {
   
    border: 3px dotted gray;
    margin: auto;
  width: 70%;
	color: #000000;
	font-weight: bold;
    padding: 1px;
    
	-moz-border-radius: 5px;
    -webkit-border-radius: 10px; }
    
    div.kotak {
	background-color: silver;
    margin: auto;
  width: 30%;
	color: #000000;
    padding: 1px;
    
	-moz-border-radius: 5px;
	-webkit-border-radius: 20px; }   
   
  body { 
  background: black url("inc/a.png") no-repeat fixed center; 
}

.intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 20%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}
</style>

<?php
require 'get.php';

print $form;

if(isset($_GET['id'])){
  $anti = $_GET['id'];
  $babi = "?p=";
  $bangsat = 'https://anitoki.com/';
  $kontol = $bangsat . $babi . $anti; 
  $curl = curl_init($kontol); 
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
  $page = curl_exec($curl); 
  if(curl_errno($curl))
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

print '<div class="memek"><br>';
//anime info    
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<p><span>', '<br>', $ambilkata);
    $ambilkata = str_replace('</span></p>', '', $ambilkata);
    $ambilkata = str_replace('Producers', '</p>Producers', $ambilkata);
    $ambilkata = str_replace('Genre', '<p hidden>', $ambilkata);
    return $ambilkata;
}

$regex = '/<div class="info">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )

    echo '<div class="kotak"><center>',wordFilter3($list[0]),'</div>'; 

//sinopsis
$regex = '/<div class="cover">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $listx) )

    echo '<center>',$listx[0],'</div>'; 


//link    
$regex = '/<div class="smokeddl">(.*?)<div class="anito-shortlink" id=(.*?)">/s';
if ( preg_match($regex, $page, $lost) )
	
    echo '<center><div class="rounded">',$lost[0],'</div></div><br>'; 
else 
    print "Not found";

}



?>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=2>

<b>&copy; Sin,</b>

<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/antifansub</font>
</font>
</div>   