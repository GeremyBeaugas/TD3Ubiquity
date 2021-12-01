<?php
namespace controllers;
 use services\dao\OrgaRepository;
 use Ubiquity\attributes\items\di\Autowired;
 use Ubiquity\attributes\items\router\Route;

 /**
  * Controller MainController
  */
class MainController extends \controllers\ControllerBase{

    #[Route('/_default',name:'home')]
	public function index(){
		$this->loadDefaultView();
	}

    #[Autowired]
    private OrgaRepository $repo;
    public function setRepo(OrgaRepository $repo): void {
        $this->repo = $repo;
    }
}
