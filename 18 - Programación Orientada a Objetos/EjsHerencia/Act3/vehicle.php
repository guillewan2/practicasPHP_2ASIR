<?php
abstract class Vehicle
{
    public int $numDoors;
    public string $fuel;
}

final class Car extends Vehicle
{
    public int $numSeats;
    public float $roadTax;
}


final class Van extends Vehicle
{
    public bool $commercialTax;
}
