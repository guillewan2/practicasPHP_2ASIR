<?php
class Jam
{
    private string $productName;
    private float $weight;
    public int $shelfLifeMonths = 12;
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
