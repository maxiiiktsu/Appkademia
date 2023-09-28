<?php namespace App\Arrival\Components;

use Cms\Classes\ComponentBase;

/**
 * Arrival Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Arrival extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Arrival Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
