<?php

namespace Transform\Events;

/**
 * ActionInterface
 *
 * This interface defines an action which will be registered against an event.
 */
interface ActionInterface
{

    /**
     * This method will be called when an event registered to this action is
     * fired.
     *
     * @access public
     * @return void
     */
    public function execute();

}
