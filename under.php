<?php
$language  = $_GET['lan'];
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
							case 'by':
							echo ' 	<div class="divRu">
										<h3> Распрацоўка. </h3> 
									</div>';
							break;
							case 'ua':
							echo ' 	<div class="divRu">
										<h3> Розроблення. </h3> 
									</div>';
							break;
							default: 
							echo ' 	<div class="divRu">
										<h3> Einsatz. </h3> 
									</div>';
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<img src="Dev_Data/Img/Cnt/under.png" height="200" width="500">
						</td>
					</tr>
					<tr height="10">
					</tr>
					<tr>
						<td colspan="2">
						<?php
							switch ($language) {
							case 'by':
							echo ' <div class="divRu" align="justify">
									Беларуская версія сайта знаходзіцца ў стадыі распрацоўкі. Прыносім свае прабачэнні. 
							</div>';	
							break;
							case 'ua':
							echo ' <div class="divRu" align="justify">
									Звертаємо вашу увагу, що українська версія сайту знаходиться в розробці. Просимо переглядати актуальну інформацію на російскій версії сайту.
Приносимо свої вибачення за тимчасові незручності.
							</div>';				
							break;							
							default: 
							echo ' <div class="divEn" align="justify">
									Diese Seite befindet sich derzeit noch im Aufbau Bitte entschuldigen Sie, 
									dass wir Ihnen an dieser Stelle noch keine Inhalte prasentieren konnen. 
									<br />
									<br />
									Wir arbeiten jedoch stetig an der Erweiterung unserer Webseite, 
									so dass Sie hier in Kurze die gewunschten Informationen finden werden. 
									<br />
									<br />
									Vielen Dank fur Ihr Verstandnis...
							</div>';
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