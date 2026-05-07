@extends('layouts.master')
@section('content')


             <!-- Start Breadcrumb Area -->
            <section class="page-area area-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 justify-content-start align-items-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="breadcrumb-title">
                                <div class="white-headline">
                                    <h2>Contact <span class="sp-color">Us</span></h2>
                                </div>
                            </div>
                            <div class="breadcrumb-page">
                               <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb ">
                                        <li class="breadcrumb-item">
                                           <a href="{{ route('welcome') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Area -->
            <!-- Start contact Area -->
            <div class="contact-page bg-color area-padding-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="contact-head wow fadeInLeft" data-wow-delay="0.4s">
                                <h4>Request a contact us</h4>
                                <p>Revail  The universal acceptance of building has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.</p>
                                <div class="single-contact">
                                    <a href="#"><i class="fa fa-map"></i><span>Road-7 old Street, Newyork</span></a>
                                    <a href="#"><i class="fa fa-envelope"></i><span>info@neflue.com</span></a>
                                </div>
                                <div class="project-share">
                                    <h5>Our Social Link :</h5>
                                    <ul class="project-social">
                                        <li>
                                            <a href="https://www.facebook.com/share/1HpyGiDky3/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://youtube.com/@motioncraft-mc?si=cSjSeO8lgDS5pEXO">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/rasel-hossain-855aa0407?utm_source=share_via&utm_content=profile&utm_medium=member_android">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=auimz39">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End contact icon -->
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="map-area wow fadeInRight" data-wow-delay="0.4s">
                                <div id="googleMap" style="width:100%;height:350px;"></div>
                            </div>
                        </div>
                        <!-- End contact Form -->
                    </div>
                </div>
            </div>
            <!-- End Contact Area -->
            <!-- Start Quote Area -->
            <div class="quote-area bg-color">
                <div class="container">
                    <div class="row quote-center">
                       <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="brand-content-inner">
                                <div class="brand-text wow fadeInUp" data-wow-delay="0.3s">
                                    <h3>Contact us for create animation story</h3>
                                    <p>Music video actor perform a nice song .Music video actor perform a nice song .Music video actor perform.</p>
                                </div>
                                <!-- Start Brand Area -->
                                <div class="brand-content wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="brand-carousel owl-carousel">
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/1.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/2.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/3.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/4.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/5.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/6.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/7.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/8.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="quote-all wow fadeInRight" data-wow-delay="0.3s">
                                <form id="contactForm" method="POST" action="{{ route('contacts.store') }}" class="contact-form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>

    @enderror

    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>

    @enderror

    <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject">
    @error('subject')
        <div class="alert alert-danger">{{ $message }}</div>

    @enderror


                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                           <textarea name="message" id="message" rows="7" class="form-control" placeholder="Message" ></textarea>
                                           @error('message')
                                            <div class="alert alert-danger">{{ $message }}</div>

                                           @enderror
                                            <div class="help-block with-errors"></div>
                                            <button type="submit" id="submit" class=" anti-btn quote-btn">Submit</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Quote Area -->

@endsection

@section('footer')
    <!-- Footer content here -->

    @if(session('success'))
<script>
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif
@endsection
