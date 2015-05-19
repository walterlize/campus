<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>中国农业大学生产实习系统</title>

</head>
<frameset rows="87,*,32" id="_top_" name="_top_" frameborder="NO" border="0" framespacing="0">
    <frame src='<?=base_url();?>index.php/index/top5' name="topFrame"  scrolling="NO" noresize >
  <frameset cols="208,*" id="_middle_" name="_middle_">
		<frame src='<?=base_url();?>index.php/student/frame/menu2' name="leftFrame" frameborder="0" border="0" scrolling="NO" noresize>
		<frame src='<?=base_url();?>index.php/student/frame/main' name="mainFrame">
  </frameset>
  <frame src='<?=base_url();?>index.php/index/foot' name="bottomFrame" scrolling="NO" noresize>
</frameset><noframes></noframes>
 <body>

</body>
</html>
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>后台页面</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0">
                <table width="100%" align="center" cellspacing="0" bgcolor="#FFFFFF" style="margin-top:-3px;">
                    <tr>
                        <td valign="top">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td colspan="2" valign="top" height="150">
                                        <iframe name="Top" scrolling="no" noresize src="<?= base_url(); ?>index.php/index/top5" height="150" width="100%"
                                                frameborder="0"></iframe>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="245" height="575" align="center" valign="top">
                                        <iframe name="content" scrolling="no" noresize src="<?= base_url(); ?>index.php/student/frame/menu2" height="100%" width="245" frameborder="0">                                
                                        </iframe>
                                    </td>
                                    <td width="849" valign="top" height="575">
                                                          <!--<iframe name="content" scrolling="no" noresize src="index.html" height="100%" width="100%" frameborder="0"></iframe>-->
                                        <iframe name="content1" noresize src="<?= base_url(); ?>index.php/student/frame/main" height="100%" width="100%" frameborder="0">                
                                        </iframe>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="120" colspan="2">
                                        <iframe name="foot" scrolling="no" noresize src="<?= base_url(); ?>index.php/index/foot1" height="120" width="100%"
                                                frameborder="0"></iframe>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
            </html>