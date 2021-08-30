<?php
    //post 인데 get 으로 했을 때 response가 오는 것도 이상한데? ㅋㅋㅋ 
    //-> 라이브 서버에서는 post가 안되는가봐 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    // db연결

   // $sql = 'INSERT INTO TMP VALUES($name, $email, $msg)';

    //response
    $txt = '';
    $txt .= $name.',';//.은 누적연산
    $txt .= $email.',';//.은 누적연산
    $txt .= $msg;//.은 누적연산

    echo json_encode($txt);
?>