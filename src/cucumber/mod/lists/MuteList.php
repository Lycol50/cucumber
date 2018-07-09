<?php

namespace cucumber\mod\utils;

use cucumber\mod\Mute;
use cucumber\utils\CPlayer;

class MuteList extends PlayerPunishmentList
{

    protected static function initMessages(): void
    {
        self::$messages = [
            'already-punished' => '%name% is already muted!',
            'not-banned' => '%uid% has not been muted!'
        ];
    }

    public function mute(Mute $mute, $remute): void
    {
        $this->punish($mute, $remute);
    }

    public function unmute(string $uid): void
    {
        $this->pardon($uid);
    }

    public function isMuted(CPlayer $player): bool
    {
        return $this->isPunished($player);
    }

}