@extends('admin.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('staff_store') }}">
                        @csrf


                      
                       

                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" placeholder="first Name" class="form-control  @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="name" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="name" placeholder="Last Name" class="form-control @error('lname') is-invalid @enderror" name="lname" required>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                              <select name="gender" id="gender">
                                <option label="Select Gender" ></option>
                                <option value="male">Male</option>
                                <option value="female">FRemale</option>
                              </select>
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="office" class="col-md-4 col-form-label text-md-end">{{ __('Office') }}</label>

                            <div class="col-md-6">
                              <select name="office" id="gender">
                                <option label="Select office" ></option>
                                <option value="COD">Chair Of department</option>
                                <option value="DOS">Dean Of Student</option>
                                <option value="GAMES">Games</option>
                                <option value="LIB">Library</option>
                                <option value="FINANCE">Finance</option>
                                <option value="DOSCH">Dean Of School</option>
                               
                                

                              </select>
                            </div>
                        </div>


                        
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tell" placeholder="Tell" class="form-control @error('phone') is-invalid @enderror" name="phone" required>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="name" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="empNo" class="col-md-4 col-form-label text-md-end">{{ __('Staff No') }}</label>

                            <div class="col-md-6">
                                <input id="empNo" type="name" placeholder="Staff No" class="form-control @error('empNo') is-invalid @enderror" name="empNo" required>

                                @error('empNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dept" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="dept" type="org" placeholder="Department" class="form-control @error('dept') is-invalid @enderror" name="dept" required>

                                @error('dept')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection