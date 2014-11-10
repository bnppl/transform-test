<?php

namespace Transform\Events;


/**
 * Dispatcher
 *
 * The dispatcher retains a registry of actions mapped to events that trigger
 * them.
 */
class Dispatcher
{

    /**
     * Registers an action to be performed when an event occurs.
     *
     * @param EventInterface  $event  The event that will trigger the action.
     * @param ActionInterface $action The action to be triggered.
     *
     * @access public
     * @return void
     */
    public function registerTrigger(EventInterface $event, ActionInterface $action)
    {
    }


    /**
     * Notifies the dispatcher that the event passed in has occured. All actions
     * registered against the event will be executed.
     *
     * @param EventInterface $event The event that has occured.
     *
     * @access public
     * @return void
     */
    public function notify(EventInterface $event)
    {
    }
}
