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
    <title>마이 페이지</title>

    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
    <!-- skip -->
    <?php
        include "../include/skip.php";
    ?>
    
    <!-- header -->
    <?php
        include "../include/header.php";
    ?>

    <!-- contents -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3 class="mb30">회원 정보</h3>
                <div class="join-intro">
                    <div class="face">
                        <img src="../assets/img/mypage/default.svg" alt="기본 이미지">
                    </div>
<?php
    //youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro
    $sql = "SELECT youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro FROM myMember";
    $result = $connect -> query($sql);
    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo "<div class='intro'>".$memberInfo['youIntro']."</div>";
?>
                </div>
                <div class="join-info">

<?php
    //이메일
    echo "<li><strong>이메일</strong><span>".$memberInfo['youEmail']."</span></li>";
    //닉네임
    echo "<li><strong>닉네임</strong><span>".$memberInfo['youNickName']."</span></li>";
    //이름
    echo "<li><strong>이름</strong><span>".$memberInfo['youName']."</span></li>";
    //생일
    echo "<li><strong>생일</strong><span>".$memberInfo['youBirth']."</span></li>";
    //번호
    echo "<li><strong>번호</strong><span>".$memberInfo['youPhone']."</span></li>";
    //성별
    echo "<li><strong>성별</strong><span>".$memberInfo['youGender']."</span></li>";
    //사이트
    echo "<li><strong>사이트</strong><span>".$memberInfo['youSite']."</span></li>";
?>

                        <!-- <li>
                            <strong>이메일</strong>
                            <span>1111@naver.com</span>
                        </li> -->
                    </ul>
                </div>
                <div class="join-btn">
                    <a href="mypageModify.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                </div>
            </div>
        </section>
    </main>
    

    <!-- footer -->
    <?php
        include "../include/footer.php";
    ?>
</body>
</html>