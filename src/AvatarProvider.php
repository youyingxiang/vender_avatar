<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2019/5/15
 * Time: 5:13 PM
 */
namespace Cxp\Avatar;
use Illuminate\Support\ServiceProvider;
class AvatarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__.'/config/avatar.php' => config_path('avatar.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('avatar', function ($app) {
            return new Avatar($app['config']);
        });
    }
}