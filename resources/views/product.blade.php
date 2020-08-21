<!doctype html>
<html lang="en">
  <head>
    <title>Product Listing</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
  </head>
  <body>
        <section class="container mt-5">
            @if (session()->has('req_mesg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Uploade!</strong> {{session('req_mesg')}}.
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h5 class="float-left">Product List</h5>
                    <div class="float-right btn-group">
                        <a href="{{route('product.create')}}" class="btn btn-primary" > Upload Excel </a>
                        <a href="{{route('product.export')}}" class="btn btn-success" > Export </a>
                    </div>
                </div>
                <div class="card-body">
            <div class="table-responsive">
                <table class="table table-border">
                    <thead>
                        <th style="width: 20px;">SL</th>
                        <th style="width: 120px;" >Thumbnail</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)    
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img  width="100" src="{{$product->thumbnail_path}}" alt="{{$product->name}}" srcset="">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->pricee}}</td>
                            <td>{{$product->description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>

        </section>  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('public/js/app.js')}}" ></script>
  </body>
</html>