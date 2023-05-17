<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/register' => 'controllers/forms/register/form.register.controller.php',
    '/login' => 'controllers/forms/login/form.login.controller.php',
    '/detail' => 'views/detail/detail.view.php',
    '/show' => 'controllers/forms/actions/form.create.show.controller.php',
    '/seller' => 'controllers/sellers/seller.controller.php',
    '/purchase' => 'controllers/purchases/purchase.controller.php',
    '/edit' =>'controllers/forms/actions/form.edit.show.controller.php',
    '/ticket' =>'views/tickets/ticket.view.php',
    '/seat' => 'controllers/seats/seat.controller.php',
    // '/adminLogin' => 'controllers/forms/login.admin/form.admin.login.controller.php',
    '/admin' => 'views/admin/admin.view.php',
    '/adduser' => 'controllers/admin/admin.adduser.controller.php',
    '/forgetpassword'=>'views/forms/forgetPassword/form.forget.password.gmail.view.php',


];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}