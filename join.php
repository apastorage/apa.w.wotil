<?php
$language  = $_GET['lan'];
switch ($language) {
case 'ru':
break;
case 'de':
header("Location:under.php?lan=de");
break;
case 'en':
header("Location:under.php?lan=de");
break;
default: 
header("Location:under.php?lan=de");
break;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="verContent-Type" verContent="text/html; charset=windows-1251" />
	<link rel="stylesheet" type="text/css" href="Dev_Data/Css/main_style.css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Mono&subset=latin,cyrillic' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css' />
</head>
<body id="body">
	<table id="tblSkeleton" border="0" >
		<tr>
			<td>
				<table id="tblContent" border="0">
					<tr>
						<td>
						<div class="divEn">
						<?php
							switch ($language) {
							case 'ru':
							echo ' <div class="divRu">
									<h4> Вступление в клан "RENAM". </h4>
									</div> ';
							break;
							default: 
							echo ' <div class="divRu">
									<h4> Вступление в клан "RENAM". </h4>
									</div> ';
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="Dev_Data/Img/Cnt/join.png" height="200" width="500">
						</td>
					</tr>
					<tr height="10">
					</tr>
					<tr>
						<td colspan="2">
						<?php
							switch ($language) {
							case 'ru':
							echo ' 	
									<div class="divRu">
										Набором рекрутов в клан занимаются определённые игроки.
										Если у вас есть желание вступить в клан - то пожалуйста ознакомьтесь со следующими принципами клана.
										<br />
										<br />
										1) Нет никаких определённых требований по участию в событиях клана. 
										Каждый игрок определяет свою степень участия в событиях клана по желанию.
										<br />
										<br />
										2) Нет никаких обозначенных требований по онлайну. 
										Каждый игрок учавствует в боевых операциях клана тогда, когда ему удобнее.
										<br />
										<br />
										3) Нет никаких специальных требований по снаряжению. 
										Каждый игрок, во время командных боёв, может выбирать подходящий танк, метод связи и стиль боя исходя из своих предпочтений. 
										<br />
										<br />
										Подать заявку на вступление - можно на странице клана <b>  <a class="href" href="http://ru.wargaming.net/clans/wot/52398">[RENAM]</a> </b> или из клиента WoT.
										<br />										
									</div>';
							break;
							case 'en':
							echo ' <h3> 261. Special Tank Division "Prince Paul" </h3> ';
							break;
							case 'de':
							echo ' <h3> 261. Spezille-Panzer-Division "Prinz Paul" </h3> ';
							break;
							default: 
							echo ' 261. Spezille-Panzer-Division "Prinz Paul" </h3> ';
							}
						?>
							<div align="right">
						</div>
						</td>
					</tr>
					<tr>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
</body>
</html>