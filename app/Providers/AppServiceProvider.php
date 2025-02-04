<?php

namespace App\Providers;
use App\Models\University;
use App\Models\College;
use App\Models\Contact;
use App\Models\Deanship;
use App\Models\UniversityAdministrativeUnit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function ($view){
            $pub_university = University::first();
            $pub_colleges = College::all();
            $pub_deanships = Deanship::all();
            $pub_units = UniversityAdministrativeUnit::all();
            $pub_contact = Contact::first();
            $view->with('pub_university', $pub_university);
            $view->with('pub_colleges', $pub_colleges);
            $view->with('pub_deanships', $pub_deanships);
            $view->with('pub_units', $pub_units);
            $view->with('pub_contact', $pub_contact);

        });
    }
}
