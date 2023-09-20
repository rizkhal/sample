<?php

namespace App\Http\Middleware;

use Closure;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Handle the incoming request.
     *
     * @return Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        }

        return parent::handle($request, $next);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'locale' => session()->get('locale', config('app.locale')),
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
