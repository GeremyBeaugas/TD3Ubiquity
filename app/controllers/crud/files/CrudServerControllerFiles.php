<?php
namespace controllers\crud\files;

use Ubiquity\controllers\crud\CRUDFiles;
 /**
  * Class CrudServerControllerFiles
  */
class CrudServerControllerFiles extends CRUDFiles{
	public function getViewIndex(){
		return "CrudServerController/index.html";
	}

	public function getViewDisplay(){
		return "CrudServerController/display.html";
	}

	public function getViewForm(){
		return "CrudServerController/form.html";
	}


}
