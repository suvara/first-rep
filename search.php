<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>B2C group</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="styles/main.css" type="text/css"/>
	</head>
	
	
	<body id="bitrix_install_template">
		<table class="installer-main-table" id="container">
			<tbody>
				<tr>
					<td class="installer-main-table-cell">
						<div class="installer-block-wrap">
							<div class="installer-block">
								<table class="installer-block-table">
									<tbody>
										<tr>
											<td class="installer-block-cell-left">
												<table class="inst-left-side-img-table">
													<tbody>
														<tr>
															<td class="inst-left-side-img-cell">
																<img src="images/berloga.jpg" alt="">
															</td>
														</tr>
													</tbody>
												</table>
												<div class="inst-sequence-steps">
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text">Главная</span></div>
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text">Найти</span></div>
													<div class="inst-sequence-step-item inst-active-step"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text">Разместить объявление</span></div>
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text"></span></div>
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text"></span></div>
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text"></span></div>
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text"></span></div>
													<div class="inst-sequence-step-item"><span class="inst-sequence-step-num"></span><span class="inst-sequence-step-text"></span></div>
												</div>
											</td>
											<td class="installer-block-cell-right">
												<div class="inst-title-block">
													<div class="inst-title">ДОБАВИТЬ ОБЪЯВЛЕНИЕ</div>
												</div>
												<div class="inst-cont-title-wrap">
													<div class="inst-cont-title"></div>
												</div>
												<div id="step-content">
													
													<table border="0" class="data-table">
														<tbody><tr>
															<td colspan="2" class="header">Заполните форму для регистрации вашего объявления</td>
														</tr>
														<tr>
															<td nowrap="" align="right"><span style="color:red">*</span>&nbsp;Город:</td>
															<td>
																<select type="text" name="city"  id="city">
																	<option></option>
																	<option>Нижний Новгород</option>
																	<option>Бор</option>
																	<option>Кстово</option>
																</select>
															</td>
														</tr>
														<tr>
															<td nowrap="" align="right"><span style="color:red">*</span>&nbsp;Район:</td>
															<td>
																<select type="text" name="district"  id="district">
																	<option></option>
																	<option>Сормово</option>
																	<option>Канавино</option>
																	<option>Печёры</option>
																</select>
															</td>
														</tr>
														<tr>
															<td nowrap="" align="right"><span style="color:red"> </span>&nbsp;Станция метро:</td>
															<td>
																<select type="text" name="metro_station"  id="metro_station">
																	<option></option>
																	<option>Бурнаковская</option>
																	<option>Московская</option>
																	<option>Автозавод</option>
																</select>
															</td>
														</tr>
														<tr>
															<td nowrap="" align="right"><span style="color:red">*</span>&nbsp;Улица:</td>
															<td><input type="text" name="street"  id="street" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right"><span style="color:red">*</span>&nbsp;Номер дома:</td>
															<td><input type="text" name="number_house"  id="number_house" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right"><span style="color:red">*</span>&nbsp;Номер квартиры:</td>
															<td><input type="text" name="number_flat"  id="number_flat" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right">&nbsp;Количество комнат:</td>
															<td><input type="text" name="amount_rooms"  id="amount_rooms" value="" size="30"></td>
														</tr>
														
														<tr>
															<td nowrap="" align="right">Тип жилья:</td>
															<td>
																<select type="text" name="type_housing"  id="type_housing">
																	<option></option>
																	<option>Квартира</option>
																	<option>Частный дом</option>
																	<option>Комната</option>
																</select>
															</td>
														</tr>
														<tr>
															<td nowrap="" align="right">Этажность здания:</td>
															<td><input type="text" name="floors"  id="floors" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right">Общая площадь:</td>
															<td><input type="text" name="total_area"  id="total_area" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right">Цена(руб./мес.):</td>
															<td><input type="text" name="cost"  id="cost" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right">Имя контактного лица:</td>
															<td><input type="text" name="name"  id="name" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right">Контактный телефон:</td>
															<td><input type="text" name="phone"  id="phone" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right">Email:</td>
															<td><input type="text" name="email"  id="email" value="" size="30"></td>
														</tr>
														<tr>
															<td nowrap="" align="right"> </td>
															<td><input type="text" name="arFields"  id="arFields" hidden value="" size=""></td>
														</tr>
														<tr>
															<td nowrap="" align="right">Дополнительная информация</td>
															<td>
																<textarea name="more_inform" cols="40" rows="5"></textarea>
															</td>
														</tr>
														
														</tbody>
													</table>
													
												</div>
												<div class="instal-btn-wrap">
													
												</div>
											</td>
										</tr>
										<tr>
											<td class="installer-block-cell-left installer-block-cell-bottom"><img src="/bitrix/images/install/ru/logo.png" alt=""></td>
											<td class="installer-block-cell-right installer-block-cell-bottom"></td>
										</tr>
									</tbody></table>
							</div>
							<div class="installer-footer">
								<div class="instal-footer-left-side">Что-то</div>
								<div class="instal-footer-right-side"><a href="/readme.php" target="_blank">Инструкции</a> <span class="instal-footer-separator"></span> <a href="http://www.ninograd.esy.es" target="_blank">www.ninograd.esu.es</a> <span class="instal-footer-separator"></span> <a href="http://www.1c-bitrix.ru/support/?referer1=bsm&amp;referer2=install" target="_blank">Техподдержка</a></div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="instal-bg">
			<div class="instal-bg-inner">
			</div>
		</div>
	</body>
</html>