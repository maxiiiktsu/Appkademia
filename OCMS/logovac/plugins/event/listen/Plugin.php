<?php namespace Event\Listen;

use Backend;
use System\Classes\PluginBase;
use App\Arrival\Models\Arrival;
use Log;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Listen',
            'description' => 'No description provided yet...',
            'author' => 'Event',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        Arrival::extend(function ($model){
            $model->bindEvent("model.afterCreate", function () use($model){
                $h = date('H');

                if ($h < 8){
                    Log::info('skorosi');
                }
                if ($h > 8){
                    Log::info('neskorosi');
                }
            });
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {


        return [
            'Event\Listen\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {


        return [
            'event.listen.some_permission' => [
                'tab' => 'Listen',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {


        return [
            'listen' => [
                'label' => 'Listen',
                'url' => Backend::url('event/listen/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['event.listen.*'],
                'order' => 500,
            ],
        ];
    }
}
