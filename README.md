Codeigniter-2.1.3-Extended-Core-Class
===============================

Simple example for Codeigniter 2.1.3 Extended Core Class.

1. Export SQL for database.
2. Set config/database.php
3. Put all files.
4. Add this code at the end of file application/config/config.php
-------------
function __autoload($class)
{
 if(strpos($class, 'CI_') !== 0)
 {
  @include_once( APPPATH . 'core/'. $class . EXT );
 }
}
-------------
