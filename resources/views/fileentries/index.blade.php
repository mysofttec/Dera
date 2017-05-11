@extends('layouts.app')

@section('content')
    </br>
<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">
        <input type="file" name="filefield">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2>Title</h2>
        <input type="text" name="Title">
        </br>
        <h2>Set Price</h2>
       <input type="number" name="price">USD
        </br>
        <h2>Select category</h2>
        </br>
        <select name="category">
            <option value="1">Theme</option>
            <option value="2">Software</option>
            <option value="3">Application</option>
            <option value="4">Book</option>
            <option value="5">Audio</option>
            <option value="6">Video</option>
        </select>
        </br>
        <input type="submit">

    </form>
    </div>
    <div class="container">
    <h1>Product List</h1>
    </div>
    <div class="container">
    <div class="row">
        <ul class="thumbnails">
            @foreach($entries as $entry)
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="{{route('getentry', $entry->filename)}}" alt="ALT NAME" class="img-responsive" />
                        <form action="{{route('payment',$entry->id)}}" method="POST">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_9xGaoVUqIRisC2uhXuq2vDQe"
                                    data-amount="{{$entry->price}}00"
                                    data-name="Demo Site"
                                    data-description="monthly subscription"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto">
                            </script>
                        </form>
                        <div class="caption">
                            <p>{{$entry->price}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
        </div>

@endsection