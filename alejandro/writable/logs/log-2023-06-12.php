<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-06-12 12:53:10 --> Optional parameter $verbs declared before required parameter $to is implicitly treated as a required parameter
#0 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Autoloader\Autoloader.php(365): CodeIgniter\Debug\Exceptions->errorHandler(8192, 'Optional parame...', 'C:\\Custom Progr...', 1014)
#1 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Autoloader\Autoloader.php(365): require_once()
#2 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Custom Progr...')
#3 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('CodeIgniter\\Rou...')
#4 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Config\Services.php(685): CodeIgniter\Autoloader\Autoloader->loadClass('CodeIgniter\\Rou...')
#5 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Config\BaseService.php(120): CodeIgniter\Config\Services::routes(false)
#6 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Config\Services.php(682): CodeIgniter\Config\BaseService::getSharedInstance('routes')
#7 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\app\Config\Routes.php(21): CodeIgniter\Config\Services::routes(true)
#8 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\CodeIgniter.php(712): require('C:\\Custom Progr...')
#9 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(NULL)
#10 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#11 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\index.php(45): CodeIgniter\CodeIgniter->run()
#12 {main}
CRITICAL - 2023-06-12 12:53:10 --> Uncaught ErrorException: filter_var(): Passing null to parameter #3 ($options) of type array|int is deprecated in C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\HTTP\Request.php:429
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8192, 'filter_var(): P...', 'C:\\Custom Progr...', 429)
#1 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\HTTP\Request.php(429): filter_var('::1', 516, NULL)
#2 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\HTTP\Request.php(297): CodeIgniter\HTTP\Request->fetchGlobal('server', 'REMOTE_ADDR', 516, NULL)
#3 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\HTTP\Request.php(114): CodeIgniter\HTTP\Request->getServer('REMOTE_ADDR')
#4 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\app\Views\errors\html\error_exception.php(210): CodeIgniter\HTTP\Request->getIPAddress()
#5 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Debug\Exceptions.php(298): include('C:\\Custom Progr...')
#6 C:\Custom Programs\XAMPP\htdocs\pwd2023\alejandro\system\Debug\Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#7 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#8 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
