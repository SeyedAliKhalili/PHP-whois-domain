<?php
$uri = @$_SERVER['REQUEST_URI'];
if ($uri){
	$uri = strtolower($uri);
	$uri = rtrim($uri, '/');
	$uri = substr($uri, 0, strpos($uri, '?')?:strlen($uri));
	while (str_contains($uri, "//"))
		$uri = str_replace("//","/",$uri);
	$uri = explode("/", $uri);
}else{
	$cliMode = true;
	$uri = $argv;
}

$domainName = end($uri);

if(isset($domainName)){
	$TDL = @end(explode(".",$domainName));
	$server = $TDL.".whois-servers.net";
	
	if(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $domainName)){
		$server = "COM.whois-servers.net";
	}
	$port=43;
	
	if(@($whoisInfo = fsockopen($server,$port)) == true)
	{
		$output = "";
		fputs($whoisInfo,"$domainName\r\n");
		while(!feof($whoisInfo))
			$output .= fgets($whoisInfo,128);
		fclose($whoisInfo);
	}else{$error = 'This domain is wrong or not supported!';}
	
	if(@$cliMode && @$error){
		fwrite(STDERR, $error);
	}elseif(@$cliMode && @$output){
		fwrite(STDOUT, $output);
	}else{
		echo "<pre>" . (@$output?:$error) . "</pre>";
	}
	
}

## Whois server list ===  https://www.nirsoft.net/whois-servers.txt

?>

