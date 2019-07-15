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
									<h4> Условия участия в клане "RENAM". </h4>
									</div> ';
							break;
							default: 
							echo ' <div class="divRu">
									<h4> Условия участия в клане "RENAM". </h4>
									</div> ';
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="Dev_Data/Img/Cnt/requirement.png" height="200" width="500">
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
									На данный момент, в клане установлены минимальные условия сохранения участия - количество добытого промресурса в укрепрайоне за месяц.
									<br />
									<br />
									По этому критерию игрокам назначаются звания и определяется степень их соответствия общим целям клана.
									<br />
									<br />
									<b><font color="#e70000">Текущее требование участия </b> - добыча <b> 200 </b> промресурса за месяц в укрепрайоне </font> (это не много - примерно 15 победных боёв в месяц, на технике 6 уровня в укрепрайоне).
									<br />
									<br />
									Данное условие не распространяется на активных участников клана, а также на других определённых игроков, по согласованию с командованием. <font color="#e70000">Больше, никаких определённых условий сохранения участия нет!!!</font>	
									<br />										
									</div>';
							break;
							case 'en':
							echo ' ';
							break;
							case 'de':
							echo ' ';
							break;
							default: 
							echo ' ';
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