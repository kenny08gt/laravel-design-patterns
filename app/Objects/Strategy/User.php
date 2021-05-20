<?php


namespace App\Objects\Strategy;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    private $output;

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load($this->attributes);
    }
}
