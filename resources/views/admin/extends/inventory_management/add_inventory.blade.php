@extends('admin.master')
@include('admin.include.support',['data'=>['validation_jquery','summernote','data_table']])
@section('content')
<section>
<div class="container">
		<div class="row">
            <form method="post" action="{{route('inventory.store')}}">
                @csrf
                 
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>type</th>
						<th>Product</th>
						<th>quantity</th>
						<th>current quantity</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody id="itemsTableBody">
					<tr>
                        




						<td>
                            <select name="type[]">
                            <option value="cat1">category 1</option>
                            <option value="cat2">category 2</option>
                            <option value="cat3">category 3</option>
                            </select></td>
						<td>
                            <select name="item[]">
                            @foreach($data as $product_data)
                            <option value="{{$product_data->id}}">{{$product_data->product_name}} </option>
                            @endforeach
                            </select>
                        </td>
						<td><input type="text" name="quantity[]"></td>
						<td><input type="text" name="current_quantity[]"></td>
						<td><button class="btn btn-danger remove-item">remove</button></td>
					</tr>
				</tbody>		
			</table>
            
            <button class="btn btn-primary" type="submitt" >Submitt</button>

</form>


		
		</div>
        <button class="btn btn-primary" id="addNewItem">Add New Item</button>
	</div>

	<script type="text/javascript" src="jquery.js"></script>
		<script>
		$(document).ready(function() {
			// Add new item row
			$('#addNewItem').click(function() {
				var newRow = '<tr>' +
								'<td> <select name="type[]">  <option value="cat1">category 1</option><option value="cat2">category 2</option><option value="cat3">category 3</option></select></td>' +
								'<td><select name="item[]">@foreach($data as $product_data)<option value="{{$product_data->id}}">{{$product_data->product_name}} </option>@endforeach</select></td>' +
								'<td><input type="text" name="quantity[]"></td>' +
								'<td><input type="text" name="current_quantity[]"></td>' +
								'<td><button class="btn btn-danger remove-item">remove</button></td>' +
							'</tr>';
				$('#itemsTableBody').append(newRow);
			});

			// Remove item row
			$(document).on('click', '.remove-item', function() {
				$(this).closest('tr').remove();
			});
		});
	</script>

@endsection