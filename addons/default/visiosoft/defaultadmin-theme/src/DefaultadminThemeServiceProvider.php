<?php namespace Visiosoft\DefaultadminTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;
use Illuminate\Pagination\AbstractPaginator;
use Visiosoft\DefaultadminTheme\Http\Controller\Admin\PreferencesController;
use Visiosoft\DefaultadminTheme\Http\Controller\Admin\SettingsController;
use Visiosoft\DefaultadminTheme\Listener\ApplySorting;

/**
 * Class DefaultadminThemeServiceProvider
 *
 * @link   http://openclassify.com/
 * @author OpenClassify, Inc. <support@openclassify.com>
 * @author Vedat Akdogan <vedat@openclassify.com>
 */
class DefaultadminThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        SortNavigation::class => [
            ApplySorting::class,
        ],
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        AbstractPaginator::$defaultView       = 'visiosoft.theme.defaultadmin::pagination/bootstrap-4';
        AbstractPaginator::$defaultSimpleView = 'streams::pagination/simple-bootstrap-4';
    }
}
