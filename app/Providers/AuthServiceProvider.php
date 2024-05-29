<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Chirp;
use App\Policies\ChirpPolicy;

class AuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application
     * 
     * @var array
     */

    protected $policies = [
        Chirp::class => ChirpPolicy::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
