<?php
abstract class Vehicle
{
    // declare properties with private access modifier for better encapsulation
    private $znacka;
    private $stavPaliva; // in liters, [float]
    private $objemNadrze; // in liters, [float]
    private $spotreba; // [float], litry na 100km

    public static function createVehicle($type)
    {
        $type = strtolower($type); // selection case-insensitive

        if ($type === "petrol") {
            return new PetrolVehicle();
        } elseif ($type === "diesel") {
            return new DieselVehicle();
        } else {
            throw new Exception("Unknown vehicle type! Choose petrol or diesel");
        }
    }

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
class PetrolVehicle extends Vehicle
{
    private $candle;
    public function __construct($znacka, $objemNadrze, $spotreba, $candle)
    {
        parent::__construct($znacka, $objemNadrze, $spotreba);
        $this->candleStatus = $candle;
    }
    // methods specific to petrol vehicle
    public function getCandlesStatus()
    {
        return $this->candle . "%";
    }
}

class DieselVehicle extends Vehicle
{
    private $solidParticles;

    public function __construct($znacka, $objemNadrze, $spotreba, $solidParticles)
    {
        parent::__construct($znacka, $objemNadrze, $spotreba); // call parent constructor
        $this->solidParticles = $solidParticles;
    }
    // method to get solid particle status
    public function getSolidParticlesStatus()
    {
        return $this->solidParticles . "%";
    }

}

// function to select vehicle type
function selectVehicleType()
{
    while (true) {
        $choice = readline("Select vehicle type (petrol / diesel)");
        $choice = strtolower($choice);

        if ($choice === "petrol" || $choice === "diesel") {
            return $choice;
        } else {
            echo "Invalid choice. Enter petrol or diesel \n";
        }
    }
}

// example use
$vehicleType = selectVehicleType();
$myVehicle = Vehicle::createVehicle("Brand");

if ($vehicleType === "petrol") {
    $myVehicle = Vehicle::createVehicle($vehicleType, "Brand", 50, 5.0, 95); // Pass brand, tank capacity, consumption, and candle status
} elseif ($vehicleType === "diesel") {
    $myVehicle = Vehicle::createVehicle($vehicleType, "Brand", 50, 5.0, 10); // Pass brand, tank capacity, consumption, and solid particles status
}

$myVehicle->refill(50);

if ($myVehicle instanceof PetrolVehicle) {
    echo "Candle status " . $myVehicle->getCandlesStatus() . "\n";
} else {
    echo "Solid particles status " . $myVehicle->getSolidParticlesStatus() . "\n";
}

?>