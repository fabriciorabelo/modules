<?php

namespace Fabriciorabelo\Modules\Middleware;

use Fabriciorabelo\Modules\Modules;
use Closure;

class IdentifyModule
{
    /**
     * @var Fabriciorabelo\Modules
     */
    protected $module;

    /**
     * Create a new IdentifyModule instance.
     *
     * @param Fabriciorabelo\Modules $module
     */
    public function __construct(Modules $module)
    {
        $this->module = $module;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $slug)
    {
        $request->session()->put('module', $this->module->getProperties($slug)->toArray());

        return $next($request);
    }
}
