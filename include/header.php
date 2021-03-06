<header id="header">
    <h1 class="logo">
        <a href="../pages/main.php">PHP <em>class</em></a>
    </h1>
    <nav class="menu">
        <h2 class="ir_so">메인 메뉴</h2>
        <ul>
            <li><a href="../login/join.php">회원가입</a></li>
            <li><a href="../comment/comment.php">댓글</a></li>
            <li><a href="../board/board.php">게시판</a></li>
            <li><a href="../blog/blog.php">블로그</a></li> 
            <li><a href="../quiz/quiz.php">퀴즈</a>
                <ul class="sub">
                    <li><a href="../quiz/quizCreate.php">문제 만들기</a></li>
                    <li><a href="../quiz/quiz.php">문제 풀기</a></li>
                    <li><a href="../quiz/quizExam.php">기출 문제</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="member">
        <span class="ir_so">회원정보 영역</span>
        <?php if(isset($_SESSION['memberID'])){ ?>
                <a href="../mypage/mypage.php" class="setting">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_2_967" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="60" height="60">
                            <path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_2_967)">
                            <path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="#414141"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.999 60.152H52.308V53.047C52.308 50.7 50.703 47.731 48.744 46.452L37.874 39.851C37.024 39.347 36.049 38.614 36.049 36.466C36.049 35.06 37.235 33.947 37.591 33.506C39.3365 31.6131 40.3042 29.1318 40.301 26.557V21.292C40.301 15.584 35.691 12.308 29.999 12.308C24.307 12.308 19.697 15.584 19.697 21.292V26.557C19.697 29.247 20.729 31.675 22.407 33.505C22.764 33.947 23.95 35.06 23.95 36.465C23.95 38.614 22.974 39.347 22.124 39.851L11.253 46.452C9.29399 47.732 7.69299 50.7 7.69299 53.047V60.152H29.999Z" fill="#595959"/>
                        </g>
                    </svg>
                    <?=$_SESSION['youName']?>님 환영합니다.
                </a>
        <?php } else { ?>
                <a href="../login/join.php">회원가입</a>
                <a href="../login/login.php">로그인</a>
        <?php } ?>
    </div>
        
</header>