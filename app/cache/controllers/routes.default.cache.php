<?php
return array("/_default/"=>["controller"=>"controllers\\MainController","action"=>"index","parameters"=>[],"name"=>"home","cache"=>false,"duration"=>0],"/login/(index/)?"=>["controller"=>"controllers\\MyAuth","action"=>"index","parameters"=>[],"name"=>"login","cache"=>false,"duration"=>0],"/login/noAccess/(.+?)/"=>["controller"=>"controllers\\MyAuth","action"=>"noAccess","parameters"=>[0],"name"=>"myAuth.noAccess","cache"=>false,"duration"=>0],"/login/connect/"=>["controller"=>"controllers\\MyAuth","action"=>"connect","parameters"=>[],"name"=>"myAuth.connect","cache"=>false,"duration"=>0],"/login/badLogin/"=>["controller"=>"controllers\\MyAuth","action"=>"badLogin","parameters"=>[],"name"=>"myAuth.badLogin","cache"=>false,"duration"=>0],"/login/terminate/"=>["controller"=>"controllers\\MyAuth","action"=>"terminate","parameters"=>[],"name"=>"myAuth.terminate","cache"=>false,"duration"=>0],"/login/info/(.*?)"=>["controller"=>"controllers\\MyAuth","action"=>"info","parameters"=>["~0"],"name"=>"myAuth.info","cache"=>false,"duration"=>0],"/login/checkConnection/"=>["controller"=>"controllers\\MyAuth","action"=>"checkConnection","parameters"=>[],"name"=>"myAuth.checkConnection","cache"=>false,"duration"=>0],"/login/forgetConnection/"=>["controller"=>"controllers\\MyAuth","action"=>"forgetConnection","parameters"=>[],"name"=>"myAuth.forgetConnection","cache"=>false,"duration"=>0],"/login/message/(.+?)/(.+?)/(.+?)/(.*?)"=>["controller"=>"controllers\\MyAuth","action"=>"message","parameters"=>[0,1,2,"~3","~4"],"name"=>"myAuth.message","cache"=>false,"duration"=>0]);
