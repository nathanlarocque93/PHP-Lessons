<?php

    if (isset($_POST['name'])) {
            $result = mysqli_querry($mysqli, "
            INSERT INTO countries (
                name,
                description,
                population
            ) VALUE (
                '{$_POST['name']}',
                '{$_POST['description']}',
                {$_POST['population']}
            )
        ");
        if ($result) {
            echo "The new country was created successfully";
        } else {
            echo "There was an error creating the new country";
        }
        }

    
 ?>