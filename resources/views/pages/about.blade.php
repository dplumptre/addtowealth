@extends('layouts.layout')

@section('content')

    <main id="main-container" style="min-height: 196px;">
        <!-- Hero Content -->
        <div class="bg-primary-dark">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown">About Us</h1>

                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END Hero Content -->

        <!-- About Info -->
        <div class="bg-white">
            <section class="content content-boxed">
                <!-- Section Content -->
                <div class="row items-push push-20-t nice-copy">
                    <div class="col-md-12">
                        <h3 class="h5 font-w600 text-uppercase push-10">Who are we?</h3>

                        <p>{{ config('app.name') }} 
                            
was created to raise the best thing that can can happen to individuals with a particular plan to help man and the environment.    
We believe that the ability to live the routine you wish without having to work or rely on anyone else for cash, The wellbeing of the populace are our long-term lead. The commitment of our members sets us stand out from the crowd</p>

                   
                    </div>
                
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END About Info -->

   
        <!-- END Get Started -->
    </main>
@endsection