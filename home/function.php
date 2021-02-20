<script>
function permitLink(phpfile,lev){

    if(<?= $_SESSION['permit'] ?>>=lev){
        location.href=phpfile;
    }else{
        alert("권한이 없습니다. 관리자에게 문의하세요");
        history.back();
        }
}
</script>