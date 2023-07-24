@extends('admin.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('unit_store') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('unit_store') }}">
                        @csrf


                      
                       

                        <div class="row mb-3">
                            <label for="unit_name" class="col-md-4 col-form-label text-md-end">{{ __('Unit Name') }}</label>

                            <div class="col-md-6">
                                <input id="unit_name" type="text" placeholder="Unit Name" class="form-control  @error('unit_name') is-invalid @enderror" name="unit_name" value="{{ old('unit_name') }}" required autocomplete="name" autofocus>

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
                                <input id="unit_code" type="name" placeholder="Unit Code" class="form-control @error('unit_code') is-invalid @enderror" name="unit_code" required>

                                @error('unit_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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