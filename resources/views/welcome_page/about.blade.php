@extends('layouts.welcome_page.app')
@section('content')
    <div class="container">

        <div class=" pt-5">
            <div class="card text-center  border-0 ">
                <div class="logo_area m-auto">
                    <img src="{{ asset('/storage/Altus_Logo.png') }}" class="card-img-top img-fluid "  alt="logo">
                    {{-- <div class="text_design text-3"><h1>Welcome To Online Registration</h1></div> --}}
                </div>

                <div class="card-body pt-5">
                </div>
             </div>
         <div class="card border-0">
                    <div class="text-gray-700 h2">
                    About Us
                    </div>
                    <div class="card-body">
                        <div class="mb-1 mt-2 text-justify p-2">
                            <p class=" text-muted ">
                            <em>ALTUS TECH IT SOLUTIONS</em>  is a software outsourcing company that offers wide range and comprehensive suite applications for business, industry, and education technology.</p>
                        </div>
                        <div class="mb-1 text-justify p-2">
                            <p class=" text-muted ">
                            <em>ALTUS TECH IT SOLUTIONS</em>  provides cost-effective and efficient solutions that help businesses and organizations achieve their immediate requirements and adapt and keep up in the trends in technology, oversee the attainment of given objectives in terms of profits and investments and total cost of ownership.</p>
                        </div>
                        <div class="mb-1 text-justify p-2">
                            <p class=" text-muted ">
                                We put ourselves on the experience and status of the organization. Thus, we also leverage the organization’s needs and objectives to support their capacity and capability to be more competitive among the others in the same line of business. To execute these, we have professionals from different fields and experiences who understand the business of every CLIENT and work for business objectives with empathy and commitment. This is our strategy to assure our CLIENTS that we have a competent and sustainable workforce to attend to the organization’s requisites.
                        </div>
                    </div>

          </div>
                <div class="card border-0">
                        <div class="text-gray-700 h2">
                        Vission
                        </div>
                        <div class="card-body">
                            <div class="mb-1 mt-2 text-justify p-2">
                                <p class=" text-muted ">
                                <em>ALTUS TECH IT SOLUTIONS</em>  envisions the attainment of full digital capability of its partners that leads to operational efficiency and effectiveness.
                            </div>
                        </div>
                </div>
                <div class="card border-0">
                    <div class="text-gray-700 h2">
                    Mission
                    </div>
                    <div class="card-body">
                        <div class="mb-0 mt-2 text-justify p-2">
                            <p class=" text-muted ">ALTUS TECH IT SOLUTIONS<p>
                        </div>
                        <div class="pl-3">
                            <div class="mb-0 text-justify p-2">
                                <p class=" text-muted ">
                                <strong class=" text-muted h3">a</strong>ims to equip its partners with relevant and cutting-edge digital innovations
                            </div>
                            <div class="mb-0 text-justify p-2">
                                <p class=" text-muted ">
                                <strong class=" text-muted h3">b</strong>elieves that technology gears-up an industry to be on track and meets its milestones.    </div>
                            <div class="mb-0 text-justify p-2">
                                <p class=" text-muted ">
                                <strong class=" text-muted h3">c</strong>reates opportunities for industries and academes with an Intelligent Transformation in innovating the delivery and execution of services.
                            </div>
                        </div>

                    </div>

                 </div>

          </div>
    <div class="pt-3">
        @include('layouts.welcome_page.footer')
      </div>
@endsection
