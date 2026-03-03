<?php
abstract class Spread
{
    protected string $productName;
    protected float $weight;
    public int $shelfLifeMonths = 12;

    function getproductName()
    {
        return $this->productName;
    }

    function getweight()
    {
        return $this->weight;
    }
}

class Jam extends Spread
{
    public int $sweetness;
    public function __construct(string $productName, float $weight)
    {
        $this->productName = $productName;
        $this->weight = $weight;
    }

    public function __toString()
    {
        return "JAM: {$this->productName} ({$this->weight}g keeps for {$this->shelfLifeMonths} months : sweetness {$this->sweetness})";
    }
}

class Honey extends Spread
{
    public bool $isManuka = false;
    public function __construct(string $productName, float $weight)
    {
        $this->productName = $productName;
        $this->weight = $weight;
    }

    public function __toString(): string {
        if ($this->isManuka) {
            $manuka = "Manuka";
        } else {
            $manuka = "NOT Manuka";
        }

        return "HONEY: {$this->productName} ({$this->weight}g) keeps for {$this->shelfLifeMonths} months ($manuka)";
    }
}
