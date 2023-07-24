@extends('base')
@section('content')
<div class="card-body">
    <form method="POST" action="{{route("missing_mark_store")}}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

            <div class="col-md-6">
                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="regno" class="col-md-4 col-form-label text-md-end">{{ __('Reg Number') }}</label>

            <div class="col-md-6">
                <input id="regno" type="text" class="form-control @error('regno') is-invalid @enderror" name="regno" value="{{ old('regno') }}" required autocomplete="phone">

                @error('regno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="unit_name" class="col-md-4 col-form-label text-md-end">{{ __('Unit ') }}</label>

            <div class="col-md-6">
                <input id="unit_name" type="tel" class="form-control @error('unit_name') is-invalid @enderror" name="unit_name" value="{{ old('unit_name') }}" required autocomplete="name">

                @error('unit_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="unit_code" class="col-md-4 col-form-label text-md-end">{{ __('Unit Code') }}</label>

            <div class="col-md-6">
                <input id="unit_code" type="tel" class="form-control @error('unit_name') is-invalid @enderror" name="unit_code" value="{{ old('unit_code') }}" required autocomplete="name">

                @error('unit_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="year_of_study" class="col-md-4 col-form-label text-md-end">{{ __('Year Of Study') }}</label>
            <select name="year" id="year_of_study" required>
            <option label="Select Year Of study"> </option>
            <option value="1">year 1</option>
            <option value="2">year 2 </option>
            <option value="3">year 3</option>
            <option value="4">year 4</option>
            <option value="5">year 5 </option>        
            <option value="6">year 6</option>
        
        
        
        
        </select>
    </div>
    <div class="row mb-3">
        <label for="sem" class="col-md-4 col-form-label text-md-end">{{ __('Session') }}</label>
        <select name="sem" id="sem" >
            <option label="Select Your Sem" required></option>
        <option value="1">Semester 1</option>
        <option value="2">Semester 2 </option>
        <option value="3">Semester 3</option>
    </select>
    </div>


    <div class="row mb-3">
        <label for="lec_name" class="col-md-4 col-form-label text-md-end">{{ __('Session') }}</label>
        <select name="lec_name" id="sem" >
            <option label="Select Your Lecturer" required></option>
            @if ($staff)
            @foreach ($staff as $lec)
            <option value="{{$lec->id}}">{{$lec->fname." ".$lec->lname}}</option>
            @endforeach
                
            @endif
       
       
    </select>
    </div>
        


        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button  type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>




    
@endsection