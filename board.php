<?php include 'template/header.php'; ?>

<?php
    $action = $_GET['action'];
    $boardId = $_GET['boardId'];
    $userId = $_SESSION['user_id'];

    if($action) {
        if($action === 'comment') {
            $comment = $_POST['comment'];
            $sql = "INSERT INTO table_comment 
                    (
                        comment_content,
                        comment_board_id,
                        comment_member_id
                    ) VALUES (
                        '$comment',
                        '$boardId',
                        '$userId'
                    ) ";
            $result = $conn->exec($sql);
            if($result) {
                echo "<script>alert('คอมเม้นเสร็จแล้วนะ')</script>";
                echo "<script>
                        window.location = 'board.php?boardId=$boardId'
                    </script>";
            } else {
                echo "<script>alert('มีบางอย่างผิดพลาด')</script>";
                echo "<script>window.history.back()</script>";
            }
            exit();
        }
    }
?>

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

    <div class="wrap-comment">
        <form action="board.php?action=comment&boardId=<?php echo $result['board_id']; ?>" method="post">
            <textarea class="form-control" name="comment" id="" cols="30" rows="10"></textarea>
            <input class="btn btn-primary" type="submit" value="Comment">
        </form>
    </div>
</div>

<?php include 'template/footer.php'; ?>