<?php
function has_space($string){
	if(preg_match('/ /', $string)){
		return true;
	}
	else{
		return false;
	}
}
$string='This doesn\'t have a space';
if(has_space($string)){
	echo 'Has atleast space.';
}
else
{
	echo 'Has no space';
}
?>