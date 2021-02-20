<script>
function permitLink(phpfile){
<?php
    if($_SESSION['permit']>=1){
?>
        location.href=phpfile;
    }
<?php
}else{
?>
    alert("권한이 없습니다. 관리자에게 문의하세요");
    history.back();
<?php
}
?>
function logout(){
<?php
    //session_destroy();
?>
    location.href="index.php";
}
</script>
