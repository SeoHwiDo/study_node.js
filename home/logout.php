<?php
    session_start();
    session_destroy();
?>
<script>
    alert("로그아웃되었습니다.");
</script>
<meta http-equiv="refresh" content="0;url=index.php" />