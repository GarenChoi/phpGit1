<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트</title>

    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
    
    <!-- header -->
    <?php
        include "../include/header.php";
    ?>

    <main id="contents">
        <h2 class="ir_so">게시판 영역</h2>
        <section id="board-type" class="section center type mb100">
            <div class="container">
                <h3 class="section__title">구기종목 블로그</h3>
                <p class="section__desc">구기종목과 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">


<?php $sql = "SELECT * FROM myBlog ORDER BY blogID DESC LIMIT 3";
    $result = $connect -> query($sql);?>
<?php
    
?>
<?php foreach($result as $blog){ ?> 
        <article class='blog'>
            <figure class='blog__header' aria-hidden="true">
                <a href="#" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>);"></a>
            </figure>
            <div class='blog__body'>
                <span class='blog__cate'><?=$blog['blogCategory']?></span>
                <div class='blog__title'><?=$blog['blogTitle']?></div>
                <div class='blog__desc'><?=$blog['blogContents']?></div>
                <div class='blog__info'>
                    <span class='author'><a href='#'><?=$blog['blogAuthor']?></a></span>
                    <span class='date'><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                </div>
            </div>
        </article>
<?php    } ?>

                    </div>
                    <div class="blog__btn">
                        <a href="../blog/blog.php">더 보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="notice-type" class="section center gray">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">종목별로 새로운 소식을 알려드립니다.</p>
                <div class="notice__inner">
                    <article class="notice">
                        <h4>게시판</h4>
                        <ul>

<?php
    $sql = "SELECT * FROM myBoard ORDER BY boardID DESC LIMIT 4";
    $result = $connect -> query($sql);
    foreach($result as $boardInfo){ ?>
        <li><a href="../board/boardView.php?boardID=<?=$boardInfo['boardID']?>"><?=$boardInfo['boardTitle']?></a><span class="time"><?=date('Y-m-d',$boardInfo['regTime'])?></span></li>

<?php } ?>

                        </ul>
                        <a href="../board/board.php" class="more">더 보기</a>
                    </article>
                    <article class="notice">
                        <h4>댓글</h4>
                        <ul>
<?php
    $sql = "SELECT * FROM myComment ORDER BY commentID DESC LIMIT 4";
    $result = $connect -> query($sql);
    foreach($result as $commentInfo){ ?>
        <li><a href="../comment/comment.php#comment_type"><?=$commentInfo['youText']?></a><span class="time"><?=date('Y-m-d',$commentInfo['regTime'])?></span></li>

<?php } ?>
                        </ul>
                        <a href="../comment/comment.php" class="more">더 보기</a>
                    </article>
                </div>
            </div>
        </section>
        <!-- //notice-type -->

    </main>

    <!-- footer -->
    <?php
        include "../include/footer.php";
    ?>
</body>
</html>