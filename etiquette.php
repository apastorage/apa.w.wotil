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
									<h4> Правила этикета в клане "RENAM". </h4>
									</div> ';
							break;
							default: 
							echo ' <div class="divRu">
									<h4> Правила этикета в клане "RENAM". </h4>
									</div> ';
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="Dev_Data/Img/Cnt/etiquette.png" height="200" width="500">
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
									В клане введены определённые нормы этикета. Они призваны сделать времяпрепровождение в игре более приятным, а общение более комфортным.
									<br />
									<br />
									* Старайтесь не использовать нецензурную лексику. Помните, что у экранов могут находится несовершеннолетние - как в качестве игроков, так и зрителей.
									<br />
									<br />
									* Старайтесь не оскорблять других игроков - как минимум испортите игру себе и другим. Захотелось поконфликтовать - поищите другое место. 
									<br />
									<br />
									* Старайтесь не начинать (не поддерживать и прекращать) конфликтные споры (ситуации) с игроками. И в особенности с легионерами. Практика показывает, что это зачастую не конструктивно и приводит к негативным результатам.
									<br />													
									<br />		
									<font color="#e70000"><b>Это основные моменты, а в общем - будьте культурным человеком и приличным игроком!</b></font>
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