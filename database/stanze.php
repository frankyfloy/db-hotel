
<?php

    include_once __DIR__.'.\dbCall.php';

    header('Content-Type: application/json');

    // var_dump($conn);
    if (!empty($_GET) && $_GET['id']) {
        $id = $_GET['id'];
        $result = [];

        $stmt = $conn->prepare("SELECT * FROM stanze WHERE id = ?");
        $stmt->bind_param("i", $id);

        $stmt->execute();
        $rows = $stmt->get_result();

        while($row = $rows->fetch_assoc()) {
            $result[] = $row;
        }

        echo json_encode([
            "response" => $result,
            "success" => true,
        ]);

    }else {

        $sql = "SELECT * FROM stanze";
        $rows = $conn->query($sql);

        $result = [];

        if ($rows && $rows->num_rows > 0) {
            while($row = $rows->fetch_assoc()) {
                $result[] = $row;
            }
        }

        echo json_encode([
            "response" => $result,
            "success" => true,
        ]);
    }
    $conn->close();
?>
