<?php
class Product
{
    public $name;
    protected $price;
    public $cost;
    public $description;
    public static $country;

    // public $shutter_speed;
    // public $exposure;

    // public $color_mode;
    // public $ppm;

    // public $screen_size;
    // public $resulotion;

    // public $ram;
    // public $processor;

    function card()
    {
        $x = "<tr>
                <td> $this->name </td>
                <td> $this->description </td>
                <td> $this->cost EGP</td>
                <td> $this->price EGP</td>
                <td>" . self::$country . "</td>
        </tr>";
        echo $x;
    }

    function calc_price()
    {
        // return $this->price = $this->cost * 0.1 + $this->cost;
        // use this instead
        return $this->price = $this->cost * 1.1 * 1.14;
    }
}

class DigitalCamera extends Product
{
    // public $name;
    // private $price;
    // public $cost;
    // public $description;
    // public static $country;

    public $shutter_speed;
    public $exposure;

    function card()
    {
        $x = "<tr>
                <td> $this->name </td>
                <td> $this->description </td>
                <td> $this->cost EGP</td>
                <td> $this->price EGP</td>
                <td>" . self::$country . "</td>
                <td> $this->shutter_speed </td>
                <td> $this->exposure </td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>

        </tr>";
        echo $x;
    }
    function calc_price()
    {
        // return $this->price = $this->cost * 0.1 + $this->cost;
        // use this instead
        return $this->price = $this->cost * 1.25 * 1.14;
    }
}

class SmartTv extends Product
{
    // public $name;
    // private $price;
    // public $cost;
    // public $description;
    // public static $country;

    public $screen_size;
    public $resulotion;
    function card()
    {
        $x = "<tr>
                <td> $this->name </td>
                <td> $this->description </td>
                <td> $this->cost EGP</td>
                <td> $this->price EGP</td>
                <td>" . self::$country . "</td>
                <td>-</td>
                <td>-</td>
                <td> $this->screen_size</td>
                <td> $this->resulotion</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>

        </tr>";
        echo $x;
    }
    function calc_price()
    {
        // return $this->price = $this->cost * 0.1 + $this->cost;
        // use this instead
        return $this->price = $this->cost * 1.5 * 1.14;
    }
}

class Printer extends Product
{
    // public $name;
    // private $price;
    // public $cost;
    // public $description;
    // public static $country;

    public $color_mode;
    public $ppm;
    function card()
    {
        $x = "<tr>
                <td> $this->name </td>
                <td> $this->description </td>
                <td> $this->cost EGP</td>
                <td> $this->price EGP</td>
                <td>" . self::$country . "</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td> $this->color_mode</td>
                <td> $this->ppm</td>
                <td>-</td>
                <td>-</td>

        </tr>";
        echo $x;
    }
    function calc_price()
    {
        // return $this->price = $this->cost * 0.1 + $this->cost;
        // use this instead
        return $this->price = $this->cost * 1.1;
    }
}

class Laptop extends Product
{
    // public $name;
    // private $price;
    // public $cost;
    // public $description;
    // public static $country;

    public $ram;
    public $processor;
    function card()
    {
        $x = "<tr>
                <td> $this->name </td>
                <td> $this->description </td>
                <td> $this->cost EGP</td>
                <td> $this->price EGP</td>
                <td>" . self::$country . "</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td> $this->ram</td>
                <td> $this->processor</td>

        </tr>";
        echo $x;
    }
    function calc_price()
    {
        // return $this->price = $this->cost * 0.1 + $this->cost;
        // use this instead
        return $this->price = $this->cost * 1.3;
    }
}