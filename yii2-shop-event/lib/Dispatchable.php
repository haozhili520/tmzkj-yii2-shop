<?php

namespace Tmzkj\Event;

interface Dispatchable
{
    public function onDispatch(EventArgument $arg);
}
