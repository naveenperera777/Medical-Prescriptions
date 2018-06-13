@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                        <div class="list-group">
                        <a href="{{ route('get-medical-prescription') }}" class="list-group-item list-group-item-action">Generate a Prescription</a>
                    </div>
    
                    {{-- <div class="list-group">
                        <a href="" class="list-group-item list-group-item-action"></a>
                    </div> --}}
     
                    
                    
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
