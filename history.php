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
							$language  = $_GET['lan'];
							switch ($language) {
							case 'ru':
							echo ' <div class="divRu">
									<h4> Немного истории... </h4> 
									</div>';
							break;
							default: 
							echo ' <div class="divRu">
									<h4> Немного истории... </h4> 
									</div>';
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
						$language  = $_GET['lan'];
						switch ($language) {
							case 'ru':
							echo '
										<div class="divRu" align="justify">	
										В марте 1939 года, в Норвегии, была сформирована 260-ая специальная танковая дивизия "Nordwind 939". 
										Девизия состояла из немногочисленных отборных механизированных подраздлений.
										<br />
										<br />
										Предназначение дивизии носило специальный характер. По меркам своего времени - дивизия была укомплектована 
										новейшими военными технологиями и использовала передовые методы при ведении боевых действий. 
										Любые документы, отражающие деятельность дивизии были засекречены. 								
										<br />
										<br />
										В 1944 дивизия была расформирована.
										Впоследствии, используя накопленный опыт 260-ой,
										в январе 2013, была сформирована новая 261-ая специальная танковая дивизия "Prinz-Paul" для участия 
										в спецоперациях на полях сражений "World of Tanks". 
										<b> <a class="href" href="help.php?lan=ru&name=fantasy"> &nbsp;[Подробнее]</a></b> 
										</div>';
							break;
							case 'de':
							echo ' ';
							break;
							case 'en':
							echo ' ';
							break;
							default:
							echo ' ';
						}
						?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>