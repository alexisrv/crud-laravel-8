@extends('products.layout')

@section('content')
    <div class="row mt-5">
                <a class="btn btn-success btn-lg btn-block" href="{{ route('products.create') }}"> Add New Product</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row m-3 mt-4">
      <table id="myTable" class="table table-bordered table-striped table-borderless">
        <thead class="thead-dark text-center">
          <tr>
              <th>No</th>
              <th>Name</th>
              <th>Details</th>
              <th>Price</th>
              <th width="280px">Actions</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach ($products as $product)
          <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->detail }}</td>
              <td>${{ $product->price }}</td>
              <td>
                  <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                      <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show <i class="fa fa-eye" aria-hidden="true"></i></a>

                      <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a>

                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>




@endsection
