@include('frontend.header')

<style>  
    @media only screen and (max-width: 600px) {
    
            .auto-container{
                width:auto!important;
            }
            .text{
        text-align: justify!IMPORTANT;
        font-size: 16px !IMPORTANT;
        font-family: PT SERIF !IMPORTANT;
        color:#000;
            }
            .font-alt{
                font-size:29px!important;
            }
            .overlay-box p{
                margin-left:2%!important;
                margin-top:20%!important;
                text-align:justify!IMPORTANT;
                width:80%!important;
            }
    
    }
.btn-success1:hover {
    color: #fff;
    background-color: #a9d158;
    border-color: #a9d158;
}
.btn-success1 {
    color: #f8f9fa;
    background-color: #a9d158;
    border-color: #28a745;
    width: 25%;
    font-size: 18px!important;
    padding-top: 1%!important;
}
@media (min-width: 992px){
.col-lg-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 251px;
}}
.text{
        text-align: justify!IMPORTANT;
    font-size: 20px;
    font-family: PT SERIF !IMPORTANT;
    color:#000;
}

.screenshots ul {
    margin: 0;
    padding: 0;
    width: 100%;
}
.screenshots ul li {
    float: left;
    list-style: none;

}
.screenshots figure {
    position: relative;
    overflow: hidden;
    margin: 6px 0px;
}
.screenshots figure img {
    width: 100%;
    height: 100%;
    -webkit-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
}
.screenshots figure:hover img, .screenshots figure:focus img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}
.screenshots figcaption {
       position: absolute;
    top: 0;
    left: 0;
    padding: 25% 0;
    width: 100%;
    height: 100%;
    background-color: rgb(0 0 0 / 50%);
    text-align: center;
    font-size: 15px;
    opacity: 0;
    -webkit-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
    color: #fff;
}
.screenshots figcaption a {
    color: #fff;
}
.screenshots figcaption a:hover, .screenshots figcaption a:focus {
    color: #73d0da;
}
.screenshots figure:hover figcaption, .screenshots figure:focus figcaption {
    opacity: 1;
}
.visible {
    opacity: 1;
}
.screenshots figure.cs-hover figcaption {
    opacity: 1;
}
.screenshots figcaption i {
        font-size: 24px;
        line-height: 37px;
        margin: 10px;
}
.screenshots figcaption p {
    margin-bottom: 0;
    text-transform: uppercase;
    font-weight: 400;
}
.screenshots figcaption .caption-content {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -40px;
    margin-left: -100px;
    width: 200px;
    -webkit-transform: translate(0px, 15px);
    -ms-transform: translate(0px, 15px);
    transform: translate(0px, 15px);
    -webkit-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
}
.screenshots figure:hover figcaption .caption-content, .screenshots figure:focus figcaption .caption-content {
    -webkit-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
}
.no-padding{
  padding: 0 !important;
}





h2,h6
{
    color: #261e1e;
    font-size: 30px;
    font-family: PT SERIF;
}
.form-subscribe
{
  max-width:600px;
  margin:0 auto
}
.form-subscribe .form-control
{
  background-color:hsla(0,0%,100%,.8);
  padding-left:24px;
  padding-right:24px;
  letter-spacing:1px;

  border-top-left-radius:36px;
  border-bottom-left-radius:36px
}
.form-subscribe .form-control.focus,.form-subscribe .form-control:focus
{
  z-index:2;
  background-color:hsla(0,0%,100%,.8)
}
.form-subscribe .btn
{
  border-top-right-radius:36px;
  border-bottom-right-radius:36px;
  background:#7ec855;
  border-color:#7ec855;
  height:46.5px;
}




.button,
.button:visited {
  font-size: 1.5em;
  text-transform: uppercase;
  text-decoration: none;
  display: inline-block;
  font-family:sans-serif;
  padding:.75em 1.25em;
  border:1px solid;
  color:teal;
  font-weight:bold;
  border-radius:.25em;
  transition:box-shadow 1s ease-out;
    
    &:hover {box-shadow:0 1px 12px rgba(100,200,200,.8) inset;}
}
</style>
		<!--<div id="preloader">-->
		<!--	<div id="ctn-preloader" class="ctn-preloader">-->
		<!--		<div class="animation-preloader">-->
		<!--			<div class="spinner"></div>-->
		<!--			<div class="txt-loading">-->
		<!--				<span data-text-preloader="L" class="letters-loading">-->
		<!--					L-->
		<!--				</span>-->
						
		<!--				<span data-text-preloader="O" class="letters-loading">-->
		<!--					O-->
		<!--				</span>-->
						
		<!--				<span data-text-preloader="A" class="letters-loading">-->
		<!--					A-->
		<!--				</span>-->
						
		<!--				<span data-text-preloader="D" class="letters-loading">-->
		<!--					D-->
		<!--				</span>-->
						
		<!--				<span data-text-preloader="I" class="letters-loading">-->
		<!--					I-->
		<!--				</span>-->
						
		<!--				<span data-text-preloader="N" class="letters-loading">-->
		<!--					N-->
		<!--				</span>-->
						
		<!--				<span data-text-preloader="G" class="letters-loading">-->
		<!--					G-->
		<!--				</span>-->
		<!--			</div>-->
		<!--		</div>	-->
		<!--		<div class="loader-section section-left"></div>-->
		<!--		<div class="loader-section section-right"></div>-->
		<!--	</div>-->
		<!--</div>-->

    <!-- Banner Section -->
    <section class="banner-section" style="margin-top: 12%;">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('frontend_lib/images/main-slider/us1.jpg')}});">
                <div class="auto-container">
                  
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('frontend_lib/images/main-slider/Slider_4_1350_685.jpg')}});">
                <div class="auto-container">
                   
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('frontend_lib/images/main-slider/Slider_3_1350_685.jpg')}});">
                <div class="auto-container">
                   
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('frontend_lib/images/main-slider/Slider_1_1350_685.jpg')}});">
                <div class="auto-container">
                  
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

   

    <!-- About Section -->
    <section class="about-section">
        <div class="full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container" style="width: 1048px;">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <!-- <span class="title">ABOUT EVENT</span> -->
                            <h2>Welcome. We are the </h2><br><h2 style="color:#a9d158;">New York</h2>
                               <h2 style="color:#a9d158;">State Association of Resident
                                Service Coordinators.</h2>
                           
                        </div>
                      
                        <!-- <div class="btn-box"><a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div> -->
                    </div>
                </div>

                <!-- Image Column -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text">New York State Service Coordinators work at over 1,000 senior housing complexes throughout New York state.
                         Our primary responsibility is to aid residents to “age in place” in independent housing for as long as possible.
                          We achieve this by accessing and facilitating needed services. We are required to be familiar with the current federal, state, county, 
                        community regulations and benefits so that seniors can know the availability of programs designed for them.</div>
                </div>
            </div>
        </div>
    </section>
     <section class="bg-img text-center">
        <div class="container">
          <h2>
            <!--<strong>Subscribe</strong>-->
          </h2>
          <h6 class="font-alt">Subscribe to our mailing list</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Your email address">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit" style="padding-top:2%;">Subscribe</button>
              </span>
            </div>
          </form>
        </div>
      </section>
 
    <!-- Gallery Section -->
    <section class="gallery-section style-two">
          <h4 style="text-align: center; padding-top: 5%; padding-bottom: 5%;">Highlights of our 2019 Conference</h4>
        <div class="gallery-carousel owl-carousel owl-theme">
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('frontend_lib/images/DSC_3433e-390x390.jpg')}}" alt=""></figure>
                  
                    <div class="overlay-box">   <p style="color:#fff;font-style: italic;line-height: 1.5rem;">Learning from top notch speakers</p><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('frontend_lib/images/IMG_4086e-390x390.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><p style="color:#fff;font-style: italic;line-height: 1.5rem;">Meeting sponsors 1 on 1 to find out about their latest offerings</p><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox='gallery'></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('frontend_lib/images/sponsor-2019-new-390x390.gif')}}" alt=""></figure>
                    <div class="overlay-box"><p style="color:#fff; font-style: italic;line-height: 1.5rem;" >We thank our 2019 sponsors, they helped put on a great conference !</p><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox='gallery'></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('frontend_lib/images/IMG_4169e-390x390.jpg')}}" alt=""></figure>
                    <div class="overlay-box"> <p style="color:#fff;font-style: italic;line-height: 1.5rem;">Our Keynote speaker</p><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox='gallery'></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('frontend_lib/images/IMG_4157e-390x390.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><p style="color:#fff;font-style: italic;line-height: 1.5rem;">Attendees enjoying a delicious networking dinner.</p><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox='gallery'></a></div>
                </div>
            </div>

        </div>
    </section>
    <div style="padding-top:5%;padding-bottom:5%;text-align:center;">
    
<span class="input-group-btn">
          <a href="https://www.youtube.com/watch?v=3K72OUWU7iw" target="_blank" style="color:#fff!important;">      <button class="btn btn-success1 btn-lg"  type="submit" style="padding-top:2%;">Watch Highlights of the NYSARSC Annual Conference 2019</a></button>
              </span></div>
    <!--End Gallery Section -->
    <!--End About Section -->

<!--<div style="padding-left:50%;padding-right:50%;">-->
<!--    <button class="button">View a slide show of 2019 Conference</button>-->
<!--</div>-->
    <script>$(document).ready(function() {
				$("a.single_image").fancybox({
				
				});
			});
			
			
			</script>
    <!--End Subscribe Section -->

@include('frontend.footer')
@include('frontend.script')


</body>
</html>
