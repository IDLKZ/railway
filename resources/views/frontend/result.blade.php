@extends("layout")

@section("content")


    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title mt-2">
                <span>Статус</span>
                <h2>Статус</h2>
            </div>

            <div class="container">
                <div class="container d-none d-sm-block" style="min-height: 400px">
                    <div class="alert alert-success text-center justify-content-center">
                        <h3>Успешно отправлено!</h3>
                        <a class="btn btn-info" href="{{route("home")}}">Домой</a>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Testimonials Section -->





@endsection
