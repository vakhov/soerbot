<?php

use SoerBot\Commands\LeaderBoard\Implementations\LeaderBoardCommand;

return function ($client) {
    return new LeaderBoardCommand($client);
};
