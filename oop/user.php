<?php
// Singular
// Generic
// Capitalized

class User
{
    // $name = "Ali";
    //  Variable -> Property
    var $name;
    var $email;
    var $phone;
    var $password;
    var $address;

    // Function -> Method
    function hello()
    {
        $show = "<h1>Hello" . $this->name .  "</h1>";
        $show .= "<h1>Name:" . $this->name . "</h1>";
        $show .= "<h1>Email:" . $this->email . "</h1>";
        $show .= "<h1>Password:" . $this->password . "</h1>";
        $show .= "<h1>Phone:" . $this->phone . "</h1>";
        $show .= "<h1>Address:" . $this->address . "</h1>";
        $show .= "<hr>";
        echo $show;
    }
}


// Customer
// Invoice
// Vendor
// City
// Product
// Category