<?php 
ini_set("display_errors", "off");

include_once 'C:\wamp64\www\projet php\dao\tablenowDao\tablenow.dao.php';
$new=$_GET['new'];

class date_reservation
{
	public $val;
	public $dat1;
	public $dat2;

	function __construct()
	{
		if ($new==null) {
			foreach (tablenow_RolesDAO::minData() as $valeur) {
			
			 $this->val = $valeur['id_tablenow'];
			 $this->dat1 = $valeur['date1'];
			 $this->dat2 = $valeur['date2'];
			}
		}else if($new=="new"){
			foreach (tablenow_RolesDAO::listData() as $valeur) {
			
			 $this->val = $valeur['id_tablenow'];
			 $this->dat1 = $valeur['date1'];
			 $this->dat2 = $valeur['date2'];
			}
		}
	}

	public function dateToFrench($d, $format) 
		{
	    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
	    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
	    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
	    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($d) ) ) );
			}
		
			
		}	
	
	
 ?>