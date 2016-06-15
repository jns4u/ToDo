<?php
foreach($files as $fl){				
	$fl_nm = explode("_",$fl);		
	$fl_timest=explode(".",$fl_nm[2]);
	if(count($fl_timest[0])!=12){
		if(substr($fl_timest[0],2)!=10){
			$new_fl_nm=substr_replace($fl_nm[2],"0".substr($fl_timest[0],2,2),2,count($fl_nm));
			$new_fl_nm=$fl_nm[0]."_".$fl_nm[1]."_".$new_fl_nm;				
			//echo $new_fl_nm;die;
			if(copy_file($fl,$dir,$files_to_rename)){								// copy file to be rename
				if(renameFile($fl,$new_fl_nm,$dir,$dir)){							// rename file
					echo "file '$fl' renamed to '$new_fl_nm'.";
				}else{ echo "file '$fl' not renamed.";}
			}				
		}
	}			
}
?>
