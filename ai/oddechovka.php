t
<?php
class Vehicle
{
    public $značka; // Brand
    public $stavPaliva; // Fuel level (liters)
    public $objemNádžerky; // Tank capacity (liters)
    public $spotřeba; // Consumption (liters per 100 kilometers)

    public function __construct($značka, $objemNádžerky, $spotřeba)
    {
        $this->značka = $značka;
        $this->objemNádžerky = $objemNádžerky;
        $this->spotřeba = $spotřeba;
        $this->stavPaliva = $objemNádžerky; // Start with full tank
    }

    public function getRemainingFuel()
    {
        return $this->stavPaliva;
    }

    public function isEmpty()
    {
        return $this->stavPaliva <= 0;
    }

    public function refill($amount)
    {
        $this->stavPaliva = min($this->objemNádžerky, $this->stavPaliva + $amount);
    }

    public function drive($distance)
    {
        $fuelUsed = $distance * ($this->spotřeba / 100);
        $this->stavPaliva -= $fuelUsed;
    }
}


// Example usage
$myCar = new Vehicle("Škoda Octavia", 50, 7);

// Check initial fuel level
echo "Fuel level: " . $myCar->getRemainingFuel() . " liters\n";

// Drive for 100 kilometers
$myCar->drive(100);

// Check remaining fuel after driving
echo "Fuel level after driving: " . $myCar->getRemainingFuel() . " liters\n";

// Refill the tank
$myCar->refill(20);

// Check remaining fuel after refill
echo "Fuel level after refill: " . $myCar->getRemainingFuel() . " liters\n";
