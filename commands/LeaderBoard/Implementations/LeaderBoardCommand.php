<?php

namespace SoerBot\Commands\LeaderBoard\Implementations;

use CharlotteDunois\Livia\LiviaClient;
use CharlotteDunois\Livia\CommandMessage;
use CharlotteDunois\Livia\Commands\Command;

class LeaderBoardCommand extends Command
{
    private $leaderboard_text = <<< EOT
@Heisenberg (Александр)
:star::star::star::star::star:
:medal::medal:

@ucorp  (Аслан)
:star::star::star::star::star:
:medal:

@IvanK (Иван)
:star::star::star:
:medal:

@simbiosse (Руслан)
:star: :star: :star:

@Александр Семин
:star: :star:

@LoveFist (Михаил)
:star: :star: :star: :star:

 @DanielWeiser
:star: :star:

@MikesoWeb
:star: :star:

@iaptekar (Иван)
:star: :star:

@resident01
:star::star:

@Andrey Kustov  (Андрей)
:star:
EOT;

    public function __construct(LiviaClient $client)
    {
        parent::__construct($client, [
            'name' => 'leaderboard',
            'aliases' => [],
            'group' => 'utils',
            'description' => 'Выводит состояние leaderboard из канала #leaderboard',
            'guildOnly' => false,
            'throttling' => [
                'usages' => 5,
                'duration' => 10,
            ],
            'guarded' => true,
            'args' => [],
        ]);
    }

    /**
     * @param CommandMessage $message
     * @param \ArrayObject $args
     * @param bool $fromPattern
     * @return \React\Promise\ExtendedPromiseInterface
     */
    public function run(CommandMessage $message, \ArrayObject $args, bool $fromPattern)
    {
        return $message->say($this->leaderboard_text);
    }
}