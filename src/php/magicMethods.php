class Car {
    private $maxSpeed = 210;
    function __get($name) { return @$this->$name; }
}
var_dump((new Car)->maxSpeed); // 210
var_dump((new Car)->numberOfWheels); // NULL
