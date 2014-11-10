<?php

namespace Transform\Events;


/**
 * EventInterface
 *
 * This interface defines an event that will be used to trigger one or more
 * actions.
 */
interface EventInterface
{

    /**
     * This should be a unique name that will be used to identify this eventt.
     *
     * @access public
     * @return string
     */
    public function getEventName();
}
