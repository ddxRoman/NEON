<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="js/text_line_animation.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="#openModal">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#ModalCallback"  class="section__first__callMe_btn">Перезвоните мне</button>
                                            </a>



<!-- Модальное окно -->
<div class="modal fade" id="ModalCallback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

				<h3 class="modal-title">Мы вам перезвоним</h3>

				<div class="col-1">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
				</div>

			</div>
			<div class="modal-body">
				<div class="col-lg-7 col-md-12 col-sm-12 modal__left-part">
					<div class="row">
						<div class="col-9">

						</div>
						<div class="col-3">
						</div>
					</div>
					<form class="section__first__callback_modal_form" action="../php/send-callback-TgBot.php" method="post">
						<div class="form-item">
							<input required type="text" id="person-name" name="name" placeholder="">
							<label class="dance_placeholder" for="person-name">Имя</label>
						</div>
						<div class="form-item">
							<input required id="phone-number" name="phone" type="text" class="mask-phone" placeholder="Номер телефона">
							<label class="dance_placeholder" for="phone-number">Номер телефона</label>
						</div>
						<button class="modal__left-part__confirm_btn" type="submit">Жду звонка</button>
					</form>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12 h-100 modal__right-part">

					<div class="modal__right-part_list">
						<ul>
							<li class="callback-list">
								<p>Позвоним в течении 30 минут</p>
							</li>
							<li class="callback-list">
								<p>Поможем с вашим вопросом</p>
							</li>
							<li class="callback-list">
								<p>Поможем подобрать "ваш вариант"</p>
							</li>
						</ul>
					</div>
					<div class="modal__right-part_picture">
						<img src="resources/img/pictures/2.png" alt="">
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<script>
                                $('.mask-phone').mask('+7 (999) 999-99-99');
                            </script>


</body>
</html>