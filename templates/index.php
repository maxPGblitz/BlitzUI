<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #282E39;
	text-align: center;
}
.test {
}
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="5" cellspacing="5">
  <tbody>
    <tr>
      <td width="100">&nbsp;</td>
      <td align="center"><h1><strong style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">PG User Interface (PG UI)</strong></h1></td>
      <td width="100" align="center"><img src="https://camo.githubusercontent.com/2d9a1f02588a2f0635117ab3e43dca618344c895/68747470733a2f2f706c657867756964652e636f6d2f77696b69706963732f6c6f676f2e706e67" width="75" height="75" alt=""/></td>
    </tr>
  </tbody>
</table>
<br>
<table width="550" align="center" cellpadding="5">
  <tbody>
    <tr>
      <td width="25%" style="text-align: center"><a href="https://plexguide.com/forums"><img src="https://camo.githubusercontent.com/6a9261977df6c815e4c1c0be4131cc243e7f9496/68747470733a2f2f706c657867756964652e636f6d2f77696b69706963732f6c6f676f2d666f72756d732e706e67" alt="" width="160" height="25"/></a></td>
      <td width="25%" style="text-align: center"><a href="https://github.com/Admin9705/PlexGuide.com-The-Awesome-Plex-Server/wiki"><img src="https://camo.githubusercontent.com/b654870b2693e9f82158f87fda567a2d9e4828f8/68747470733a2f2f706c657867756964652e636f6d2f77696b69706963732f6c6f676f2d77696b692e706e67" alt="" width="160" height="25"/></a></td>
      <td width="25%" style="text-align: center"><a href="https://plexguide.com/account/upgrades"><img src="https://plexguide.com/account/upgrades" alt="" width="160" height="25"/></a></td>
    </tr>
  </tbody>
</table>
<br>
<table width="98%" border="1" align="center" cellpadding="10" cellspacing="0">
  <tbody>
    <tr>
      <td width="125" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold;"> <strong>Edition</strong></td>
      <td width="50%" height="30" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
        <?php $output = shell_exec('cat /plexguide/pg.transport');
echo "<pre>$output</pre>";
?>
      </span></td>
      <td width="125" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><strong>Version</strong></td>
      <td width="50%" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
        <?php $output = shell_exec('cat /plexguide/pg.number');
echo "<pre>$output</pre>";
?>
      </span></td>
    </tr>
  </tbody>
</table>
</body>
</html>
