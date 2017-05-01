<?php

namespace Source\Manage;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class ManageServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/manage_admin.php' => config_path('manage_admin.php'),
        ],'config');
         $this->publishes([
            __DIR__.'/public' => public_path('source/manage')
        ],'public');

        $this->loadViewsFrom(__DIR__ . '/views', 'manage');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'manage');


        /**
         * Load view composer
         */
        $this->manageViewComposer($request);

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Source\Manage\Controllers\Front\FrontController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'manage');
    }

    /**
     *
     */
    public function manageViewComposer(Request $request) {

        view()->composer('manage::manage*', function ($view) {
            global $request;
            $manage_id = $request->get('id');
            $is_action = empty($manage_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * manages
                 */
                //Compose
                trans('manage::manage_admin.compose') => [
                    'url' => URL::route('admin_manage.compose'),
                    "icon" => '<i class="fa fa-paper-plane"></i>'
                ],
                //manage contact
                trans('manage::manage_admin.inbox') => [
                    'url' => URL::route('admin_manage.manage_contact'),
                    "icon" => '<i class="fa fa-inbox"></i>'
                ],
                //manage history
                trans('manage::manage_admin.manage_sent') => [
                    'url' => URL::route('admin_manage.manage_sent'),
                    "icon" => '<i class="fa fa-inbox"></i>'
                ],
                //list
                trans('manage::manage_admin.contact') => [
                    'url' => URL::route('admin_manage'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //drive
                trans('manage::manage_admin.drive') => [
                    'url' => URL::route('admin_manage.drive'),
                    "icon" => '<i class="fa fa-google"></i>'
                ],
            ]);
            //
        });
    }

}
