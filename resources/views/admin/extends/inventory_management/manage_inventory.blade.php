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
						<th>Product Type</th>
						<th>Product Name</th>
						<th>Previous Stock</th>
						<th>Current Stock</th>
						
					</tr>
				</thead>
				<tbody>
				
            @foreach($data as $product_info)
                <tr>
                    <td scope="row">{{$product_info->id}}</td>
                    <td>{{$product_info->product_type}}</td>
					<td>{{$product_info->product_id}}</td>
					<td>{{$product_info->previous_stock}}</td>
					<td>{{$product_info->current_stock}}</td>
					
                
                   
                 
                 
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
