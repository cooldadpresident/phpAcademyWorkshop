<?php
class Vehicle
{
    // declare properties with private access modifier for better encapsulation
    private $znacka;
    private $stavPaliva; // in liters, [float]
    private $objemNadrze; // in liters, [float]
    private $spotreba; // [float], litry na 100km

    public function __construct($znacka, $objemNadrze, $spotreba)
    {
        // Data validation for positive values
        if ($objemNadrze <= 0 || $spotreba <= 0) {
            throw new InvalidArgumentException("Fuel tank capacity and consumption must be positive values");
        }

        $this->znacka = $znacka;
        $this->objemNadrze = $objemNadrze;
        $this->spotreba = $spotreba;
        $this->stavPaliva = $objemNadrze; // start with full tank 
    }

    // Getter method for remaining fuel with private access modifier for stavPaliva
    public function getRemainingFuel()
    {
        return $this->stavPaliva;
    }

    public function isTankEmpty()
    {
        return $this->stavPaliva <= 0;
    }

    // Data validation for positive refill amount
    public function refill($amount)
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Refill amount must be positive");
        }

        $this->stavPaliva = min($this->objemNadrze, $this->stavPaliva + $amount);
    }

    // Error handling to prevent driving with empty tank
    public function drive($distance)
    {
        if ($this->isTankEmpty()) {
            throw new RuntimeException("Cannot drive with empty tank");
        }

        $fuelUsed = $distance * ($this->spotreba / 100);
        $this->stavPaliva -= $fuelUsed;
    }
}

// example car 

$mycar = new Vehicle("Lambo", 50, 7);

// check initial fuel level
echo "Initial fuel: " . $mycar->getRemainingFuel() . " liters\n";

// drive for 100 kilometers 
$mycar->drive(100);

// check remaining fuel after driving 100km
echo "Remaining fuel after driving " . $mycar->getRemainingFuel() . " liters\n";

// refill
$mycar->refill(1);

// check remaining fuel after refill
echo "Remaining fuel after refill " . $mycar->getRemainingFuel() . " liters\n";
?>