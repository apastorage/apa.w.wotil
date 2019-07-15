<?php
$language  = $_GET['lan'];
$name  = $_GET['name'];
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
							echo ' 	<div class="divRu">
										<h4> Справочный раздел. </h4> 
									</div>';
							break;
							case 'en':
							echo ' <h3> </h3> ';
							break;
							case 'de':
							echo '  ';
							break;
							default: 
							echo '  ';
							}
						?>
						</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<img src="Dev_Data/Img/Cnt/help.png" height="200" width="500">
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<?php
							switch ($language) {
							case 'ru':
								switch ($name) {
									case 'main':
										echo ' <div class="divRu" align="justify">
										<h5> Бои в Укрепрайоне 6 уровеня </h5>
											Бои в Укрепрайоне 6 уровня - это бои 7 на 7 игроков с определённым набором танков 6 уровня <a class="href" target="_blank" href="http://wot-force.ru/luchshie-tanki-wot/197-luchshie-tanki-dlya-ukreprayonov-6-urovnya.html">[Почитать]</a>. При этом используется ограниченный набор карт. Примеры боёв: <a class="href" target="_blank" href="https://youtu.be/-K_d87K3xck">[Посмотреть]</a>.
											</br>
											</br>
										<h5> Пользовательское соглашение </h5>
											<a class="href" href="help.php?lan=ru&name=disclaimer">[Прочитать]</a>.
											</br>
											</br>
										</div>';										
									break;
									case 'paul':
										echo ' <div class="divRu" align="justify">
										<h5> Клан [RENAM] </h5>
										[RENAM] - INNOMINATE LEGION.
										Клан созданный в рамках проекта <a class="href" href=help.php?lan=ru#wot>[WOT]</a>.
										</div>';										
									break;
									case 'wot':
										echo ' <div class="divRu" align="justify">
										<h5> Проект WOT </h5>
										World of Tanks (рус. Мир танков) — компьютерная игра, клиентская массовая многопользовательская 
										онлайн-игра в реальном времени в жанре аркадного танкового симулятора в историческом сеттинге 
										Второй мировой войны, разработанная белорусской студией Wargaming.net. 
										</div>';										
									break;
									case 'mail':
										echo ' <div class="divRu" align="justify">
										<h5> Отправить сообщение </h5>
										Для того, чтобы отправить сообщение командующему кланом "RENAM" -
										используйте web профиль на официальном сайте WOT:  <b> <a class="href" href="http://worldoftanks.ru/ru/community/accounts/18113137-RenamedUser01065">[RenamedUser01065]</a> </b>
										</div>';										
									break;
									case 'private':
										echo ' <div class="divRu" align="justify">
										<h5> Закрытая территория </h5>
										Закрытая территория - специальный раздел ресурса, предназначенный только для игроков
										клана [RENAM]. Доступ к разделу осуществляется по спецпропускам.
										Пропуск можно получить у командующего кланом.
										</div>';										
									break;
									case 'fantasy':
										echo ' <div class="divRu" align="justify">
										<h5> Мифология (или не подтверждённые данные) </h5>
										Фантазия (греч. — «воображение») — обязательное условие творческой деятельности человека, которое выражается в построении образа или 
										наглядной модели её результатов в тех случаях, когда информация не требуется или ее недостаточно. 
										<br />
										<br />
										Воображение является основой наглядно-образного мышления, позволяющего человеку ориентироваться в ситуации, 
										когда практические действия или невозможны, или затруднены, или просто нецелесообразны. Например, 
										при моделировании абстрактных процессов и объектов в игровом мире.

										</div>';										
									break;
									case 'disclaimer':
										echo ' <div class="divRu" align="justify">
											<h5> Disclaimer </h5>
											Клан [RENAM] не несёт ответственность за поведение отдельных его членов. 
											Участники клана [RENAM] не несут ответственности за проявления клана в целом.
											<br />
											<br />
											Данный Web-ресурс не имеет непосредственного отношения к проекту "World of Tanks". 
											<br />
											<br />
											Все события и персонажи являются вымышленными,
											любые совпадения с реально живущими или когда-либо 
											жившими людьми и их историями - совершенно случайны.
											<br />
											<br />
											Ничего личного, только игра... 
										</div>';										
									break;
									
									case 'hq':
										echo ' <div class="divRu" align="justify">
										<h5> Комплектация </h5>
										Подразделения клана "RENAM" формируются согласно нижеуказанным количественным характеристикам.
										<br />
										<br />
										<table class="plate tableSubdivision">
											<tr>
												<td class="tdHqName">
													Подразделение:
												</td>
												<td class="tdHqValue">
													Танки:
												</td>
												<td class="tdHqValue">
													Пехота:
												</td>
											</tr>
											<tr>
												<td>
													Отделение
												</td>
												<td>
													1-2
												</td>
												<td>
													10-30
												</td>
											</tr>
											<tr>
												<td>
													Взвод
												</td>
												<td>
													3-8
												</td>
												<td>
													30-90
												</td>
											</tr>
											<tr>
												<td>
													Рота
												</td>
												<td>
													9-15
												</td>
												<td>
													90-160
												</td>
											</tr>
											<tr>
												<td>
													Батальон
												</td>
												<td>
													16-30
												</td>
												<td>
													160-300
												</td>
											</tr>
											<tr>
												<td>
													Полк
												</td>
												<td>
													31-70
												</td>
												<td>
													300-700
												</td>
											</tr>
											<tr>
												<td>
													Дивизия
												</td>
												<td>
													71-200+
												</td>
												<td>
													700-2000+
												</td>
											</tr>
										</table>
										<br />
										<b> <a class="href" href="stop.php?lan=ru">[Сформировать своё подразделение]</a> </b>
										<br />
										</div>';										
									break;
									default: 
										echo ' <div class="divRu" align="justify">
										<h5> Неверный параметр запроса </h5>
											Неверный GET параметр.
										</div>';
									}
									break;
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