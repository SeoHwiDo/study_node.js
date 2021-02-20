<?php session_start(); ?>
<script>
function permitLink(phpfile,lev){
     if(<?= $_SESSION['permit'] ?>>=lev){
        location.href=phpfile;
    }else{
        alert("권한이 없습니다. 관리자에게 문의하세요");
        location.href='index.php';
        }
    }


function logout(){
    location.href='logout.php';

    alert("로그아웃되었습니다.");
}

function modInfo(){
    location.href='modInfo.php';
}
</script>
