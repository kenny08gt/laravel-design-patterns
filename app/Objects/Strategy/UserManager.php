<?php


namespace App\Objects\Strategy;


class UserManager
{
    public function getUserInfo()
    {
        $client = new SomeClient();

// Want an array?
        $client->setOutput(new ArrayOutput());
        $data = $client->loadOutput();

// Want some JSON?
        $client->setOutput(new JsonStringOutput());
        $data = $client->loadOutput();
    }
}
