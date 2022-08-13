<?php
    $info1 = array('hash' => '3fd6b90411449ec718b1fa929c1ba72c52d89f2540c8b3a56ca9cb95fb63d00d');
    $info2 = array('hash' => 'dea377cac0fb2c6bfe8793ae282bf008b65b3aef6687d315200740ffa0847b4f');
    $info3 = array('hash' => 'ea3d5e5a5c627788779ba92e2f95260ea27e5653801cead2e7cd91351bb3b526');
    $info4 = array('hash' => '9ea2f240c6fbaf4c9bdafbae7b5f1940d36f0ee169798363dba3b8120ee33812');
    
    setcookie('COOKIE_1',json_encode($info1),time() + 7200);
    setcookie('COOKIE_2',json_encode($info2),time() + 7200);
    setcookie('COOKIE_3',json_encode($info3),time() + 3600);
    setcookie('COOKIE_4',json_encode($info4),time() + 3600);

    if(isset($_COOKIE['COOKIE_1'])){
        $cookie1 = $_COOKIE['COOKIE_1'];
        $cookie2 = $_COOKIE['COOKIE_2'];
        $cookie3 = $_COOKIE['COOKIE_3'];
        $cookie4 = $_COOKIE['COOKIE_4'];

        $arquivo = fopen('./ex_51/cookies.txt','w');
        fwrite($arquivo, $cookie1 );
        fwrite($arquivo, $cookie2 );
        fwrite($arquivo, $cookie3 );
        fwrite($arquivo, $cookie4 );
    }
?>