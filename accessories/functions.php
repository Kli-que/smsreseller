<?php
require_once '../accessories/linkup.php';
// require_once 'AfricasTalkingGateway.php';


//function to get the account balance

function getAccountBalance()
{

	$username   = "WebArtisan";

	$apikey     = "7b978a34e951470a9865476fb2485ced2ed93fcafa8da50eca144ee2fa36ce17";

	

	$gateway    = new AfricasTalkingGateway($username, $apikey);

	try

	{ 

	  $data = $gateway->getUserData();

	  echo $data->balance."\n";

	}

	catch ( AfricasTalkingGatewayException $e )

	{
		echo "Error: ".$e->getMessage();
	}



}



//fucntion to fetch all the groups created by the user

function getAllGroups()
{
	global $link;

	$user = $_SESSION['loggedin'];

	$query = mysqli_query($link, "SELECT * FROM `groups` WHERE `groupowner`= '$user' ORDER BY groupname");

	while ($row = mysqli_fetch_assoc($query)) {
		echo '
		<a class="displaygrpcontacts" id="displaygrpcontacts" data-id = '.$row['id'].' ><span class="nav-label"><b class="label primary rounded">'.returnNumberofRows('addcontacttogroup', 'group_id', $row['id']).'</b></span>'.$row['groupname'].'<span class="nav-text"></span></a>';
	}
}

function getAllGroupsDropDown()
{
	global $link;

	$user = $_SESSION['loggedin'];

	$query = mysqli_query($link, "SELECT * FROM `groups` WHERE `groupowner` = '$user'");

	while ($row = mysqli_fetch_assoc($query)) {
		echo '<a class="dropdown-item" href="#">'.$row['groupname'].'</a>';
	}
}


//function to fetch all the groups for the sending sms dropdown


function getAllGroupsSendSMS()
{
	global $link;

	$user = $_SESSION['loggedin'];

	$query = mysqli_query($link, "SELECT * FROM `groups` WHERE `groupowner` = '$user'");

	echo "<option value='0' id='groupid'> -- Select Contacts Group -- </option>";

	while ($row = mysqli_fetch_assoc($query)) {
		echo "<option value=".$row['id']." id='groupid'>".$row['groupname']."</option>";
	}
}


//function to fetch all the contacts added by the user

function getAllContacts()
{
	global $link;

	$user = $_SESSION['loggedin'];

	$query = mysqli_query($link, "SELECT * FROM `allcontacts` WHERE `user`= '$user' ORDER BY `contactname`");

	while ($row = mysqli_fetch_assoc($query)) {
		echo '<div class="list-item">

				<div class="list-left">
					<label class="md-check"><input type="checkbox" name="checkedcontact" id="checkedcontact" value="'.$row['id'].'" class="has-value"><i class="primary"></i></label>
				</div>

				<div class="list-body">
					<div class="pull-right dropdown">
						<a class="text-muted" data-toggle="dropdown" href="#"><i class="fa fa-fw fa-ellipsis-v"></i></a>
						<div class="dropdown-menu pull-right text-color" role="menu">
							<a class="dropdown-item" data-target="#modal-editcontact" data-toggle="modal" id="editcontact" data-contactid="'.$row['id'].'"><i class="fa fa-pencil"></i> Edit contact</a> 

							<a class="dropdown-item" data-specificcontact="'.$row['id'].'" id="deletesinglecnt"><i class="fa fa-trash"></i> Delete contact</a>

							<a class="dropdown-item" data-specificcontact="'.$row['id'].'" id="sendsinglesms" data-toggle="modal" data-target="#sendsinglemsg"><i class="fa fa-envelope"></i>Send Message</a>
						</div>
					</div>
					<div class="item-title">
						<a class="_500" href="#">'.$row['contactname'].'</a>
					</div><small class="block text-muted text-ellipsis">'.$row['phone'].'</small>
				</div>

			</div>';
	}
}

function returnNumberofRows($tablename, $field, $input)
{
	global $link;

	$query = mysqli_query($link, "SELECT * FROM $tablename WHERE $field = ".$input);

	return mysqli_num_rows($query);
}


function returnNumberofRows2($tablename, $field, $input)
{
	global $link;

	$query = mysqli_query($link, "SELECT * FROM $tablename WHERE $field = '$input'");

	return mysqli_num_rows($query);
}


function searchExistingContact($input, $passeddata)
{
	global $link;

	$query = mysqli_query($link, "SELECT * FROM `allcontacts` WHERE `phone` = '$input' AND `user` = '$passeddata'");

	return mysqli_num_rows($query);
}


// selecting a given field by field


function returnFieldByField($tablename, $field, $input)
{
	global $link;

	$query = mysqli_query($link, "SELECT * FROM $tablename WHERE $field = '$input'");

	$row = mysqli_fetch_assoc($query);

	return $row;
}


//function to fetch the number of rows in the all contacts table

function returnnumrows($tablename, $field, $input)
{
	global $link;

	$query = mysqli_query($link, "SELECT * FROM $tablename WHERE $field = '$input'");

	return mysqli_num_rows($query);
}

//function to fetch the group contacts

function returnContactGroups($tablename, $column, $givenfield)
{
	global $link;

	$query = mysqli_query($link, "SELECT * FROM $tablename WHERE $column = ".$givenfield);

	while ($row = mysqli_fetch_assoc($query)) {
		$query2 = mysqli_query($link, "SELECT * FROM `allcontacts` WHERE `id` = ".$row['contact_id']);

		while ($row2 = mysqli_fetch_assoc($query2)) {
			echo '<div class="list-item">

					<div class="list-left">
						<label class="md-check"><input type="checkbox" class="has-value"><i class="primary"></i></label>
					</div>

					<div class="list-body">
						<div class="pull-right dropdown">
							<a class="text-muted" data-toggle="dropdown" href="#"><i class="fa fa-fw fa-ellipsis-v"></i></a>
							<div class="dropdown-menu pull-right text-color" role="menu">
								<a class="dropdown-item"><i class="fa fa-trash"></i> Remove from Group</a>
							</div>
						</div>
						<div class="item-title">
							<a class="_500" href="#">'.$row2['contactname'].'</a>
						</div><small class="block text-muted text-ellipsis">'.$row2['phone'].'</small>
					</div>

				</div>';
		}
	}
	
}

?>