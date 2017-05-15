@extends('layouts.layout')

@section('content')

    <main id="main-container">
        <div>
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed overflow-hidden">
                    <!-- Section Content -->
              
                    <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
                        <div class="col-sm-8 col-sm-offset-2">

                        </div>
                        <!-- END Section Content -->
                    </div>
                </section>
            </div>
        </div>
        
        
      <section class="">    
          <img src="{{ URL::asset('assets/img/videos/banner.png')}}" class="img-responsive"  style="border-bottom: 5px #00cc66 solid"width="100%" height="10%"/>
      </section>
        

        <div class="bg-white">
            <section class="content content-boxed">
                <!-- Section Content -->

                <div class="row items-push-3x nice-copy">
                    
                <div class="col-sm-6">
                <div class="text-center push-30">
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Who We Are</h3>

                <p>We at A.T.W have dedicated our time as a team of zealous and dedicated individuals, that wish to create wealth 
                and bring to existence a  ...<a href="{{ URL::asset('about') }}">read more</a></p>
                        
                        
                <div class="text-center push">
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Support</h3>

                <p>Please feel free to write an email to us on whatever issues you may encounter , our support system works 24/7 support@bufwealth.com
                </p>
               </div>
                    
                    
                    
            <div class="col-sm-6">

            <div class="bg-primary-dark-op" style="border-radius: 50px;">
                <section class="content content-full content-boxed" >
            <!-- Section Content -->
            <div class="push-20-t push-20 text-center" style="margin: 20px 0px">
            <h3 class="h4 push-20 animated fadeIn text-white-op" data-toggle="appear">Start making money and getting return of your investments!</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success animated bounceIn" data-toggle="appear" data-class="animated bounceIn"
               href="{{ URL::asset('/register')}}"> <span style="color: white">START NOW!</span></a>
            </div>
            <!-- END Section Content -->
            </section>
            </div> 
            </div>
                    
                    
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        
      
      
      
      
<!--        <div class="container bootstrap snippet " style="margin-top: 60px;margin-bottom: 60px;">
    <div class="row">
        <h2 class="text-center text-primary">Testimonies</h2>
       
        <div class="col-md-10 col-md-offset-1" style="padding-top: 30px">
			<div class="row testimonials">
				<div class="col-sm-4">
					<blockquote>
						<p class="clients-words">{{ config('app.name') }}, It is the best program , It gives everyone an opportunity to earn income online</p>
						<span class="clients-name text-primary">—Toyosi Salako</span>
						<img class="img-circle img-thumbnail" src="assets/img/avatars/w2.jpg">
					</blockquote>
				</div>
				<div class="col-sm-4">
					<blockquote>
						<p class="clients-words">{{ config('app.name') }} ,is the best platform around, a test can convince you! </p>
						<span class="clients-name text-primary">— Adamson Bankole</span>
						<img class="img-circle img-thumbnail" src="assets/img/avatars/man1.jpg">
					</blockquote>
				</div>
				<div class="col-sm-4">
					<blockquote>
						<p  class="clients-words"> I have used {{ config('app.name') }}, and I got paid . the site is also very easy to use</p>
						<span class="clients-name text-primary">— Bababode Oshilaja</span>
						<img class="img-circle img-thumbnail" src="assets/img/avatars/man2.jpg">
					</blockquote>
				</div>
			</div>/.row
		</div>/.col	
	</div>/.row
</div>-->


      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       <div class="row">   
      
           <div class="bg-white" >

      <div class="container" >

        <div class="col-md-4" style="margin-top: 60px" >
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="text-center">Starter Package</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong> <strong>&#X20A6 5,000</strong></strong>
                    </p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">
                       <strong>2:1</strong> MATRIX
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>

                    <li class="list-group-item">
                       <strong></strong> AUTO ASSIGN
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>
                    <li class="list-group-item">
                       <strong>&#X20A6 10,000</strong> <br />RETURN INVESTMENT
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-success"> <span style="color: white">Active </span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 60px" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="text-center">Commercial package</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong> <strong>&#X20A6 10,000</strong></strong>
                    </p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">
                       <strong>2:1</strong> MATRIX
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>

                    <li class="list-group-item">
                       <strong></strong> AUTO ASSIGN
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>
                    <li class="list-group-item">
                       <strong>&#X20A6 20,000</strong> <br />RETURN INVESTMENT
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-success"><span style="color: white">Active </span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 60px" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="text-center">Standard package</h4>
                </div>
                             <div class="panel-body text-center">
                    <p class="lead">
                        <strong> <strong>&#X20A6 20,000</strong></strong>
                    </p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">
                       <strong>2:1</strong> MATRIX
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>

                    <li class="list-group-item">
                       <strong></strong> AUTO ASSIGN
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>
                    <li class="list-group-item">
                       <strong>&#X20A6 40,000</strong> <br />RETURN INVESTMENT
                        <span class="glyphicon glyphicon-ok pull-right"></span>
                    </li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-success"><span style="color: white">Loading... </span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
      
      
      
      
      
      
      

         
        
               <div class="bg-image" style="background: #E8EFF9 ;">
            <div>
                <section class="content content-boxed overflow-hidden">
                    <!-- Section Content -->
                    <div class="row items-push push-20-t push-20 text-center">
                        <div class="col-sm-6">
                            <div class="h1 text-gray push-5" data-toggle="countTo" data-to="{{ $allusers }}" data-after="+">{{ $allusers }}+</div>
                            <div class="font-w600 text-uppercase text-gray ">Accounts Today</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="h1 text-gray  push-5"  data-to="{{ $latestusers }}" data-after="">{{ $latestusers }}</div>
                            <div class="font-w600 text-uppercase text-gray ">Newest Member</div>
                        </div>
<!--                        <div class="col-sm-4">
                        <?php
//                        $sum = 0;
//                        
//                        if( !empty($amount_paid )){
//                        foreach($amount_paid as $key=>$value)
//                        {
//                        $sum+= $value->amount;
//                        }}
                        ?>
                        <div class="h1 text-gray  push-5"  data-to="{{-- number_format($sum) --}}" data-after=""> {{-- number_format($sum) --}}</div>
                        <div class="font-w600 text-uppercase text-gray ">( &#8358; ) Amount Received By Users</div>      
                        </div>
                    </div>-->
                    <!-- END Section Content -->
                </section>
            </div>
        </div>        
        
 
      

    </main>

@endsection