@extends('site.master')

@section('content')
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