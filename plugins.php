// ******************************************************************************************************************************
// 					***************************************** PLUGINS *****************************************
// ****************************************** ALL FOLDER PLUGINS MUST BE IN ADMIN/PLUGINS/ ***************************************


// TO MAKE A PLUGIN YOU NEED CREATE A FOLDER IN ADMIN/PLUGINS/ WITH ALL PLUGIN CONTENT AND CALL THIS 5 METHODS ABOVE


// 01) ********************************* GROUP OPTIONS LOAD ON CORE/ADMIN/ACCESS.CLASS.PHP ******************************

$access['newsletter'] = 'Newsletter';

// 02) ********************************* MENU OPTIONS LOAD ON CORE/ADMIN/MENU.CLASS.PHP ******************************

if(isset($permission['newsletter']) || $_SESSION['ID']=="MASTER"){$this->menu .= '<li id="newsletter" class="newsletter p05"><i class="material-icons left">email</i>Newsletter</li>';}


// 03) **************************** JS PLUGINS FUNCTIONS LOAD ON ADMIN/PAINEL.PHP ************************

function js(){
	echo '<script src="admin/plugins/newsletter/main.js"></script>';	
}

// 04) **************************** CSS PLUGINS STYLES LOAD ON ADMIN/PAINEL.PHP ************************

function css(){
	echo '<link rel="stylesheet" href="admin/plugins/newsletter/style.css">';	
}

// 05) **************************** DB CONSTRUCTO LOAD ON CORE/CRUD/CONSTRUCT.CLASS.PHP ************************

function construct(){
	
}
