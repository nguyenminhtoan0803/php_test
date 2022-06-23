<?php
# Structure of a match expression
// $return_value = match (subject_expression) {
//     single_conditional_expression => return_expression,
//     conditional_expression1, conditional_expression2 => return_expression,
// };

    $food = 'cake';

    $return_value = match ($food) {
        'apple' => 'This food is an apple',
        'bar' => 'This food is a bar',
        'cake' => 'This food is a cake',
    };

    $age = 55;

    $result = match (true) {
        $age >= 65 => 'senior',
        $age >= 25 => 'adult',
        $age >= 18 => 'young adult',
        default => 'kid',
    };

    var_dump($result);

    $countries = ['Belgium', 'Netherlands'];
     $spoken_languages = [
         'Dutch' => false,
         'French' => false,
         'German' => false,
         'English' => false,
     ];

     foreach ($countries as $country) {
         match($country) {
             'Belgium' => [
                 $spoken_languages['Dutch'] = true,
                 $spoken_languages['French'] = true,
                 $spoken_languages['German'] = true,
             ],
             'Netherlands' => $spoken_languages['Dutch'] = true,
             'Germany' => $spoken_languages['German'] = true,
             'United Kingdom' => $spoken_languages['English'] = true,
         };
     }

     var_export($spoken_languages); 
     // array ( 'Dutch' => true, 'French' => true, 'German' => true, 'English' => false, )
?> 