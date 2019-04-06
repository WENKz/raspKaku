<?php
/**
 * This file is part of the GQ-Consulting package.
 * (c) GQ-Consulting <contact@gq-consulting.fr>
 */


class electricOutletCommand 
{

    public $nbPrise = 3;
   

    public function exeCommand($command ="allume",$arg = 1){
        if(method_exists($this,$command))
            call_user_func(array($this,$command),$arg);
    }


	private function allume($prise){
		$result = shell_exec('/bin/bash /home/pi/prise/command.sh A '.$prise.' on 1');
	}
	
	private function eteind($prise){
		$result = shell_exec('/bin/bash /home/pi/prise/command.sh A '.$prise.' off 1');
	}	
	
	private function allume_all($prise){
		for($i = 1; $i <= 3; $i++){
			$result = shell_exec('/bin/bash /home/pi/prise/command.sh A '.$i.' on 1');
		}
	}
	
	private function eteind_all($prise){
		for($i = 1; $i <= 3; $i++){
			$result = shell_exec('/bin/bash /home/pi/prise/command.sh A '.$i.' off 1');
		}
	}
}


if(!isset($_GET['pass']))
    die;

if($_GET['pass'] == '1933UDJg38@$SJ'){

    $cmd = new electricOutletCommand();

    if(key_exists('allume',$_GET)){
        $cmd->exeCommand('allume',$_GET['prise']);
    }

    if(key_exists('eteind',$_GET)){
        $cmd->exeCommand('eteind',$_GET['prise']);
    }

    if(key_exists('allume_all',$_GET)){
        $cmd->exeCommand('allume_all');
    }

    if(key_exists('eteind_all',$_GET)){
        $cmd->exeCommand('eteind_all');
    }
}else{
    die();
}
