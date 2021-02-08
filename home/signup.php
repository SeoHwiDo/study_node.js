<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Add Employee</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <h1>회원가입</h1>
    <form action="db.php" method="POST">
  <p><input type="text"   name=userID placeholder="아이디" required></p>
  <p><input type="password" name=pass placeholder="비밀번호" required></p>
  <p><input type="text" name=age placeholder="나이"  required></p>
  <p><input type="text"   name=phone placeholder="전화번호" required></p>
  <button>ADD</button>
</form>
  </body>
</html>