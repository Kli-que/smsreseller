<?php

if ($_POST['selectedgroup'] == "0") {
	die("Please select the group to send messages to.");
}

elseif (empty($_POST['message'])) {
	die("Please enter your message");
}

else{
	die("Messages sent successfully.Click here to view your logs.");
}

?>