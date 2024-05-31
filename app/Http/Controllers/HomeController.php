<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Traits\HasRouteName;

class HomeController extends Controller
{
    use HasRouteName;

    public function __invoke()
    {
        $routes = [];

        Route::prefix('/pdf')->group(function () use (&$routes) {
            $routeCollection = Route::getRoutes();

            foreach ($routeCollection as $route) {
                if ($route->getPrefix() === '/pdf') {
                    $routes[] = [
                        'name' => $this->convertToReadable($route->getName()),
                        'url' => url($route->uri())
                    ];
                }
            }
        });

        return view('dashboard.main', compact('routes'));
    }

}
