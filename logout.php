<?php
    session_start();
    $res=session_destroy(); //모든 세션 변수 지우기 = 로그인된 정보 모두 파괴
    
    if($res)
        header('Location: ./index.php'); // 로그아웃 성공 시 로그인 페이지로 이동
?>
