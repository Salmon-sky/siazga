<?php

namespace App\Providers;

use App\Models\Nilai;
use App\Models\Presensi;
use App\Models\JadwalPribadi;
use App\Models\JadwalPelajaran;
use Illuminate\Support\ServiceProvider;
use App\Observers\ScopedBySemesterModelObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Presensi::observe(ScopedBySemesterModelObserver::class);
        JadwalPelajaran::observe(ScopedBySemesterModelObserver::class);
        JadwalPribadi::observe(ScopedBySemesterModelObserver::class);
        Nilai::observe(ScopedBySemesterModelObserver::class);
    }
}
