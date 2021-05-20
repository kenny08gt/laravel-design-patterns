<?php


namespace App\Objects;


class InteractionManager
{
    protected $interactions = [];

    public function add($source, $interaction): Interaction
    {
        $new_interaction = new Interaction($source, $interaction);
        array_push($interaction, $new_interaction);
        return $new_interaction;
    }

    public function getAll(): array
    {
        return $this->interactions;
    }
}


