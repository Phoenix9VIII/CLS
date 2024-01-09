<?php
include 'product.php';

Product::$country = "Egypt";
// echo Product::$country;
$p1 = new DigitalCamera;
$p1->name = "D700";
$p1->description = "The Best DSLR Camera";
$p1->cost = 15000;
// $p1->price = 18000;
$p1->calc_price();
$p1->shutter_speed = "10 Shoots";
$p1->exposure = 1.4;

// $p1->color_mode;
// $p1->ppm;

// $p1->screen_size;
// $p1->resulotion;

// $p1->ram;
// $p1->processor;


$p2 = new Printer;
$p2->name = "InkJet 300";
$p2->description = "Print as Fast as You Read";
$p2->cost = 15000;
// $p2->price = 9500;
$p2->calc_price();
// $p2->shutter_speed;
// $p2->exposure;

$p2->color_mode = "Lazer";
$p2->ppm = 20;

// $p2->screen_size;
// $p2->resulotion;

// $p2->ram;
// $p2->processor;

$p3 = new SmartTv;
$p3->name = "CU8000";
$p3->description = "Clear Like Your Dream";
$p3->cost = 15000;
// $p3->price = 19000;
$p3->calc_price();
// $p3->shutter_speed;
// $p3->exposure;

// $p3->color_mode;
// $p3->ppm;

$p3->screen_size = "58 inch";
$p3->resulotion = "Qled";

// $p3->ram;
// $p3->processor;

$p4 = new Laptop;
$p4->name = "Yoga Thinkpad";
$p4->description = "Faster than Your Thoughts";
$p4->cost = "15000";
// $p4->price = "38000";
$p4->calc_price();
// $p4->shutter_speed;
// $p4->exposure;

// $p4->color_mode;
// $p4->ppm;

// $p4->screen_size;
// $p4->resulotion;

$p4->ram = "16GB";
$p4->processor = "Intel";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <table border="5">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Country</th>
            <th>Shutter Speed</th>
            <th>Exposure</th>
            <th>Screen Size</th>
            <th>Resulotion</th>
            <th>Color Mode</th>
            <th>PPM</th>
            <th>Ram</th>
            <th>Processor</th>
        </tr>
        <?php
        $p1->card();
        $p2->card();
        $p3->card();
        $p4->card();
        ?>
    </table>

    <!-- <?php echo $p1->cost; ?> -->
</body>

</html>