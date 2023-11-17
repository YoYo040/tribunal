@extends('layout')
@section('title','Home')
@section('content')

          <!-- Carousel wrapper -->
          <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
              <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
              <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
            </ol>

            <!-- Inner -->
            <div class="carousel-inner">
              <!-- Single item -->
              <div class="carousel-item active">
                <div class="mask d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.6);">
                  <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <div class="top-bar mb-5 w-100 d-flex p-2 rounded">
                            <div class="text-center col-4">
                                <p class="text-center">
                                    ⵜⴰⴳⵍⴷⵉⵜ ⵏ ⵍⵎⵖⵔⵉⴱ<br>
                                    ⵜⴰⵏⵙⵙⵉⵅⴼⵜ ⵏ ⵜⵎⵓⵔⴰⵢⵜ ⵜⴰⵎⴰⵜⴰⵢⵜ<br>
                                    ⵜⴰⵙⵏⴱⴹⴰⵢⵜ ⵏ ⵡⴰⵍⴰⵙ ⴱⵏⵉⵎⵍⵍⴰⵍ<br>
                                    ⵜⴰⵙⵏⴱⴹⴰⵢⵜ ⵜⴰⵎⵏⵣⵓⵜ ⵏ ⴱⵏⵉⵎⵍⵍⴰⵍ<br>
                                    ⵜⴰⵎⵓⵔⴰⵢⵜ ⵜⴰⵎⴰⵜⴰⵢⵜ
                                </p>
                            </div>
                            <div class="text-center col-4">
                                <h5 class="text-center">بسم الله الرحمان الرحيم</h5>
                                <img class="w-25" src="{{ url('imgs/maroc.png') }}" alt="">
                            </div>
                            <div class="text-center  col-4">
                                <p class="text-center">
                                    المملكة المغربية<br>
                                    رئاسة النيابة العامة<br>
                                    محكمة الاستئناف ببني ملال<br>
                                    المحكمة الابتدائية بني ملال<br>
                                    النيابة العامة

                                </p>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- Single item -->
              <div class="carousel-item">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                  <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                      <h2>محكمة الاستئناف ببني ملال</h2>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single item -->
              <div class="carousel-item">
                <div
                  class="mask"
                  style="
                    background: linear-gradient(
                      45deg,
                      rgba(92, 50, 4, 0.7),
                      rgba(239, 233, 65, 0.483) 100%
                    );
                  "
                >
                  <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                      <h2>محكمة الاستئناف ببني ملال</h2>
                      <a
                        class="btn btn-outline-light btn-lg m-2"
                        href="https://mdbootstrap.com/docs/standard/content-styles/masks/"
                        target="_blank"
                        role="button"
                        >للاستفسار</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- Carousel wrapper -->
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="mt-5">
          <div class="container">
            <!--Section: Content-->
            <section>
              <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                  <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                    <img src="{{url('./imgs/img1.jpg')}}" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 gx-5 mb-4">
                  <h4><strong>حول المحكمة الابتدائية</strong></h4>
                  <p class="text-muted">
                  محكمة هي مؤسسة قضائية مكلفة بتقديم العدالة من خلال فصل النزاعات وتطبيق القانون. يعد المحكمة مكانًا يتم فيه عرض القضايا القانونية وفحصها والبت فيها من قبل قضاة أو محكمين. تلعب المحكمات دورًا أساسيًا في النظام القضائي بضمان العدالة وتفسير القوانين واتخاذ قرارات استنادًا إلى الحقائق والأدلة المقدمة خلال الجلسات.
                  </p>
                  <p><strong>ابرز الاحداث</strong></p>
                  <p class="text-muted">
                  محكمة هي مؤسسة قضائية مكلفة بتقديم العدالة من خلال فصل النزاعات وتطبيق القانون. يعد المحكمة مكانًا يتم فيه عرض القضايا القانونية وفحصها والبت فيها من قبل قضاة أو محكمين. تلعب المحكمات دورًا أساسيًا في النظام القضائي بضمان العدالة وتفسير القوانين واتخاذ قرارات استنادًا إلى الحقائق والأدلة المقدمة خلال الجلسات.
                  </p>
                </div>
              </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
              <h4 class="mb-5"><strong>مدوناتنا</strong></h4>

              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img
                        src="{{url('./imgs/img2.jpg')}}"
                        class="img-fluid"
                      />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Blog</h5>
                      <p class="card-text">
                        Some quick example text to build on the Blog and make up the bulk of the
                        card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">المزيد</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img
                        src="{{url('./imgs/img2.jpg')}}"
                        class="img-fluid"
                      />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Blog</h5>
                      <p class="card-text">
                        Some quick example text to build on the Blog and make up the bulk of the
                        card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">المزيد</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img
                        src="{{url('./imgs/img2.jpg')}}"
                        class="img-fluid"
                      />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Blog</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">المزيد</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="mb-5">
              <h4 class="mb-5 text-center"><strong>تواصل معنا</strong></h4>

              <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                  <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" id="form3Example1" class="form-control" />
                          <label class="form-label" for="form3Example1">الاسم</label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" id="form3Example2" class="form-control" />
                          <label class="form-label" for="form3Example2">النسب</label>
                        </div>
                      </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" class="form-control" />
                      <label class="form-label" for="form3Example3">البريد الالكتروني</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <textarea name="message" id="" cols="30" rows="5"  class="form-control"></textarea>

                      <label class="form-label" for="form3Example4">الرسالة</label>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                      ارسال
                    </button>


                  </form>
                </div>
              </div>
            </section>
            <!--Section: Content-->
          </div>
        </main>
        <!--Main layout-->


@endsection

