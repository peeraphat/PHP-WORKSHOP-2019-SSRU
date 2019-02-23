<?php include 'template/header.php'; ?>

<?php 
    $boardId = $_GET['boardId'];
    
    $sql = "SELECT * FROM table_board 
            WHERE board_id = '$boardId' ";
    $query = $conn->query($sql);
    $result = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h2>board ID: <?php echo $_GET['boardId']; ?></h2>

    <h3><?php echo $result['board_topic']; ?></h3>
    <p><?php echo $result['board_content']; ?></p>
</div>

<?php include 'template/footer.php'; ?>