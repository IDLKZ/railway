@extends("layout")

@section("content")

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            @if (isset($success))
                <div class="alert alert-success">{{$success}}</div>
            @endif
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>О компании</h1>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore facere vel doloribus est ex alias sunt excepturi eum enim dolorum ea unde cumque, quam minima nulla dolore deleniti nam voluptate?</h2>
                    <div class="d-flex">
                        <a href="{{route('home')}}#contact" class="btn-get-started scrollto">Оставить заявку</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/img/wagon.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <div class="container d-none d-sm-block">
            <div class="row">
            <div class="col-md-4 col-sm-12 offset-md-8 mt-5" style="min-height: 80px; border: 1px solid #F49D44; border-radius: 20px; ">
                    <div class="row" >
                        <div class="col-md-2 col-sm-2 d-flex justify-content-center align-content-center" style="min-height: 50px; padding: 15px 0">
                            <i class="icofont-phone" style="font-size: 50px; color: #F49D44"></i>
                        </div>
                        <div class="col-md-10 col-sm-10" style="min-height: 50px;">
                            <p style="margin-top: 15px">Есть вопросы?<br>
                                Позвоните нашему оператору!</p>
                        </div>
                    </div>
            </div>
        </div>
        </div>

        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div id="container"></div>
                    </div>

                </div>
                <figure>
                    <div style="overflow: auto">
                        <img src="/assets/img/step_bg.png" alt="Ремонт по заявкам" style="width: 100%; min-width: 760px;">
                    </div>
                </figure>
                <div class="text-center">
                    <a href="{{route('home')}}#contact" class="btn" style="background-color: #F49D44">Оставить заявку</a>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Контакты</span>
                    <h2>Контакты</h2>
                    <p>У вас остались вопросы и предложения, заполните форму и мы свяжемся с Вами в ближайшее время!</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Адрес:</h4>
                                <p>Астана, Богенбай 43</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Номер:</h4>
                                <p>+7 700 452 5555</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="sendmail" method="post" class="contact-send">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name" required class="form-control" id="name" data-rule="minlen:4" data-msg="Как минимум 4 знака" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" required name="email" id="email" data-rule="email" data-msg="Введите действующую почту" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Телефон</label>
                                <input type="text" class="form-control" required name="phone" id="subject" data-rule="minlen:4" data-msg="Введите корректный телефон" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Сообщение</label>
                                <textarea class="form-control" id="message" name="message" rows="10" data-rule="required" data-msg="Пожалуйста напишите нам что-нибудь"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="text-center"><button id="button" class="btn btn-warning" type="submit">Отправить</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->





@stop
