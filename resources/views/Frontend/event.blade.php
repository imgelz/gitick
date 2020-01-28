@extends('layouts.Frontend.event')

@section('content')
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/frontend/images/tiket.jpg);">
    	<div class="container">
    		<div class="text">
		        <center>
                    <h1 style="font-size:80px; color:burlywood"><strong class="name-banner"><font face="Arial">Beli Tiket Eventmu</font><strong></h1><h4 style="color:burlywood">Jadikan wacana eventmu menjadi sebuah rencana dengan Gitick.id</h4>
                </center>
		    </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Cari Kategori Eventmu Disini</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
    				<div class="destination kategori">
    					<a href="#" class="img img-2 kate d-flex justify-content-center align-items-center" style="background-image: url(/frontend/images/konser1.jpg);">
    						<div>
    							<h3 style="color:white;"><b>Konser</b></h3>
    						</div>
    					</a>
    				</div>
                </div>
            </div>
    	</div>
    </section><br>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/frontend/images/people.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="60">0</strong>
		                <span>Konser</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>TalkShow</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="25">0</strong>
		                <span>Konferensi</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10">0</strong>
		                <span>Teater</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Rekomendasi Event</h2>
                </div>
            </div>
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-3 ftco-animate">
    				<div class="destination tiket">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/frontend/images/konser.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Comedy Festival</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price"></span>
    							</div>
                            </div>
                            <br>
    						<span>19 Desember 2019</span><br>
                            <span>09:00 AM - 02:00 PM</span>
                            <br><br>
                            <span>Braga CityWalk ,Bandung</span>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span style="color:burlywood"><i class="icon-map-o" style="color:brown"></i> Comedy Show</span>
    							<span class="ml-auto"><a href="#">Detail</a></span>
    						</p>
    					</div>
                    </div>
                </div>
    		</div>
    	</div>
    </section>
    <hr>
    <center><div class="col-md-6">
        <div class="boxed-3rd">
            <h5>Metode Pembayaran :</h5>
            <ul class="logo-3rd">
                <figure class="logo" >
                    <img src="/frontend/images/dana.png" width="100px" style="height:30px">
                </figure>
            </ul>
        </div>
    </div></center>
@endsection
