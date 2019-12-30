<?php


namespace system\Factory;


interface FactoryInterface
{
    public function create(string $type, array $arguments = []);
}