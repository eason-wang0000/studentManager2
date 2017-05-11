<?php
   header("content-type:text/html;charset=utf-8");
   session_start();
   unset($_SESSION['name']);
   echo '<script>alert("退出成功");location="login.html";</script>';
?>