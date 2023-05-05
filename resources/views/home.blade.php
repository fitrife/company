@extends('layouts.main')
@section('container')

      <!-- banner start -->
      <section class="banner d-flex align-items-center">
        <div class="effect-wrap">
          <i class="fa-solid fa-plus effect effect-1"></i>
          <i class="fa-solid fa-plus effect effect-2"></i>
          <i class="fa-solid fa-circle-notch effect effect-3"></i>
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div
              class="col-lg-7 col-md-7 mt-5 mt-md-0 order-md-first order-last"
            >
              <div class="banner-text">
                <h1>Best Learning Place To Improve Your Skill</h1>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste
                  magnam quas quibusdam, neque aliquam consequuntur minus in
                  nulla labore iusto.
                </p>
                <div class="banner-btn">
                  <a href="#" class="btn btn-1">Check Course</a>
                  <button
                    type="button"
                    class="btn btn-1 video-play-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#video-modal"
                  >
                    <i class="fa-solid fa-play"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 text-center">
              <div class="banner-img">
                <div class="circle"></div>
                <img src="{{ asset('img/hero.png')}}" alt="new project" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- exclusive program start -->
      <section class="exclusive-section section-padding">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
              <div class="exclusive-text">
                <h2>Program unggulan kami</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Phasellus aliquam sapien sed libero sollicitudin porta.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-9">
              <div class="row justify-content-center">
                <div class="owl-carousel exclusive-carousel">
                  <div class="row exclusive-item box">
                    <div class="col-lg-4 col-md-12">
                      <img src="{{ asset('img/hero.png')}}" alt="exclusive-program" />
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <h3 class="text-capitalize">Lorem ipsum dolor sit</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus aliquam sapien sed libero sollicitudin porta.
                      </p>
                    </div>
                  </div>
                  <div class="row exclusive-item box">
                    <div class="col-lg-4 col-md-12">
                      <img src="{{ asset('img/hero.png')}}" alt="exclusive-program" />
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <h3 class="text-capitalize">Lorem ipsum dolor sit</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus aliquam sapien sed libero sollicitudin porta.
                      </p>
                    </div>
                  </div>
                  <div class="row exclusive-item box">
                    <div class="col-lg-4 col-md-12">
                      <img src="{{ asset('img/hero.png')}}" alt="exclusive-program" />
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <h3 class="text-capitalize">Lorem ipsum dolor sit</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus aliquam sapien sed libero sollicitudin porta.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- exclusive program end -->

      <!-- reason start -->
      <section class="reason-section section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="section-title text-center">
                <h2>Kenapa Kami Berbeda</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vivamus nisl purus, convallis id ultricies sed, volutpat quis
                  ligula. Aenean ut dapibus neque. Pellentesque vel nibh
                  iaculis, ultrices enim id.
                </p>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <div
                id="accordionReason"
                class="d-block accordion nav nav-tabs"
                role="tablist"
              >
                <div
                  class="accordion-item"
                  data-bs-toggle="tab"
                  data-bs-target="#reason-one"
                  type="button"
                  role="tab"
                  aria-controls="reason-one"
                  aria-selected="true"
                >
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      Accordion Item #1
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionReason"
                  >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.
                      </p>
                    </div>
                    <div class="accordion-img">
                      <img src="{{ asset('img/hero.png')}}" class="reason-img" alt="" />
                    </div>
                  </div>
                </div>
                <div
                  class="accordion-item"
                  data-bs-toggle="tab"
                  data-bs-target="#reason-two"
                  type="button"
                  role="tab"
                  aria-controls="reason-two"
                  aria-selected="false"
                >
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Accordion Item #2
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionReason"
                  >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.
                      </p>
                    </div>
                    <div class="accordion-img">
                      <img src="{{ asset('img/hero.png')}}" class="reason-img" alt="" />
                    </div>
                  </div>
                </div>
                <div
                  class="accordion-item"
                  data-bs-toggle="tab"
                  data-bs-target="#reason-three"
                  type="button"
                  role="tab"
                  aria-controls="reason-three"
                  aria-selected="false"
                >
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      Accordion Item #3
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionReason"
                  >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.
                      </p>
                    </div>
                    <div class="accordion-img">
                      <img src="{{ asset('img/hero.png')}}" class="reason-img" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 d-md-inline d-none">
              <div
                class="tab-content d-flex justify-content-center align-items-center h-100"
                id="tabImgReason"
              >
                <div
                  class="tab-pane fade show active"
                  id="reason-one"
                  role="tabpanel"
                  aria-labelledby="reason-one-tab"
                >
                  <img src="{{ asset('img/hero.png')}}" class="reason-img" alt="" />
                </div>
                <div
                  class="tab-pane fade"
                  id="reason-two"
                  role="tabpanel"
                  aria-labelledby="reason-two-tab"
                >
                  <img src="{{ asset('img/hero.png')}}" class="reason-img" alt="" />
                </div>
                <div
                  class="tab-pane fade"
                  id="reason-three"
                  role="tabpanel"
                  aria-labelledby="reason-three-tab"
                >
                  <img src="{{ asset('img/hero.png')}}" class="reason-img" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- reason end -->

      <!-- course start -->
      <section class="course-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="section-title text-center">
                <h2 class="text-capitalize">Lorem ipsum dolor.</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vivamus nisl purus, convallis id ultricies sed, volutpat quis
                  ligula. Aenean ut dapibus.
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <ul
              class="nav nav-tabs border-0 d-flex justify-content-center align-items-center mb-4"
              id="courseTab"
              role="tablist"
            >
              <div class="owl-carousel course-img-carousel d-none d-md-block">
                <div class="container-img-btn hidden-sm">
                  <img
                    src="{{ asset('img/hero.png')}}"
                    class="nav-link active"
                    id="course-one-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-one-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-one-tab-pane"
                    aria-selected="true"
                  />
                  <div class="text-block">
                    <p>Lorem, ipsum 1.</p>
                  </div>
                </div>
                <div class="container-img-btn">
                  <img
                    src="{{ asset('img/hero.png')}}"
                    class="nav-link"
                    id="course-two-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-two-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-two-tab-pane"
                    aria-selected="false"
                  />
                  <div class="text-block">
                    <p>Lorem, ipsum 2.</p>
                  </div>
                </div>
                <div class="container-img-btn">
                  <img
                    src="{{ asset('img/hero.png')}}"
                    class="nav-link"
                    id="course-three-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-three-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-three-tab-pane"
                    aria-selected="false"
                  />
                  <div class="text-block">
                    <p>Lorem, ipsum 3.</p>
                  </div>
                </div>
                <div class="container-img-btn">
                  <img
                    src="{{ asset('img/hero.png')}}"
                    class="nav-link"
                    id="course-four-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-four-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-four-tab-pane"
                    aria-selected="false"
                  />
                  <div class="text-block">
                    <p>Lorem, ipsum 4.</p>
                  </div>
                </div>
                <div class="container-img-btn">
                  <img
                    src="{{ asset('img/hero.png')}}"
                    class="nav-link"
                    id="course-five-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-five-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-five-tab-pane"
                    aria-selected="false"
                  />
                  <div class="text-block">
                    <p>Lorem, ipsum 5.</p>
                  </div>
                </div>
                <div class="container-img-btn">
                  <img
                    src="{{ asset('img/hero.png')}}"
                    class="nav-link"
                    id="course-six-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-six-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-six-tab-pane"
                    aria-selected="false"
                  />
                  <div class="text-block">
                    <p>Lorem, ipsum 6.</p>
                  </div>
                </div>
              </div>
              <div
                class="container-text-btn horizontal-scrollable row flex-row flex-nowrap pb-2 pt-2"
                id="courseText"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="course-one-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-one-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-one-tab-pane"
                    aria-selected="true"
                  >
                    Course Category 1
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="course-two-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-two-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-two-tab-pane"
                    aria-selected="false"
                  >
                    Course Category 2
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="course-three-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-three-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-three-tab-pane"
                    aria-selected="false"
                  >
                    Course Category 3
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="course-four-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-four-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-four-tab-pane"
                    aria-selected="false"
                  >
                    Course Category 4
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="course-four-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-four-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-four-tab-pane"
                    aria-selected="false"
                  >
                    Course Category 4
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="course-four-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-four-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-four-tab-pane"
                    aria-selected="false"
                  >
                    Course Category 5
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="course-four-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#course-four-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="course-four-tab-pane"
                    aria-selected="false"
                  >
                    Course Category 6
                  </button>
                </li>
              </div>
            </ul>
            <div class="tab-content" id="courseTabContent">
              <div
                class="tab-pane fade show active"
                id="course-one-tab-pane"
                role="tabpanel"
                aria-labelledby="course-one-tab"
                tabindex="0"
              >
                <div class="row bg-light section-padding">
                  <div class="col-lg-5 col-md-5 ms-md-3">
                    <h3 class="course-title text-capitalize fs-3">
                      Lorem ipsum dolor 1
                    </h3>
                    <p class="course-count">
                      <i class="fa-solid fa-table-list me-1"></i> 6 Courses
                    </p>
                    <p class="course-student">
                      <i class="fa-solid fa-people-group me-1"></i> 1000+ Alumni
                    </p>
                    <hr />
                    <p class="course-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Alias laudantium soluta minima quibusdam. Numquam quos
                      nobis quaerat dolores facere nihil obcaecati libero
                      accusantium, eius exercitationem qui recusandae totam
                      culpa natus.
                    </p>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row justify-content-center">
                      <div class="owl-carousel course-carousel">
                        <div class="course-box box course-item">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="course-two-tab-pane"
                role="tabpanel"
                aria-labelledby="course-two-tab"
                tabindex="0"
              >
                <div class="row bg-light section-padding">
                  <div class="col-lg-5 col-md-5 ms-md-3">
                    <h3 class="course-title text-capitalize fs-3">
                      Lorem ipsum dolor 2
                    </h3>
                    <p class="course-count">
                      <i class="fa-solid fa-table-list me-1"></i> 6 Courses
                    </p>
                    <p class="course-student">
                      <i class="fa-solid fa-people-group me-1"></i> 1000+ Alumni
                    </p>
                    <hr />
                    <p class="course-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Alias laudantium soluta minima quibusdam. Numquam quos
                      nobis quaerat dolores facere nihil obcaecati libero
                      accusantium, eius exercitationem qui recusandae totam
                      culpa natus.
                    </p>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row justify-content-center">
                      <div class="owl-carousel course-carousel">
                        <div class="course-box box course-item">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="course-three-tab-pane"
                role="tabpanel"
                aria-labelledby="course-three-tab"
                tabindex="0"
              >
                <div class="row bg-light section-padding">
                  <div class="col-lg-5 col-md-5 ms-md-3">
                    <h3 class="course-title text-capitalize fs-3">
                      Lorem ipsum dolor 3
                    </h3>
                    <p class="course-count">
                      <i class="fa-solid fa-table-list me-1"></i> 6 Courses
                    </p>
                    <p class="course-student">
                      <i class="fa-solid fa-people-group me-1"></i> 1000+ Alumni
                    </p>
                    <hr />
                    <p class="course-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Alias laudantium soluta minima quibusdam. Numquam quos
                      nobis quaerat dolores facere nihil obcaecati libero
                      accusantium, eius exercitationem qui recusandae totam
                      culpa natus.
                    </p>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row justify-content-center">
                      <div class="owl-carousel course-carousel">
                        <div class="course-box box course-item">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="course-four-tab-pane"
                role="tabpanel"
                aria-labelledby="course-four-tab"
                tabindex="0"
              >
                <div class="row bg-light section-padding">
                  <div class="col-lg-5 col-md-5 ms-md-3">
                    <h3 class="course-title text-capitalize fs-3">
                      Lorem ipsum dolor 4
                    </h3>
                    <p class="course-count">
                      <i class="fa-solid fa-table-list me-1"></i> 6 Courses
                    </p>
                    <p class="course-student">
                      <i class="fa-solid fa-people-group me-1"></i> 1000+ Alumni
                    </p>
                    <hr />
                    <p class="course-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Alias laudantium soluta minima quibusdam. Numquam quos
                      nobis quaerat dolores facere nihil obcaecati libero
                      accusantium, eius exercitationem qui recusandae totam
                      culpa natus.
                    </p>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row justify-content-center">
                      <div class="col owl-carousel course-carousel">
                        <div class="course-box box course-item">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                        <div class="course-box box course-item box">
                          <img src="{{ asset('img/hero.png')}}" alt="course" />
                          <div class="card-body">
                            <h6
                              class="card-title text-capitalize fw-bold mb-2 mt-2"
                            >
                              Lorem ipsum dolor sit
                            </h6>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- course end -->

      <!-- blog start -->
      <section class="blog-section section-padding">
        <div class="container">
          <div
            class="row bg-light section-padding d-flex justify-content-center"
          >
            <div class="col-lg-5 col-md-8 ms-md-3 text-md-center text-lg-start">
              <h2>Lorem ipsum dolor</h2>
              <p class="course-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                laudantium soluta minima quibusdam. Numquam quos nobis quaerat
                dolores facere nihil obcaecati libero accusantium, eius
                exercitationem qui recusandae totam culpa natus.
              </p>
              <p class="blog-direct fw-bold">
                Direct Link
                <i class="fa-solid fa-circle-right ms-2"></i>
              </p>
            </div>
            <div class="col-lg-6 col-md-8 d-flex align-items-center">
              <div class="owl-carousel owl-theme blog-carousel">
                <a href="index.html" class="card box mb-3">
                  <div class="row g-0">
                    <div class="col-6 d-flex align-items-center">
                      <div class="card-body">
                        <p class="card-text text-dark fw-bold">
                          This is a wider card with supporting text below.
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <img
                        src="{{ asset('img/service-1.png')}}"
                        class="img-fluid rounded-start"
                        alt="..."
                      />
                    </div>
                  </div>
                </a>
                <a href="index.html" class="card box mb-3">
                  <div class="row g-0">
                    <div class="col-6 d-flex align-items-center">
                      <div class="card-body">
                        <p class="card-text text-dark fw-bold">
                          This is a wider card with supporting text below.
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <img
                        src="{{ asset('img/service-1.png')}}"
                        class="img-fluid rounded-start"
                        alt="..."
                      />
                    </div>
                  </div>
                </a>
                <a href="index.html" class="card box mb-3">
                  <div class="row g-0">
                    <div class="col-6 d-flex align-items-center">
                      <div class="card-body">
                        <p class="card-text text-dark fw-bold">
                          This is a wider card with supporting text below.
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <img
                        src="{{ asset('img/service-1.png')}}"
                        class="img-fluid rounded-start"
                        alt="..."
                      />
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- blog end -->

      <!-- service start -->
      <section class="service-section section-padding bg-light">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-9 m-auto">
              <div class="service-text text-md-center">
                <h2>Lorem Ipsum Dolor Sit Amet</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Phasellus aliquam sapien sed libero sollicitudin porta.
                </p>
              </div>
              <div class="row">
                <div class="col-12">
                  <nav>
                    <div
                      class="nav nav-tabs border-0 justify-content-center mb-0"
                      id="serviceTab"
                      role="tablist"
                    >
                      <button
                        class="nav-link active"
                        id="service-one-tab"
                        data-bs-toggle="tab"
                        data-bs-target=".service-one"
                        type="button"
                        role="tab"
                        aria-controls="service-one"
                        aria-selected="true"
                      >
                        <i class="fa-solid fa-rocket me-2"></i>
                        LoremIpsum
                      </button>
                      <button
                        class="nav-link"
                        id="service-two-tab"
                        data-bs-toggle="tab"
                        data-bs-target=".service-two"
                        type="button"
                        role="tab"
                        aria-controls="service-two"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-calendar-check me-2"></i>
                        LoremIpsum
                      </button>
                      <button
                        class="nav-link"
                        id="service-three-tab"
                        data-bs-toggle="tab"
                        data-bs-target=".service-three"
                        type="button"
                        role="tab"
                        aria-controls="service-three"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-briefcase me-2"></i>
                        LoremIpsum
                      </button>
                    </div>
                  </nav>
                  <hr />
                  <div class="tab-content" id="serviceDesc">
                    <div
                      class="tab-pane fade show active service-one"
                      id="service_one"
                      role="tabpanel"
                      aria-labelledby="service-one-tab"
                    >
                      <div
                        class="row justify-content-center align-items-center"
                      >
                        <div class="col-md-8 col-10 d-lg-none d-inline">
                          <img src="{{ asset('img/service-1.png')}}" alt="" />
                        </div>
                        <div class="col-12">
                          <h3
                            class="service-item-title text-capitalize fs-3 mb-3 mt-2"
                          >
                            Lorem ipsum dolor
                          </h3>
                          <p class="service-item-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Alias laudantium soluta minima quibusdam.
                            Numquam quos nobis quaerat dolores facere nihil
                            obcaecati libero accusantium, eius exercitationem
                            qui recusandae totam culpa natus.
                          </p>
                          <p class="service-direct">
                            Direct Link
                            <i class="fa-solid fa-circle-right ms-2"></i>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade service-two"
                      id="service_two"
                      role="tabpanel"
                      aria-labelledby="service-two-tab"
                    >
                      <div
                        class="row justify-content-center align-items-center"
                      >
                        <div class="col-md-8 col-10 d-lg-none d-inline">
                          <img src="{{ asset('img/service-2.png')}}" alt="" />
                        </div>
                        <div class="col-12">
                          <h3
                            class="service-item-title text-capitalize fs-3 mb-3 mt-2"
                          >
                            Lorem ipsum dolor 2
                          </h3>
                          <p class="service-item-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Alias laudantium soluta minima quibusdam.
                            Numquam quos nobis quaerat dolores facere nihil
                            obcaecati libero accusantium, eius exercitationem
                            qui recusandae totam culpa natus.
                          </p>
                          <p class="service-direct">
                            Direct Link
                            <i class="fa-solid fa-circle-right ms-2"></i>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade service-three"
                      id="service_three"
                      role="tabpanel"
                      aria-labelledby="service-three-tab"
                    >
                      <div
                        class="row justify-content-center align-items-center"
                      >
                        <div class="col-md-8 col-10 d-lg-none d-inline">
                          <img src="{{ asset('img/service-3.png')}}" alt="" />
                        </div>
                        <div class="col-12">
                          <h3
                            class="service-item-title text-capitalize fs-3 mb-3 mt-2"
                          >
                            Lorem ipsum dolor 3
                          </h3>
                          <p class="service-item-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Alias laudantium soluta minima quibusdam.
                            Numquam quos nobis quaerat dolores facere nihil
                            obcaecati libero accusantium, eius exercitationem
                            qui recusandae totam culpa natus.
                          </p>
                          <p class="service-direct">
                            Direct Link
                            <i class="fa-solid fa-circle-right ms-2"></i>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 d-lg-inline d-none">
              <div class="tab-content" id="serviceImg">
                <div
                  class="tab-pane fade show active service-one"
                  id="service_one"
                  role="tabpanel"
                  aria-labelledby="service-one-tab"
                >
                  <div class="row justify-content-center">
                    <div class="col-10">
                      <img src="{{ asset('img/service-1.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade service-two"
                  id="service_two"
                  role="tabpanel"
                  aria-labelledby="service-two-tab"
                >
                  <div class="row justify-content-center">
                    <div class="col-10">
                      <img src="{{ asset('img/service-2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade service-three"
                  id="service_three"
                  role="tabpanel"
                  aria-labelledby="service-three-tab"
                >
                  <div class="row justify-content-center">
                    <div class="col-10">
                      <img src="{{ asset('img/service-3.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- service end -->

      <!-- testimony start -->
      <section class="testimony-section section-padding">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="section-title">
                <h2 class="text-capitalize">Testimoni</h2>
              </div>
            </div>
          </div>
          <div class="owl-carousel testimony-carousel">
            <div class="card bg-body">
              <div class="row g-0 d-flex no-wrap">
                <div class="col-md-7 order-1 order-md-0">
                  <div class="card-body">
                    <p class="card-testimony fw-bold">
                      "Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Blanditiis at odit corporis optio possimus perspiciatis
                      deserunt! Itaque nam odio dolor illo repellat numquam
                      dolore animi. Dolorum, architecto. Nemo excepturi
                      consectetur perferendis nulla aut ea eaque illo
                      aspernatur!"
                    </p>
                    <p class="card-job">
                      <small class="text-muted name">John Doe</small>
                      <br />
                      <small class="text-muted job-position"
                        >Job Position - <b class="company">Company</b>
                      </small>
                      <br />
                      <small class="text-muted course"
                        >Alumni Program LoremIpsum.</small
                      >
                    </p>
                  </div>
                </div>
                <div class="col-md-5 order-0 order-md-1">
                  <img src="{{ asset('img/hero.png')}}" alt="..." />
                </div>
              </div>
            </div>
            <div class="card p-2 me-2 ms-2 bg-body">
              <div class="row g-0 d-flex no-wrap">
                <div class="col-md-7 order-1 order-md-0">
                  <div class="card-body p-3">
                    <p class="card-testimony fw-bold">
                      "Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Blanditiis at odit corporis optio possimus perspiciatis
                      deserunt! Itaque nam odio dolor illo repellat numquam
                      dolore animi. Dolorum, architecto. Nemo excepturi
                      consectetur perferendis nulla aut ea eaque illo
                      aspernatur!"
                    </p>
                    <p class="card-job">
                      <small class="text-muted name">John Doe</small>
                      <br />
                      <small class="text-muted job-position"
                        >Job Position - <b class="company">Company</b>
                      </small>
                      <br />
                      <small class="text-muted course"
                        >Alumni Program LoremIpsum.</small
                      >
                    </p>
                  </div>
                </div>
                <div class="col-md-5 order-0 order-md-1">
                  <img src="{{ asset('img/hero.png')}}" alt="..." />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- testimony end -->

      <!-- register start -->
      <section class="register-section section-padding">
        <div class="container">
          <div class="row section-padding bg-light justify-content-center">
            <div class="col-12">
              <div class="section-title text-center">
                <h2 class="text-capitalize">Lorem ipsum dolor?</h2>
                <p class="mb-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Soluta necessitatibus modi, adipisci consectetur perspiciatis
                  aperiam
                </p>
                <button class="btn btn-2">Register</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- register end -->

      <!-- course preview modal start -->
    <div
    class="modal fade video-modal js-course-preview-modal"
    id="video-modal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-0">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <i class="fa-solid fa-circle-xmark"></i>
          </button>
          <div class="ratio ratio-16x9">
            <iframe
              id="player-1"
              src="https://www.youtube.com/embed/LWBNRyNCWCQ"
              title="YouTube video player"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- course preview modal end -->

@endsection
