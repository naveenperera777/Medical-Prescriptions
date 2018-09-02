@extends('layouts.app')
@section('title')
    Medical Prescriptions
@endsection
@section('content')

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-8 offset-2">
                    {{--<form method="post" action="{{route('get-drug-prescription')}}">--}}
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="file">Attach CSV File <span class="font-small red-text">(Please consider the format)</span></label>
                                    <input class="form-control" type="file" name="attachment" id="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-4">
                                <button type="submit" class="btn btn-sm btn-primary">Add Database</button>
                            </div>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection