<?php
    include_once __DIR__.'\database\dbCall.php';

    // else {
    //     $sql = "SELECT id, room_number FROM stanze";
    //     $result = $conn->query($sql);
    //     if ($result && $result->num_rows > 0) {
    //
    //         while($row = $result->fetch_assoc()) {
    //             echo "Stanza N. ".$row['room_number']." id: ".$row['id'];
    //         }
    //
    //     } elseif ($result) {
    //         echo "0 results";
    //     } else {
    //         echo "query error";
    //     }
    //
    // }
    $conn->close();
?>
