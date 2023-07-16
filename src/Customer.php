<?php
require_once __DIR__ . '/vendor/autoload.php';

namespace ProgramerZamanNow\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }
    public function sayHello(string $name): string
    {
        return "Hello $name, Myname is $this->name";
    }
}
