<?
require($_SERVER['DOCUMENT_ROOT'].'/local/templates/main/header.php');
?>

	<header id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-inner">
			<div class="carousel-item active">
				<!--<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="80vh" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
					<title>Placeholder</title>
					<rect fill="#777" width="100%" height="100%"></rect>
					<text class="display-1" fill="#555" dy=".3em" x="50%" y="50%">First slide</text>
				</svg>-->
				<img src="/images/promo/slide-1.jpg" class="d-block w-100" style="height:90vh;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="display-1">First slide</h5>
					<p class="display-4">Third slide label Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div>
			
			<div class="carousel-item">
				<img src="/images/promo/slide-1.jpg" class="d-block w-100" style="height:90vh;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="display-1">Second slide</h5>
					<p class="display-4">Third slide label Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div>
			
			<div class="carousel-item">
				<img src="/images/promo/slide-1.jpg" class="d-block w-100" style="height:90vh;" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="display-1">Third slide</h5>
					<p class="display-4">Third slide label Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div>
		</div>
		
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		
	</header>

	<section class="section" id="about">
		<div class="container">
			
			<h3 class="display-1 text-center mt-5 mb-5">О нас</h3>
			
			<ul class="list-unstyled">
				
				<li class="media">
					<img src="/images/services/1.png" class="align-self-center mr-5" alt="...">
					<div class="media-body align-self-center">
						<!--<h5 class="display-4 mt-0 mb-1">List-based media object</h5>-->
						<p class="h5 text-justify">ООО «АСКОН» проектирует, продает, производит монтаж и ведет сервисное обслуживание холодильного и вентиляционного оборудования с марта 2006 г.</p>
					</div>
				</li>
				
				<li class="media my-4">
					<div class="media-body align-self-center">
						<!--<h5 class="display-4 mt-0 mb-1">Media object</h5>-->
						<p class="h5 text-justify">Мы занимаемся как бытовым кондиционированием (это создание микроклимата в жилых помещениях с помощью сплит-систем, мультисплит-систем, мультисплит-систем-V, сплит-систем канального типа с подмесом свежего воздуха с улицы), так и промышленным кондиционированием офисных, промышленных и производственных помещений на основе промышленных сплит-систем, мультизональных систем, прицинзионных систем и систем центрального кондиционирования воздуха.</p>
					</div>
					<img src="/images/services/2.jpg" class="align-self-center ml-5" alt="...">
				</li>
				
				<li class="media">
					<img src="/images/services/3.png" class="align-self-center mr-5" alt="...">
					<div class="media-body align-self-center">
						<!--<h5 class="display-4 mt-0 mb-1">List-based media object</h5>-->
						<p class="h5 text-justify">Наша компания проектирует, собирает и устанавливает холодильные агрегаты для холодильных камер, в т.ч. сами холодильные камеры.</p>
					</div>
				</li>
				
				<li class="media my-4">
					<div class="media-body align-self-center">
						<!--<h5 class="display-4 mt-0 mb-1">Media object</h5>-->
						<p class="h5 text-justify">Неотъемлемой частью нашей работы является проектирование, монтаж, автоматизация и ввод в эксплуатацию систем вентиляции и дымоудаления. Мы используем как модульные приточно-вытяжные системы вентиляции, так и наборные системы с использованием последних мировых разработок в этой сфере.</p>
					</div>
					<img src="/images/services/4.png" class="align-self-center ml-5" alt="...">
				</li>
				
				<li class="media">
					<img src="/images/services/5.jpg" class="align-self-center mr-5" alt="...">
					<div class="media-body align-self-center">
						<!--<h5 class="display-4 mt-0 mb-1">List-based media object</h5>-->
						<p class="h5 text-justify">Еще одно из направлений нашей компании - это ремонт и сервисное обслуживание вентиляционного и холодильного оборудования.</p>
					</div>
				</li>
				
			</ul>
			
		</div>
	</section>

	<section class="section" id="services">
		<div class="container">
			
			<h3 class="display-1 mt-5 mb-5 text-center">Услуги</h3>
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="card text-center">
						<a data-toggle="modal" href="#exampleModalLong">
							<img src="/images/services/rulers.png" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<h5 class="card-title">Проектирование</h5>
							<br>
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<a class="btn btn-primary" data-toggle="modal" href="#exampleModalLong">Подробнее</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card text-center">
						<a data-toggle="modal" href="#exampleModalLong">
							<img src="/images/services/tube_drawing_holder.png" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<h5 class="card-title">Подбор обородувания</h5>
							<br>
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<a class="btn btn-primary" data-toggle="modal" href="#exampleModalLong">Подробнее</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card text-center">
						<a data-toggle="modal" href="#exampleModalLong">
							<img src="/images/services/tube_drawing_holder.png" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<h5 class="card-title">Монтажные работы</h5>
							<br>
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<a class="btn btn-primary" data-toggle="modal" href="#exampleModalLong">Подробнее</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 offset-md-2">
					<div class="card last-card text-center">
						<a data-toggle="modal" href="#exampleModalLong">
							<img src="/images/services/tube_drawing_holder.png" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<h5 class="card-title">Ремонт оборудования</h5>
							<br>
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<a class="btn btn-primary" data-toggle="modal" href="#exampleModalLong">Подробнее</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card last-card text-center">
						<a data-toggle="modal" href="#exampleModalLong">
							<img src="/images/services/settings.png" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<h5 class="card-title">Техническое обслуживание</h5>
							<br>
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<a class="btn btn-primary" data-toggle="modal" href="#exampleModalLong">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section class="section" id="projects">
		<div class="container">
			
			<h3 class="display-1 text-center mt-5 mb-5">Проекты</h3>
			
			<div class="swiper-container">
				<div class="swiper-wrapper">
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<!--<div class="swiper-slide card">
						<a data-toggle="modal" href="#exampleModalLong">
							<img src="/images/promo/slide-1.jpg" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a class="btn btn-primary" data-toggle="modal" href="#exampleModalLong">Go somewhere</a>
						</div>
					</div>-->
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
					<a class="swiper-slide card bg-dark text-white" data-toggle="modal" href="#exampleModalLong">
						<img src="/images/promo/slide-1.jpg" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<buttom class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go somewhere</buttom>
						</div>
					</a>
					
				</div>
				<!-- Add Pagination -->
				<div class="swiper-button-prev swiper-button-black"></div>
				<div class="swiper-button-next swiper-button-black"></div>
				
				<div class="swiper-pagination swiper-pagination-black"></div>
			</div>
			
		</div>
	</section>

	<section class="section" id="contact">
		<div class="container">
			
			<h3 class="display-1 text-center mt-5 mb-5">Контакты</h3>
			
			<div class="row">
				
				<div class="col-md-6">
					<!--<h4>Контакты</h4>-->
					<address class="text-left">
						<p class="display-4">ООО &#xab;АСКОН&#xbb;</p>
						
						<p class="h3 text-muted">
							443000, Россия, г. Самара,
							<br>
							ул. Стара-Загора 202
						</p>
						<br>
						<p class="display-4">+7 (123) 456-7890</p>
						<br>
						<p class="display-4">+7 (123) 456-7890</p>
					</address>
				</div>
				
				<div class="col-md-6">
					<!--<h4>Форма обратной связи</h4>-->
					<form>
						
						<div class="form-group">
							<label for="formGroupExampleInput">Имя:</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Василий" required>
						</div>
						
						<div class="form-group">
							<label for="formGroupExampleInput2">Номер телефона:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend">+7</span>
								</div>
								<input type="tel" class="form-control" id="validationCustomUsername" placeholder="(000) 000-00-00" aria-describedby="inputGroupPrepend" required>
								<div class="invalid-feedback">
									Please choose a phone.
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Текст сообщения:</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ваш текст сообшения..."></textarea>
						</div>
						
						<div class="form-group custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1" required>
							<label class="custom-control-label" for="customCheck1">Check this custom <a href="#" target="_blank">checkbox</a></label>
							<div class="invalid-feedback">Example invalid feedback text</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Отправить</button>
					
					</form>
					
				</div>
			</div>
			
		</div>
	</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/local/templates/main/footer.php');
?>