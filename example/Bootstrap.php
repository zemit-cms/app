<?php

namespace Zemit;

use Phalcon\Events\Event;
use Phalcon\Events\Manager as EventsManager;
use Zemit\Bootstrap as CoreBootstrap;
use Zemit\Bootstrap\Config;

class Bootstrap extends CoreBootstrap
{
    /**
     * Way 0
     * Construct override way
     */
    public function __construct()
    {
        $this->config = new Config();
        parent::__construct();
    }
    
    /**
     * Way 1 (Best way)
     * Property set
     */
    public $config = Config::class;
    
    /**
     * Way 2 (Best way to do more custom stuff)
     * Method override
     */
    public function config()
    {
        $this->config = new Config();
        // do stuff
        return parent::config();
    }

    /**
     * Way 3
     * Initializing
     */
    public function initialize()
    {
        $this->config = new Config();

        /**
         * Way 4
         * Event managers
         */
        $this->setEventsManager(new EventsManager());
        $this->eventsManager->attach('bootstrap:beforeConfig', function(Event $event, $that) {
            $that->config = new Config();
        });
    }
    
}
