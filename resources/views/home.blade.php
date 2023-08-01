@extends('app')


@section('content')

<section>

    <style>
        body{background:#eee}.ratings i{font-size: 16px;color: red}.strike-text{color: red;text-decoration: line-through}.dot{height: 7px;width: 7px;margin-left: 6px;margin-right: 6px;margin-top: 3px;background-color: blue;border-radius: 50%;display: inline-block}.spec-1{color: #938787;font-size: 15px}h5{font-weight: 400}.para{font-size: 16px}
    </style>


  @foreach ($productFunc as $product)
    
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-6 mt-1">
                        <h5> {{ route('productFunc', [title => $data->title]) }}">{{ $data->title}}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{ route('productFunc', [seller_id => $data->seller_id]) }}">{{ $data->seller_id}}</span>
                        </div>
                        <p class="text-justify text-truncate para mb-0"><br>{{ route('productFunc', [description => $data->description]) }}">{{ $data->description}}<br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">{{ route('productFunc', [price => $data->price]) }}">{{ $data->price}}</h4>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</section>
@endsection