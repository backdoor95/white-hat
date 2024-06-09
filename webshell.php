<?php
  header("Content-Type: text/html; charset=UTF-8");
  $mode = $_REQUEST["mode"]; #request는 get, post, cookie 다 받음
  $page = basename($_SERVER["PHP_SELF"]);# 자신의 웹 어플리케이션 자원에 url 정보가 나옴. 근데 우리는 맨 마지막 webshell.php만 필요해서 #basename을 사용
  # php 문법에서 ';'를 빼먹지 말자!!!!@!
?>
<!doctype html>
<html lang="ko">
  <head>
    <title>JunHo WebShell</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h3>Web Shell <small>Create by JunhoMun</small></h3>
      <hr>
      <ul class="nav nav-tabs">
        
          <!-- 주의 : short open tag 가 On이여도 적용이 안될 경우가 있다. 따라서 그냥 php를 붙이자.==> 표준을 지키는게 좋다. php를 붙이는것이 표준 -->
        <li role="presentation" <?php if(empty($mode) || $mode == "fileBrowser") echo "class=\"active\"";?>><a href="<?=$page?>?mode=fileBrowser">File Browser</a></li>
        <li role="presentation" <?php if($mode == "fileUpload") echo "class=\"active\"";?>><a href="<?=$page?>?mode=fileUpload">File Upload</a></li>
        <li role="presentation" <?php if($mode == "command") echo "class=\"active\"";?>><a href="<?=$page?>?mode=command">Command Execution</a></li>
        <li role="presentation" <?php if($mode == "db") echo "class=\"active\"";?>><a href="<?=$page?>?mode=db">DB Connector</a></li>
        <li role="presentation"><a href="<?=$page?>?mode=logout">Logout</a></li>
      </ul>
      content
      <hr>
      <p class="text-muted text-center">Copyrightⓒ 2024, JunhoMun, All right reserved.</p>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
</body>
</html>