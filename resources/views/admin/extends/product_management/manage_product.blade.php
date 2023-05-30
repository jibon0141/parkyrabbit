@extends('admin.master')
@include('admin.include.support',['data'=>['validation_jquery','summernote','data_table']])
@section('content')


<section>
 <div class="container-fluid">
<div class="card">
<div class="card headers" style="background-color:green; ">

	<h1 style="text-align:center; center; color: white">Product Management Section</h1>

</div>

<div class="card body">
<div class="frame-wrap">
	
	<table class="table" id="product_table">
				<thead>
					<tr>
                        <th>Id</th>
						<th>Product Name</th>
						<th>Supplier Name</th>
						<th>Short Discription</th>
						<th>Long Discription</th>
						<th>Orginal Price</th>
						<th>Sale Price</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				
            @foreach($data as $product_info)
                <tr>
                    <td scope="row">{{$product_info->id}}</td>
                    <td>{{$product_info->product_name}}</td>
					<td>{{$product_info->supplier_name}}</td>
					<td>{{$product_info->short_description}}</td>
					<td>{{$product_info->long_description}}</td>
					<td>{{$product_info->original_price}}</td>
					<td>{{$product_info->sale_price}}</td>
                    <td>{{$product_info->created_at}}</td>
                    <td>{{$product_info->updated_at}}</td>
                   
                 
                    <td>
                        <form action="{{route('product.destroy',$product_info->id)}}"
                              method="post">
                            @csrf
                            @method('delete')
                            <a href="{{url('admin/single-slider-select/'.$product_info->id)}}"
                               class=" text-white">
                                <button type="submit" class=" btn btn-danger">Delete</button>
                            </a>
                        </form>
                        <a href="{{route('product.edit', $product_info->id) }}"
                           class=" text-white">
                            <button class="btn btn-info ">
                                Edit</i>

                            </button>
                        </a>

                    </td>
                </tr>
            @endforeach
       
				</tbody>
			</table>

</div>
</div>
</div>
</div>

</section>
@endsection
