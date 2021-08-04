<?php

namespace App\Controller;

use App\View\HomeView;

class HomeController {


     public function showHomeView() {

          return new HomeView();
     }
}


?>