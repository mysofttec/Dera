@extends('site.master')
@section('content')
    <div class="container">
        <div class=" jumbotron-fullwidth background-grey m-b-0">

            <div class="image-box-content col-md-8">
                <a>
                        <img src="{{asset('polo')}}/images/gumroad.jpg" alt="Polo Logo">
                    </a>

            </div>

        </div></div>
        <div class="container">
        <div class="image-box-content col-md-12">
    <div class="jumbotron  background-grey m-b-3">

            <h3>Ready To Sell Your Prduct?</h3>
            <p>Earn Money Selling Digital Products You Create</p>
            <a href="/fileentries" class="button border rounded"><span>Upload</span></a>
        </div></div>
    </div>
    <!-- END: CALL TO ACTION -->

    <!-- BOXES -->
    <div class="box-fancy section-fullwidth text-light">
        <div class="container">
            <div class="row">
                <a href="{{ url('/cat', $cat[0]) }}">
                <div class="col-md-4 text-center" style="background-color: #f7bc60;">
                    <img src="{{asset('polo')}}/images/imgT.png" alt="Theme Logo">
                    <h2>THEMES</h2>
                    <span>Sell your themes it's a land grab stake your claim .As a seller you'll have the opportunity to build-up your personal brand and set yourself apart by uploading a header image and filling out the about section on your seller profile </span>
                </div></a>

                <a  href="{{ url('/cat', $cat[1]) }}">
                    <div class="col-md-4 text-center" style="background-color: #f05050">
                    <img src="{{asset('polo')}}/images/imgS.png" alt="Software Logo">
                    <h2>SOFTWARES</h2>
                    <span>Sell your software or any digital products or you can maximize your sales using the power of social networks, such as Facebook, Twitter, Pinterest, Google Plus, etc. It's pretty simple to get started </span>
                </div></a>


                <a  href="{{url('/cat', $cat[2]) }}">
                    <div class="col-md-4 text-center" style="background-color: #b35e14">
                    <img src="{{asset('polo')}}/images/imgA.png" alt="Apps">
                    <h2>APPLICATIONS</h2>
                    <span>Selling an app has never been simpler. Start an app auction on SSM and reach our niche audience of motivated international app buyers and you'll get best price from serious buyers than you'll find with any other seller</span>
                </div></a>
            </div>
        </div>
        </div>
        <section>
        <div class="box-fancy section-fullwidth text-light">
            <div class="container">
                <div class="row">
                    <a  href="{{ url('/cat', $cat[3]) }}">
                        <div class="col-md-4 text-center" style="background-color: #bf800c;">
                        <img src="{{asset('polo')}}/images/imgE.png" alt="Theme Logo">
                        <h2>E-BOOK</h2>
                        <span>Creating an eBook is a great way to dive into selling digital products. And, it doesn’t take as much technical expertise as building a course.

If you’re a blogger who creates written content, think of it as creating a little more of that content</span>
                    </div></a>

                    <a href="{{url('/cat', $cat[4])}}">
                        <div class="col-md-4 text-center" style="background-color: #cdad96;">
                        <img src="{{asset('polo')}}/images/imgd.png" alt="Software Logo">
                        <h2>AUDIOS</h2>
                        <span> You can easily sell your audio products on hundreds of music stores and subscription services such as iTunes, Amazon, Spotify, Deezer and 7Digital and get best price from serious buyers then any other sellers
                        </span>
                    </div></a>


                    <a  href="{{ url('/cat', $cat[5])}}">
                        <div class="col-md-4 text-center" style="background-color: #dc4735">
                        <img src="{{asset('polo')}}/images/imgv.png" alt="Apps">
                        <h2>VIDEOS</h2>
                        <span>Make money selling your films and series directly online to a worldwide audience. Set your own price and take home 90% of the revenue after transaction costs.You will find best buyers of your videos then any other</span>
                    </div></a>
                </div>
            </div>
        </div>
        </section>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading heading-left m-b-60">
                        <h2>WHY CHOOSE US</h2>
                    </div>
                    <div class="accordion toggle fancy clean accordion-transparent">
                        <div class="ac-item">
                            <h5 class="ac-title">YOUR PRODUCTS ARE SECURE</h5>
                            <div class="ac-content" style="display: none;"></div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title">IDENTIFY SMALL BUSINESS PAIN POINTS</h5>
                            <div class="ac-content" style="display: none;"></div>
                        </div>
                        <div class="ac-item ac-active">
                            <h5 class="ac-title">WORLDWIDE BUSINESS COMPANY</h5>
                            <div class="ac-content"></div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title">BETTER COMUNICATION</h5>
                            <div class="ac-content" style="display: none;"></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading heading-left">
                        <h2>OUR SKILLS</h2>
                    </div>
                    <div class="progress-bar-container title-up small color">
                        <div class="progress-bar" data-percent="100" data-delay="100" data-type="%">
                            <div class="progress-title">CONSULTING</div>
                        </div>
                    </div>

                    <div class="progress-bar-container title-up small color">
                        <div class="progress-bar" data-percent="94" data-delay="200" data-type="%">
                            <div class="progress-title">SUPPORT</div>
                        </div>
                    </div>

                    <div class="progress-bar-container title-up small color">
                        <div class="progress-bar" data-percent="78" data-delay="300" data-type="%">
                            <div class="progress-title">MANAGEMENT</div>
                        </div>
                    </div>

                    <div class="progress-bar-container title-up small color">
                        <div class="progress-bar" data-percent="65" data-delay="400" data-type="%">
                            <div class="progress-title">ECONOMY</div>
                        </div>
                    </div>

                    <div class="progress-bar-container title-up small color">
                        <div class="progress-bar" data-percent="78" data-delay="300" data-type="%">
                            <div class="progress-title">INVESTMENT</div>
                        </div>
                    </div>

                    <div class="progress-bar-container title-up small color">
                        <div class="progress-bar" data-percent="65" data-delay="400" data-type="%">
                            <div class="progress-title">MANAGEMENT AGREEMENTS</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- WHY CHOOSE US -->

    <!-- GALLERY -->


@endsection