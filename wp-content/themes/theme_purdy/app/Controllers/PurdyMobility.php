<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PurdyMobility extends Controller
{

    // controllers/PurdyMobility.php

    public function cf() 
    {
        return get_fields();
    }
}


