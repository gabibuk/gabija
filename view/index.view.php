<?php 
    use OOP\Vehicles; 
    use OOP\Car; 
    use OOP\Bicycles; 
    use OOP\Bike; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=3.0">
        <title>PHP OOP demo</title>
    </head>
    <body>
        <?php
            $masina = new Car('A4', 'Audi');
            echo $masina . "<br>"; 
            $dviratis = new Car('350', 'Bmx');
            echo $dviratis . "<br>"; 
            $bike = new Car('yzf-350', 'Yamaha');
            echo $bike . "<br>"; 
            $transportas = new Car('300', 'Yammaha');
            echo $transportas . "<br>"; 
          
            

        
            // $user = new User('Jonas', 'jonas@one.lt'); // sukuriamas naujas objektas
            // $user->addLocation('Kaunas');
            // $user->addRole('Admin');
            // var_dump($user->getInfo()); // isvedame informacija apie objekta


        ?>
    </body>
</html>