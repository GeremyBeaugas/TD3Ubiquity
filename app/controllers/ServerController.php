<?php
namespace controllers;
use PHPMV\ProxmoxApi;
use Ubiquity\attributes\items\router\Route;
 /**
  * Controller ServerController
  */
 #Route[('server')];
class ServerController extends \controllers\ControllerBase{

	public function index(){
		$this->loadView("ServerController/index.html");
	}

	#[Route(path: "vms",name: "server.add")]
	public function vms(){
		$api=new ProxmoxApi('62.210.89.36', 'sio2a','sio2a');
        $vms=$api->getVMs();
        $dt=$this->jquery->semantic()->dataTable('dt-vms', \stdClass::class, $vms);
        $dt->setFields(['vmid','name']);
        var_dump($vms);
		$this->jquery->renderView('ServerController/vms.html');

	}

}
