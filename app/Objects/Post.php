<?php


namespace App\Objects;


class Post extends InteractionManager
{
    const SOURCE_FB = 'facebook';

    public function manageLike($interaction): bool
    {
        $this->add(self::SOURCE_FB, $interaction);

        return true;
    }

    public function getInteractionsAsString(): string
    {
        $body = '';
        foreach ($this->interactions as $interaction) {
            $body .= $interaction->getInteraction() .'\r\t\n';
        }

        return $body;
    }
}
