<?php 
    include 'db/connection.php';

    $query = $conn->query('SELECT * FROM board_table');
    // var_dump($query);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    // print_r($results);
    foreach($results as $row) {
        echo $row['topic_board'];
        echo "<br />";
    }
    // var_dump($results);
    // echo "Hello PHP." ;

    // $money = 500 ; // Int

    // $type = "Bath." ; // String

    // // echo $money." ".$type ;

    // $arrayType = [ "Euro", "Bath", "Dollars", "Yen" ];

    // echo $money.' '.$arrayType[1];
?>