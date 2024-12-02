@extends('page_template')
@section('content')
    <form action="{{route('address.update', $address->id)}}" enctype="multipart/form-data" method="POST">
        @method('put')
        @csrf
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" aria-describedby="cityHelp" name="city" value="{{$address->city}}">
            <div id="cityHelp" class="form-text">Please enter your city!</div>
        </div>
        <div class="mb-3">
            <label for="street" class="form-label">Street</label>
            <input type="text" class="form-control" id="street" aria-describedby="streetHelp" name="street" value="{{$address->street}}">
            <div id="streetHelp" class="form-text">Please enter your street!</div>
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" aria-describedby="pscodeHelp" name="postal_code" value="{{$address->postal_code}}">
            <div id="pscodeHelp" class="form-text">Please enter your postal code!</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
@section('abc')
@endsection
