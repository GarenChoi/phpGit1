<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";
    $coardID = $_SESSION['boardID'];
    $boardID = $_POST['boardID'];
    $memberID = $_SESSION['memberID'];
    $youNickName = $_SESSION['youNickName'];
    $answerContents = $_POST['answerContents'];
    $regTime = time();

    $sql = "INSERT INTO teamBoardTAnswer(boardID, memberID, answerContents, youNickName, regTime) VALUES('$boardID', '$memberID', '$answerContents', '$youNickName', '$regTime');";
    $result = $connect -> query($sql);

    $sql2 = "SELECT t.boardID, t.answerContents, t.youNickName, m.youPhoto, t.regTime FROM teamBoardTAnswer t JOIN myTeam m ON(t.memberID = m.memberID) WHERE boardID = {$coardID} ORDER BY regTime ASC";
    $result2 = $connect -> query($sql2);

    // $answerInfo = $result2 -> fetch_array(MYSQLI_ASSOC);
    
    echo json_encode(array("answer" => $answerInfo));
?>
 