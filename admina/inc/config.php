<?php
ini_set( "display_errors", true );
define( "HOST", "localhost" );
//nama database
define( "DATABASE_NAME", "feederimporter" );
define( "DB_USERNAME", "root" );

define( "PORT", 3306);
//password mysql
define( "DB_PASSWORD", "mypatrick" );
//dir admin
define( "DIR_ADMIN", "feederimporter/admina/");
//main directory
define( "DIR_MAIN", "feederimporter/");



define('DB_CHARACSET', 'utf8');

require_once ('Database.php');
require_once ('Datatable.php');
require_once ('My_pagination.php');
require_once ('url.php');
require_once ('DTable.php');
require_once ('Table_Clean.php');

$db=new Database("mysql");

//postgre
//$pgs=new Database("pgsql");

//pagination
$pg=New My_pagination();
$dtable = new TableData();

$new_table = new DTable("mysql");
$clean = new Table_Clean("mysql");

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );


?>
