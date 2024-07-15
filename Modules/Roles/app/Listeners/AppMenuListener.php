<?php

namespace Modules\Roles\Listeners;

use App\Events\AppMenuEvent;
use Spatie\Menu\Laravel\Link;


class AppMenuListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppMenuEvent $event): void
    {
        $menu = $event->menu;
        $menu->html('<span>Roles</span>', ['class' => 'menu-title']);
        $menu->add(Link::toRoute('roles.index', '<i class="la la-key"></i> <span>'.__('Roles & Permissions'). '</span>')->addClass(route_is('roles.index') ? 'active' : ''));
    }
}
