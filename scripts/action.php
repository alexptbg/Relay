<?php
if(!empty($_GET)) {
	if($_GET['in'] ==1){
		$relay = $_GET['relay'];
		$status = $_GET['status'];
		if($relay == "1") { $val=shell_exec("gpio write 0 ".$status); }
		elseif($relay == "2") { $val=shell_exec("gpio write 2 ".$status); }
		elseif($relay == "3") { $val=shell_exec("gpio write 3 ".$status); }
		elseif($relay == "4") { $val=shell_exec("gpio write 21 ".$status); }
		elseif($relay == "5") { $val=shell_exec("gpio write 22 ".$status); }
		elseif($relay == "6") { $val=shell_exec("gpio write 23 ".$status); }
		elseif($relay == "7") { $val=shell_exec("gpio write 24 ".$status); }
		elseif($relay == "8") { $val=shell_exec("gpio write 25 ".$status); }
        else { $val = "error relay number"; }
		$res = "SEND: relay ".$relay." status ".$status." - ".$val;
	} else {
		$res = "stop";
	}
} else {
	$res = "error";
}
echo json_encode($res);
?>
