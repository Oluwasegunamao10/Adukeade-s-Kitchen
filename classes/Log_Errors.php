<?php
Class Log_Errors{
	//public function __construct() {
		
	//}
	public static function Log_error_msg($code, $message,$file,$line){
		//Write error to error log file
		// log what we know
		$msg = "------------------------------------------------\n";
		$msg .= 'Error occured in: ' . $file . ' at line: ' . $line . ', error code '  . "{". $code . "}" . ', error msg: ' . "{" . $message . "}" . "\n";
		//$msg .= $trace . "\n";
		error_log($msg);
		//insert error_msg, date, time into errors table
		//GET last insert ID from errors table and assign to variable errorID
		//insert username and errorID into users-errors table
	}
	
	public static function Log_DBerror_msg($message, $err_code,$file,$line){
		//Write error to error log file
		// log what we know
		$msg = "------------------------------------------------\n";
		$msg .= 'Error occured in: ' . $file . ' at line: ' . $line . ', error code '  . "{". $err_code . "}" . ', error msg: ' . "{" . $message . "}" . "\n";
		error_log($msg);
		//insert error_msg, date, time into errors table
		//GET last insert ID from errors table and assign to variable errorID
		//insert username and errorID into users-errors table
	}
}
?>