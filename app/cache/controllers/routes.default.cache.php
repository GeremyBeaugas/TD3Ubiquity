<?php
return array("/users/(index/)?"=>["controller"=>"controllers\\CrudUsers","action"=>"index","parameters"=>[],"name"=>"crudUsers.index","cache"=>false,"duration"=>0],"/users/updateMember/(.+?)/(.*?)"=>["controller"=>"controllers\\CrudUsers","action"=>"updateMember","parameters"=>[0,"~1"],"name"=>"crudUsers.updateMember","cache"=>false,"duration"=>0],"/users/refresh_/"=>["controller"=>"controllers\\CrudUsers","action"=>"refresh_","parameters"=>[],"name"=>"crudUsers.refresh_","cache"=>false,"duration"=>0],"/users/edit/(.*?)"=>["controller"=>"controllers\\CrudUsers","action"=>"edit","parameters"=>["~0","~1"],"name"=>"crudUsers.edit","cache"=>false,"duration"=>0],"/users/newModel/(.*?)"=>["controller"=>"controllers\\CrudUsers","action"=>"newModel","parameters"=>["~0"],"name"=>"crudUsers.newModel","cache"=>false,"duration"=>0],"/users/editMember/(.+?)/"=>["controller"=>"controllers\\CrudUsers","action"=>"editMember","parameters"=>[0],"name"=>"crudUsers.editMember","cache"=>false,"duration"=>0],"/users/display/(.*?)"=>["controller"=>"controllers\\CrudUsers","action"=>"display","parameters"=>["~0","~1"],"name"=>"crudUsers.display","cache"=>false,"duration"=>0],"/users/delete/(.+?)/"=>["controller"=>"controllers\\CrudUsers","action"=>"delete","parameters"=>[0],"name"=>"crudUsers.delete","cache"=>false,"duration"=>0],"/users/refreshTable/(.*?)"=>["controller"=>"controllers\\CrudUsers","action"=>"refreshTable","parameters"=>["~0"],"name"=>"crudUsers.refreshTable","cache"=>false,"duration"=>0],"/users/updateModel/"=>["controller"=>"controllers\\CrudUsers","action"=>"updateModel","parameters"=>[],"name"=>"crudUsers.updateModel","cache"=>false,"duration"=>0],"/users/showDetail/(.+?)/"=>["controller"=>"controllers\\CrudUsers","action"=>"showDetail","parameters"=>[0],"name"=>"crudUsers.showDetail","cache"=>false,"duration"=>0],"/users/detailClick/(.+?)/(.*?)"=>["controller"=>"controllers\\CrudUsers","action"=>"detailClick","parameters"=>[0,"~1","~2"],"name"=>"crudUsers.detailClick","cache"=>false,"duration"=>0],"/_default/"=>["controller"=>"controllers\\MainController","action"=>"index","parameters"=>[],"name"=>"home","cache"=>false,"duration"=>0],"/login/(index/)?"=>["controller"=>"controllers\\MyAuth","action"=>"index","parameters"=>[],"name"=>"login","cache"=>false,"duration"=>0],"/login/noAccess/(.+?)/"=>["controller"=>"controllers\\MyAuth","action"=>"noAccess","parameters"=>[0],"name"=>"myAuth.noAccess","cache"=>false,"duration"=>0],"/login/connect/"=>["controller"=>"controllers\\MyAuth","action"=>"connect","parameters"=>[],"name"=>"myAuth.connect","cache"=>false,"duration"=>0],"/login/badLogin/"=>["controller"=>"controllers\\MyAuth","action"=>"badLogin","parameters"=>[],"name"=>"myAuth.badLogin","cache"=>false,"duration"=>0],"/login/terminate/"=>["controller"=>"controllers\\MyAuth","action"=>"terminate","parameters"=>[],"name"=>"myAuth.terminate","cache"=>false,"duration"=>0],"/login/info/(.*?)"=>["controller"=>"controllers\\MyAuth","action"=>"info","parameters"=>["~0"],"name"=>"myAuth.info","cache"=>false,"duration"=>0],"/login/checkConnection/"=>["controller"=>"controllers\\MyAuth","action"=>"checkConnection","parameters"=>[],"name"=>"myAuth.checkConnection","cache"=>false,"duration"=>0],"/login/forgetConnection/"=>["controller"=>"controllers\\MyAuth","action"=>"forgetConnection","parameters"=>[],"name"=>"myAuth.forgetConnection","cache"=>false,"duration"=>0],"/login/message/(.+?)/(.+?)/(.+?)/(.*?)"=>["controller"=>"controllers\\MyAuth","action"=>"message","parameters"=>[0,1,2,"~3","~4"],"name"=>"myAuth.message","cache"=>false,"duration"=>0]);
