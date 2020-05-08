<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
</head>
<body>

<div class="section-container">
    <section class="hdr_div">

        @include('layouts.frontend.include.header')

        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-5 pt-5">
                    <h2 class="text-white">Learn the Pathway to Stardom</h2>
                    <h1 class="my-4"><strong>America's Most Successful <br> Teen Actors</strong></h1>
                    <a href="{{ route('order.page') }}" class="btn btn-lg btn-primary bg-white text-dark border-0 px-5 py-3">Enroll Now</a>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('images/img-main.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 320"><path fill="#ffffff" fill-opacity="5" d="M0,128L48,128C96,128,192,128,288,138.7C384,149,480,171,576,197.3C672,224,768,256,864,250.7C960,245,1056,203,1152,170.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</div>



<section class="py-5">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-sm-7">

                <div class="embed-responsive-cn">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4BWxQ4bPajk" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <div class="col-sm-5">

                <h1 style="font-size: 30px; color: #FBBEFE; font-weight:700;">kylie cantrall</h1>
                <p style="font-size: 20px; color: #6F6F6F; font-weight: 500; text-transform:capitalize;">tells us what you can except in<br> our young actors on acting<br> virtual workshop!</p>

            </div>
        </div>
    </div>
</section>


<section class="mb-5" style="background-color:#9FD9FF">
    <div class="container" style="padding-top: 20px; height: 380px; margin-top: 30px">
        <p class="text-center" style="font-size: 30px; color: #191919; font-weight: 700; margin-bottom: 0;">Kids With Star Talent </p>
        <p class="text-center" style="font-size: 30px;color: #fff;font-weight: 500">A Parents Guide To Making Your Kid Successfull.</p>
        <p class="text-center" style="font-size: 23px;color: #fff;font-weight: 400">You'll learn tips ,tricks and advice from the parents of your favorite<br> kid and teen TV actors. These parents have been through all the ups<br> and downs and can hel • lead the wa to your child success! </p>


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img class="img-fluid" src="{{ asset('images/image-1.png') }}" alt="Image" >
                </div>
                <div class="col-sm">
                    <img class="img-fluid" src="{{ asset('images/image-2.png') }}" alt="Image" >
                </div>
                <div class="col-sm">
                    <img class="img-fluid" src="{{ asset('images/image-3.png') }}" alt="Image" >
                </div>
                <div class="col-sm">
                    <img class="img-fluid" src="{{ asset('images/image-4.png') }}" alt="Image" >
                </div>
            </div>
        </div>
    </div>
</section>
</br></br></br>

<div class="section-cont">
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <h2><strong>Who We Are</strong></h2>
                    <h5> <strong>We are successful Hollywood teen actors and social media influencers. <br>
                            Our mission is to inspire kids who are suffering from social isolation to "change their lens of perspective" and use this time at home to study, grow, and learn their craft. <br>
                            We will provide a fun and entertaining online acting mentorship forum that includes the opportunity to interact with and rehearse live scenes with real teen TV Stars. <br>
                            We are also going to invite some of our social media influencers to share their pathway to success and teach you some of the business side of being a young actor or influencer today.

                            <br><br>-Young Actors On Acting, LLC.</strong></h5>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/img-1.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </section>
</div>

<div class="section-cn">
    <section class="grdient-bg learn-section">
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="text-white">Learn the Pathway to Stardom</h3>
                        <h1 class="mb-5">America's Most Successful <br> Teen Actors</h1>
                        <a href="{{ route('order.page') }}" class="btn btn-lg btn-primary bg-white text-dark border-0 px-5 py-3">Enroll Now</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="grad2" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:rgb(251, 190, 254);stop-opacity:1"></stop>
                <stop offset="100%" style="stop-color:rgb(251, 190, 254);stop-opacity:1"></stop>
            </linearGradient>
        </defs>
        <path fill="url(#grad2)" fill-opacity="5" d="M0,192L60,160C120,128,240,64,360,42.7C480,21,600,43,720,74.7C840,107,960,149,1080,154.7C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</div>



<footer class="footer mt-0 pb-3 pt-3 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="text-center text-muted">
                    <span class="text-white">&copy; Copyright 2020</span> |
                    <a href="#" class="text-muted">Website by Young Actors On Acting</a> |
                    <a href="#" class="text-muted">All Right Reserved</a> |
                    <a href="#" class="text-muted">Privacy Policy</a> |
                    <a href="#" class="text-muted">Terms</a> |
                    <a href="#" class="text-muted">Become An Affilliate</a>
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
