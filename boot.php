<?php
/*
Plugin Name: Concurso Cultural
Plugin URI: 
Description: Plugin para criação de concursos culturais
Author: Marcelo Ferracioli
Version: 0.1.0
Author URI: https://github.com/mferracioli/

TODO: Generate optin list
*/

include(dirname(__FILE__) . "/install.php");
include(dirname(__FILE__) . "/hooks.php");
include(dirname(__FILE__) . "/models/contest.php");
include(dirname(__FILE__) . "/models/user.php");
include(dirname(__FILE__) . "/controllers/contest.php");
include(dirname(__FILE__) . "/controllers/user.php");
?>