<?php

namespace Dnonov\BackgroundRemover\Providers;

use Dnonov\BackgroundRemover\BackgroundRemover;
use Illuminate\Support\ServiceProvider;

class BackgroundRemoverServiceProvider extends ServiceProvider {
    public function boot(): void {}
    public function register(): void {
        $this->app->bind(BackgroundRemover::class, function() {
            return new BackgroundRemover();
        });
    }
}
