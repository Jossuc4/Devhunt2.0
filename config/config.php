<?php
require dirname(__DIR__)."/vendor/autoload.php";
use Model\Database;

define('DB',new Database("efanampy;port=3308","root",""));