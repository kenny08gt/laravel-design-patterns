<?php


namespace App\Objects\Factory;


class Interaction
{

    private $source;
    private $interactionValue;

    public function __construct($source, $sign = true)
    {
        $this->source = $source;
        $this->interactionValue = $sign;
    }

    public function getInteraction(): string
    {
        return sprintf("The user from %s, give %s feedback", $this->source, $this->formatInteractionValue());
    }

    private function formatInteractionValue(): string {
        return $this->interactionValue ? 'positive' : 'negative';
    }
}



