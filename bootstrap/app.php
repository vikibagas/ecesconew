<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
       
        
         function (Illuminate\Routing\Router $router) {
           
            $router->middleware('web')
                ->group(base_path('routes/web.php'));
            
            $router->middleware('web') 
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));
            
            $router->middleware('web') 
                ->group(base_path('routes/dashboard.php'));
     
        },
        commands: __DIR__.'/../routes/console.php',
       
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo('/login');
 
      

      //  $middleware->redirectIfAuthenticatedTo('/dashboard');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
