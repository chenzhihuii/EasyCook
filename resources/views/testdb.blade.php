<?php

use Illuminate\Support\Facades\DB;
	
	if(DB::connection()->getPdo()){
		echo "connect ke database mysql berhasil. Database : ".DB::connection()->getDatabaseName()."";
	}


?>