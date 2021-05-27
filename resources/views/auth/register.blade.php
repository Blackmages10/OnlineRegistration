
@extends('layouts.welcome_page.app')

@section('content')
    <div class="container">
        <div class=" pt-5">


        <div class=" card  border-0">
            <div class=" card-body">


                <hr class="style-one">
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card border-0">

                <div class="card-body">
                    <div class="logo_area m-auto">
                        <img src="{{ asset('/storage/Altus_Logo.png') }}" class="card-img-top img-fluid "  alt="logo">
                    </div>
                    <div class=" mb-lg-5"></div>
                    <div class="robot">
                    <img src="{{ asset('/storage/robot.jpg') }}" class="card-img-top" alt="...">

                    </div>



                </div>
              </div>
            </div>

            <div class="col">
              <div class="card border-0">
                <div class="card-body">
               <div class=" m-auto">
                            <div class="login-box">
                                <h2 class="form_header"><div class="text_design1 text-3 ">Personal Details</div></h2>
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" form-group m-10">
                                            <input type="text" id="first_name"  class=" input_form @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  placeholder="Firstname">
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class=" form-group  m-10">

                                            <input type="text" class=" input_form  @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" id="last_name" placeholder="Lastname">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-group  m-10">

                                    <input type="text" class=" input_form  @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" placeholder="Mobile Phone Number">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                        <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class=" form-group  m-10">
                                    <div class="row">
                                        <div class=" col-4 pr-0">
                                            <label for="job_title" class="label_form pb-2">Job Title :</label>
                                        </div>
                                        <div class="col-8">
                                            <select name="job_title"  class="form-select @error('job_title') is-invalid @enderror" aria-label="Default select example">
                                                <option value="{{ null }}">Select Job Title</option>
                                                @foreach ($job_titles as $job_title )
                                                    <option value="{{$job_title->id}}" {{ old('job_title')==$job_title->id ? "selected" : "" }} > {{ $job_title->job_title}}</option>
                                                @endforeach
                                            </select>
                                            @error('job_role')
                                                <span class="invalid-feedback" role="alert">
                                                <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <div class=" form-group  m-10">
                                    <div class="row">
                                        <div class=" col-4 pr-0">
                                            <label for="job_role" class="label_form pb-2">Job Role :</label>
                                        </div>
                                        <div class="col-8">
                                            <select name="job_role"  class="form-select @error('job_role') is-invalid @enderror" aria-label="Default select example">
                                                <option value="{{ null }}">Select Job role</option>
                                                @foreach ($job_roles as $job_role )
                                                    <option value="{{$job_role->id}}" {{ old('job_role')==$job_role->id ? "selected" : "" }} > {{ $job_role->job_role}}</option>
                                                @endforeach
                                            </select>
                                            @error('job_role')
                                                <span class="invalid-feedback" role="alert">
                                                <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-group  mt-10 ml-10 mr-10 mb-1">

                                    <div class="row">
                                        <div class=" col-4 pr-0">
                                            <label for="company_type" class="label_form pb-2">Company Type :</label>
                                        </div>
                                        <div class="col-8">
                                            <select name="company_type"  class="form-select @error('company_type') is-invalid @enderror"  aria-label="Default select example">
                                                <option value="{{ null }}">Select Company type</option>

                                                @foreach ($company_types as $company_type )
                                                    <option value="{{$company_type->id}}" {{ old('company_type')==$company_type->id ? "selected" : "" }}  > {{ $company_type->company_type}}</option>
                                                @endforeach
                                            </select>
                                            @error('company_type')
                                                <span class="invalid-feedback" role="alert">
                                                <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                 </div>


                                <div class=" form-group  m-10">

                                    <input type="text" class=" input_form @error('company_name') is-invalid @enderror" name="company_name" id="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
                                    @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                        <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                     @enderror


                                </div>

                                 <div class=" form-group  m-10">
                                    <div class="row">
                                        <div class=" col-4 pr-0">
                                            <label for="industry" class="label_form pb-2">Industry : </label>
                                        </div>
                                        <div class="col-8">
                                            <select name="industry"  class="form-select @error('industry') is-invalid @enderror" aria-label="Default select example">
                                                <option value="{{ null }}">Select Industry</option>

                                                @foreach ($industries as $industry )
                                                    <option value="{{$industry->id}}"  {{ old('industry')==$industry->id ? "selected" : "" }}> {{ $industry->industry}}</option>
                                                @endforeach
                                            </select>
                                            @error('industry')
                                                <span class="invalid-feedback" role="alert">
                                                <i class=" text-warning">{{ $message }}</i >
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                 {{-- register --}}

                                   <hr class="style-seven">

                                    <h5 class="form_header"><div class="text_design_register ">Register Account</div></h5>
                                    <div class="form-group m-10">


                                            <input id="email" type="email" class="input_form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror


                                    </div>

                                    <div class="form-group m-10">



                                            <input id="password" type="password" class="input_form @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group m-10">
                                            <input id="password-confirm" type="password" class="input_form" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                                    </div>

                                    <div class="form-group mb-1">
                                        <label class="term_form mb-0">

                                            <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms" id="terms" value="1" {{ !old('terms') ?: 'checked' }}>I agree with the <a href="#" class="condition pl-1 ">terms and conditions</a>
                                          {{-- <input type="checkbox" class="form-control" name="terms" value="{{ old('terms') }}" /> Agree with the terms and conditions --}}
                                        </label>
                                        <div class="mt-0 ml-3">
                                            @if ($errors->count())
                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                @if ($error=='*The term and condition is required')
                                                <i class=" text-warning">{{ $error}}</i>
                                                @endif

                                                @endforeach

                                             @endif
                                        @endif
                                        </div>

                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="form-group d-grid gap-2 mb-0">
                                            <button class="btn btn-primary" type="submit">Register Now!</button>
                                    </div>
                                    </div>


                            </form>
                              </div>

                        </div>
                </div>
              </div>
            </div>
        </div>

        <div class="p-4">
        </div>
          @include('layouts.welcome_page.footer')


    </div>


@endsection
