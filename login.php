<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/redrush_login.css" rel="stylesheet" type="text/css" />
</head>

<body class="landingPage">
<form name="Form2" method="post" action="index.php" id="Form2">
  <div class="mainPage">
    <div class="headerLandingPage"></div>
    <!-- close header -->
    <input name="hdnErrorMsgs" type="hidden" id="hdnErrorMsgs" value="Bagian-bagian dengan tanda bintang ('*') wajib diisi. " />
    <div class="content">
      <div id="mainPanel">
        <P><FONT color=#f5f5dc></FONT> </P>
        <!-- Placeholder in CMS to add any content required -->
      </div>
      <div class="formLanding">
        <div id="divLoginBox" class="loginBox">
          <div class="loginBoxTitle">
            <P> </P>
          </div>
          <div class="row">
            <label for="txtUserName"> User ID </label>
            <input name="txtUserName" type="text" maxlength="60" id="txtUserName" class="lpInput" />
          </div>
          <div class="row">
            <label for="txtPassword"> Password </label>
            <input name="txtPassword" type="password" maxlength="12" id="txtPassword" class="lpInput" />
          </div>
          <div class="smSubmit"><a onclick="return validateCheck();" id="lnkBtnSubmit" href="index.php">Login</a></div>
          <p class="error"><span id="lblError"></span></p>
          <div class="forgottenpassword"><a id="lnkBtnForgotPwd" href="javascript:__doPostBack('lnkBtnForgotPwd','')">Forgot Password?</a></div>
          <div class="loginBoxClose"></div>
        </div>
        <div id="divRegisterBox" class="registerBox">
          <div class="registerBoxTitle">
            <P> </P>
          </div>
          <div class="smSubmit"><a onclick="pageTracker._trackEvent('Register', 'Click');" id="lnkBtnRegister" href="javascript:__doPostBack('lnkBtnRegister','')">Register</a></div>
          <div class="registerBoxClose"></div>
        </div>
        <div class="formLandingClose"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class=footer>
      <div class="text style1">Informasi dalam website ini di tujukan untuk perokok berusia 18 tahun atau lebih dan tinggal di wilayah Indonesia</div>
      <div class=navigation>
        <ul>
          <li ><A href="/Templates/LandingPage.aspx">Halaman Utama</A>
          <li ><A href="/Templates/Termsandconditions.aspx" target=_Blank>Syarat dan ketentuan</A>
          <li ><A href="/Templates/RemoveMe.aspx">Hapus Saya</A>
          <li style="display:none"><A href="/demoPages/PMISite.htm" target=_Blank>PMI Corporate</A>
          <li ><A href="/Templates/FAQ.aspx" target=_Blank>Daftar Pertanyaan</A>
          <li ><A href="/Templates/Contactus.aspx" target=_Blank>Kontak Kami</A>
          <li class=last id=health ><A href="http://www.pmi.com/id/smokingandhealth" target=_Blank>Perihal Merokok</A></li>
        </ul>
      </div>
    </div>
  </div>
</form>
</body>
</html>