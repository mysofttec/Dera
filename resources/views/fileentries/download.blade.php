@extends('layouts.app')

@section('content')
</br>

<div class="container">
    <h1>Product List</h1>
</div>
<div class="container">
    <div class="row">
        <ul class="thumbnails">

                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="{{route('getentry', $entry->filename)}}" alt="ALT NAME" class="img-responsive" />

                        <a href="{{route('downloadentry', $entry->filename)}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i>Buy</a>
                        <div class="caption">
                            <p>$25</p>
                        </div>
                    </div>
                </div>

        </ul>
    </div>
</div>

@endsection