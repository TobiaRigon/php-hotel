<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>php-hotel</title>
</head>
<body>
<div class="container">
        <table class="table">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Distance to Center</th>
                </tr>
            </thead>
            <tbody>
    <?php

        $hotels = [

            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],

        ];

        foreach ($hotels as $index => $hotel) {
            echo "<tr >";
            echo "<th class='row'>" . ($index + 1) . "</th>";
            echo "<td>" . $hotel["name"]  . "</td>";
            echo "<td><span class='descrizione'>" . $hotel["description"] . "</span></td>";
            echo "<td>";
            if ($hotel['parking']) {
                echo '<i class="fa-solid fa-square-parking" style="color: #63E6BE;"></i>';
            } else {
                echo '<i class="fa-solid fa-square-parking" style="color: red;"></i>';
            }
            echo "</td>";
            echo "<td>";
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $hotel["vote"]) {
                    echo '<i class="fa-solid fa-star"></i>';
                }  else {
                    echo '<i class="fa-regular fa-star"></i>';
                }
            }
            echo "</td>";
            echo "<td><i class='fa-solid fa-person-walking-arrow-right'></i> " . $hotel["distance_to_center"] . 'm</td>';
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div>
</body>
</html>

<style>
     :root {
        font-family: Arial, sans-serif;
        font-size: 18px
    }

    h2 {
        margin-bottom: 5px;
    }

    .descrizione {
        color: #666;
        font-style: italic;
        display: block;
        margin-bottom: 10px;
    }

    .fa-square-parking {
        margin-right: 5px;
    }

    .rating {
        color: #FFD700;
    }

    .rating i {
        font-size: 20px;
        margin: 0 2px;
    }
   
</style>

