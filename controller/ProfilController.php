<?php
namespace Controller;

use App\Router;

require "PostController.php";

ob_start();
require dirname(__DIR__)."/Views/profil.php";

ob_get_clean();