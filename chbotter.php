<?php
// Script Created By Arman Khan// to use this script just attach it with the simple bot script and use the iphone on that script it will get tokens from aden
$directory=opendir('aden');
$file_array=array();
while($file=readdir($directory))
{
	if($file!=='.' && $file!=='..')
	{
		$file_array[]=$file;
	}
}
for($i=0;$i<sizeof($file_array);$i++)
{
	$access_token= file_get_contents('aden/'.$file_array[$i]);
	$token=explode('*',$access_token);
	    $limitnf=20; 
        $puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token[0].'&offset=0&limit='.$limitnf.''),true);
		echo $puaru[data];
		echo "<br/>";
        for($d=1;$d<=count($puaru[data]);$d++){
        set_time_limit(0);
        $camxuc= array('LOVE', 'GRATEFUL');
        $mess=$camxuc[rand(0,count($camxuc)-1)];
        echo puaru('https://graph.facebook.com/'.$puaru[data][$d-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token[0].'');       
}	    
}
echo "Creat By Arman Khan :) facebook.com/X3.H4NDSOM3";
function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
// Created With a lot OF <3 and Coffee ;) ( Regards : Arman Khan & Zainu Kameena ) 
?>