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
<?php
$language  = $_GET['lan'];
?>
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
							echo ' 	<div class="divRu">
										<h4>Цели и позиционирование клана [RENAM]. </h4> 
									</div>';
							break;
							case 'en':
							echo ' <h3> under construction </h3>  ';
							break;
							case 'de':
							echo ' <h3> under construction </h3> ';
							break;
							default: 
							echo ' <h3> under construction </h3>  ';
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<img src="Dev_Data/Img/Cnt/disclaimer.png" height="200" width="500">
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
									Существование клана [RENAM] не преследует никаких иных проявлений,
									кроме спортивноигровых, в контексте проекта "World of Tanks".
									<br />
									<br />
									Клан [RENAM] задумывался для того, чтобы 
									объеденить игроков по интересам и разнообразить игровой процесс. 
									<br />
									<br />
									Клан [RENAM] не несёт ответственность за поведение отдельных его членов. 
									Участники клана [RENAM] не несут ответственности за проявления клана в целом.
									<br />
									<br />
									Данный Web-ресурс не имеет непосредственного отношения к проекту "World of Tanks". 
									<br />
									<br />
									<b> <a class="href" href="help.php?lan=ru&name=disclaimer">[Ничего личного, только игра...]</a> </b>
									
									</div>';
							break;
							case 'en':
							echo ' <h3> under construction </h3> ';
							break;
							case 'de':
							echo ' <h3> under construction </h3> ';
							break;
							default: 
							echo ' 261. under construction </h3> ';
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