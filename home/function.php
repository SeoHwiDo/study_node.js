<script>
function permitLink(phpfile,lev){

<?php
    $lev = '<script>lev</script>'; 
    if($_SESSION['permit']>=$lev){
?>

        location.href=phpfile;
    }
</script>

<?php
}else{
?>
<script>
    alert("권한이 없습니다. 관리자에게 문의하세요");
    history.back();
</script>
<?php
}
?>

