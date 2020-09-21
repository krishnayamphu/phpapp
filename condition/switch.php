<?php


$day=$_GET['day'];

switch ($day) {
	case 1:
		echo "Sun";
		break;
	case 2:
		echo "Mon";
		break;
		case 3:
		echo "Tue";
		break;
		case 4:
		echo "Wed";
		break;
		case 5:
		echo "Thu";
		break;
		case 6:
		echo "Fri";
		break;
		case 7:
		echo "Sat";
		break;
	default:
		echo "Invalid day no.";
		break;
}




echo "<br><br><a href='switch_form.html'>Go Back</a>";