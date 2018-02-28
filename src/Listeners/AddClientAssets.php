<?php
namespace DogSports\PipeTables\Listeners;

use Flarum\Event\ConfigureWebApp;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);
    }
    /**
     * @param ConfigureWebApp $event
     */
    public function addAssets(ConfigureWebApp $event)
    {
        if($event->isForum())
        {
            $event->addAssets([__DIR__.'/../../less/forum/extension.less']);
        }
    }
}
