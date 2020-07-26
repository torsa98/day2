<?php
 $user_ip = s_SERVER['REMOTE_ADDR'];

function echo_ip(){
	 $string = 'Your IP address is'.$user_ip;
}
echo_ip();
?>