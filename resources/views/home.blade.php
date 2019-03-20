@extends("layouts.template")

@section("content")
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/banner.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Música Recomendada</h1>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/banner2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Según tus gustos</h1>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
                  <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                      <div class="media-body p-2 mt-3">
                       <h3>¿Qué servicio ofrece el software Tune-In?</h3>
                        <p>¡Recomendaciones musicales según tus gustos!.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                    <div class="media block-6 d-block text-center">
                      <div class="media-body p-2 mt-3">
                       <h3>¿Cómo lo haremos?</h3>
                        <p>Las canciones que tengas en tu disco local serán usadas como referencia.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                    <div class="media block-6 d-block text-center">
                      <div class="media-body p-2 mt-3">
                       <h3>¿Cuál  es su costo?</h3>
                        <p>Sin costo alguno, totalmente gratis. ¡Descárgalo ahora!.</p>
                      </div>
                    </div>
                  </div>
                </div>
			</div>
		</section>

		<section class="ftco-section testimony-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
						<div class="text px-4 ftco-animate">
	          	            <h2 class="mb-4">Testimonios</h2>
	          	            <div class="row ftco-animate justify-content-center">
                                <div class="carousel-testimony owl-carousel">
                                    <div class="item">
                                        <div class="testimony-wrap d-flex">
                                          <div class="user-img mr-4" style="background-image: url(images/staff-1.jpg)">
                                          </div>
                                          <div class="text ml-2 bg-light">
                                              <span class="quote d-flex align-items-center justify-content-center"></span>
                                              <i class="icon-quote-left"></i>
                                              <p>"Muy buen software"</p>
                                              <p class="name">José Manuel Caballero Navarro</p>
                                              <span class="position">Músico</span>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-wrap d-flex">
                                          <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                                          </div>
                                          <div class="text ml-2 bg-light">
                                              <span class="quote d-flex align-items-center justify-content-center"></span>
                                              <i class="icon-quote-left"></i>
                                              <p>"Tiene unos cuantos bugs pero en general muy bien :)"</p>
                                              <p class="name">Alma Muñoz Nieto</p>
                                              <span class="position">Profesora</span>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-wrap d-flex">
                                         <div class="user-img mr-4" style="background-image: url(images/persona1.jpeg)">
                                          </div>
                                          <div class="text ml-2 bg-light">
                                              <span class="quote d-flex align-items-center justify-content-center"></span>
                                              <i class="icon-quote-left"></i>
                                              <p>"Me funciono perfectamente"</p>
                                              <p class="name">Javier Alonso Ibañez</p>
                                              <span class="position">Doctor</span>
                                          </div>
                                        </div>
                                    </div>
                                </div>
	          	            </div>
	          	        </div>
				    </div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	            <h2 class="mb-4">Nuestro equipo de trabajo</h2>
						<p>El equipo de creación de Tune-In está conformado por: </p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text">
										<h3>Juan Daniel Garcia Lopez</h3>
										<p>Desarrollador - DBA.</p>
										<a href="mailto:juan.garcial@upb.edu.co">Enviar email</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text">
										<h3>Axel William Sotelo Grajales</h3>
										<p>Desarrollador - Diseñador.</p>
										<a href="mailto:axelsotelo26@gmail.com">Enviar email</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text">
										<h3>Juan Felipe Franco Zuluaga</h3>
										<p>Desarrollador - Analista.</p>
										<a href="mailto:juan.francoz@upb.edu.co">Enviar email</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text">
										<h3>Juan José Brand Londoño</h3>
										<p>Desarrollador.</p>
										<a href="mailto:juan.brandl@upb.edu.co">Enviar email</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text">
										<h3>Cristian Camilo Giraldo Mazo</h3>
										<p>Desarrollador.</p>
										<a href="mailto:cristian.giraldom@upb.edu.co">Enviar email</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text">
										<h3>Luis Felipe Lopez Torres</h3>
										<p>Desarrollador.</p>
										<a href="mailto:luis.lopezt@upb.edu.co">Enviar email</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/partitura.jpeg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 bg-primary">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	            <h2 class="mb-4">Añade tu testimonio</h2>
	            <p>Tus sugerencias son muy importantes para nosotros, escríbenos!.</p>
	          </div>
	          <form action="#" class="appointment-form ftco-animate">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Nombre(s)">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Apellidos">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    				   <div class="form-group">
		    					<input type="text" class="form-control" placeholder="Profesión">
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="email" class="form-control" placeholder="e-mail">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Mensaje"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Añade tu testimonio" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
        </div>
    	</div>
    </section>
@endsection