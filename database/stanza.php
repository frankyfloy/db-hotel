<?php
    include_once __DIR__.'.\dbCall.php';
    ?>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php

            $sql = "SELECT id, room_number FROM stanze";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['room_number'] ?></td>
                            </tr>
                        </tbody>
                <?php
                }
            } elseif ($result) {
                echo "0 results";

            } else {
                echo "query error";
            }
            ?>
            </table>
            <?php
    $conn->close();
?>
