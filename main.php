<?php
$language  = $_GET['lan'];
switch ($language) {
case 'ru':
break;
case 'by':
header("Location:under.php?lan=by");
break;
case 'ua':
header("Location:under.php?lan=ua");
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
<?php
$language  = $_GET['lan'];
?>
	<table id="tblSkeleton" border="0" >
		<tr>
			<td>
				<table id="tblContent" border="0">
					<tr>
						<td >
						</td>
						<td>
						<div class="divEn">
						<?php
							switch ($language) {
							case 'ru':
							echo ' 	<div class="divRu">
									<h4> Клан "INNOMINATE LEGION" [RENAM] </h4> 
									</div>';
							break;
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<img src="Dev_Data/Img/Cnt/indexPhoto.png" height="200" width="500">
						</td>
					</tr>
					<tr height="10">
					</tr>
					<tr>
						<td colspan="2">
						<?php
							switch ($language) {
							case 'ru':
							echo ' 	<div class="divRu">
										<h4>Пожалуйста, выберите интересующий вас пункт меню: </h4> 
									</div> ';
							break;
							}
						?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<?php
							switch ($language) {
							case 'ru':
							echo ' 	
									<table border= "0" width="100%">
										<tr>
											<td >
									<div class="divEn">
									<b> <a href="join.php?lan=ru"> 1) Вступление в клан [RENAM] </a> </b> 
									<br />
									<b> <a href="requirements.php?lan=ru"> 2) Требования к участникам </a> </b> 
									<br />
									<b> <a href="etiquette.php?lan=ru"> 3) Нормы этикета в клане </a> </b> 
									<br />
									<b> <a href="help.php?lan=ru&name=main"> 4) Справочный раздел </a> </b> 
									<br />
									<b> <a href="stop.php?lan=ru"> 5) Личный состав </a> </b>
									<br />
									<b> <a href="agreement.php?lan=ru"> 6) Цели&nbsp; клана </a> </b> 
									<br />
									<b> <a href="stop.php?lan=ru"> 7) Остальное </a> </b>
									</div> 
											</td>
											<td align="right">
												<img src="Dev_Data/Img/Cnt/Ico/divLogo.png" height="110" width="110">
											</td>
										</tr>
									</table>	
									
									';										
							break;
							case 'en':
							echo ' Не матерится. Не оскорблять других игроков. ';
							break;
							case 'de':
							echo ' ';
							break;
							default: 
							echo '  ';
							}
						?>
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