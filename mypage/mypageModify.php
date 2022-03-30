<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보 수정</title>
</head>
<body>
    <?php
        $youEmail = $_POST['youEmail'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        $youPass = $_POST['youPass'];

        $sql = "SELECT youPass FROM myMember";
        $result = $connect -> query($sql);
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        
        if($memberInfo['youPass'] == $youPass){
            $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}' WHERE youPass = '{$youPass}'";
            $connect -> query($sql);
            echo "<script>alert('수정이 완료되었습니다.');</script>";
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요!'); history.back(1)</script>";
        }
    ?>
    <script>
        location.href = "mypage.php";
    </script>
</body>
</html>