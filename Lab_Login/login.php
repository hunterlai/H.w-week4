<?php
session_start();
if(isset($_GET["logout"])){
  unset($_SESSION["usName"]);
  header("location: index.php");
  exit();
}
if(isset($_POST["btnHome"])){
    // echo "OK";
    header("location: index.php");
    exit();
}
if(isset($_POST["btnOK"])){
  // echo "OK";
  $xuserName=$_POST["txtUserName"];
    if( trim($xuserName) != ""){
      $_SESSION["usName"] = $xuserName;
      // echo $xuserName;
      header("location: index.php");
      exit();
    }
}

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" placeholder="at least one capital letter" pattern="\w+[A-Z]+\w+"></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>