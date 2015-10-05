<?php

namespace App\Http\Middleware;

use App\Models\AssignedRole;
use Closure;
use Illuminate\Auth\Guard;
use Illuminate\Contracts\Routing\ResponseFactory;

class Admin
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    protected $response;

    function __construct(Guard $auth, ResponseFactory $response)
    {
        $this->auth = $auth;
        $this->response = $response;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            $admin = 0;
            if ($this->auth->user()->admin == 1) {
                $admin = 1;
            }

            if ($admin == 0) {
                return $this->response->redirectTo('/'); // frontend
            }
            return $next($request);
        }

        return $this->response->redirectTo('/'); // Go to frontend
    }
}
