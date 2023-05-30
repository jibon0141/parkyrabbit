@extends('admin.master')
@include('admin.include.support',['data'=>['validation_jquery','summernote','data_table']])
@section('content')
      <div class="card-header text-light" style="background-color:green; ">
        <h1 style="text-align: center;">Store Product</h1>
        

      </div>
      
        @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ Session::get('message') }}</strong>
        </div>
        @endif
			<div class="modal-body">
				<form method="post" id="product_form" action="{{route('product.store')}}" enctype="multipart/form-data">
					@csrf


					
					<div class="form-group">
						<label class="form-label"  for="product_name">Product Name</label>
						<input name="product_name" type="text"  class="form-control" placeholder="Enter Product Name ">
					</div>

			
					<div class="form-group">
						<label class="form-label"  for="supplier_name">Supplier Name</label>

						<input name="supplier_name" type="text"  class="form-control" placeholder="Enter Supplier Name">
					</div>

					<div class="form-group">

					<label class="form-label"  for="short_description">Short Discription</label>

					<textarea name="short_description" type="text"   class="form-control" placeholder="Enter Short Discription"></textarea>
					</div>	
						
					<div class="form-group">
						<label class="form-label" for="long_description">Long Discription</label>		
						
						<textarea name="long_description" type="text" class="form-control" placeholder="Enter Long Discription"> </textarea>
					</div>

                    <div class="form-group">
						<label class="form-label" type="number" for="original_price">Orginal Price</label>		
						
						<input name="original_price" type="number" class="form-control" placeholder="Enter Orginal Price"> 
					</div>

                    <div class="form-group">
						<label class="form-label" for="sale_price">Sale Price</label>		
						
						<input name="sale_price" type="number" class="form-control" placeholder="Enter Sale Price"> 
					</div>

					
										
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Store Product</button>
				</form>
			</div>

@endsection

@section('js')
<script type="text/javascript">
$("#product_form").validate({
rules: {
product_name: {
required: true,
},
supplier_name:{
required: true,
},
product_image:{
required: true,
},
short_description: {
required: true,
},
long_description:{
required: true,
},
original_price:{
required: true,
},
sale_price:{
required: true,
},
},
errorPlacement: function(label, element) {
label.addClass('mt-2 text-danger');
label.insertAfter(element);
},
highlight: function(element, errorClass) {
$(element).parent().addClass('has-danger')
$(element).addClass('form-control-danger')
}
});
$(document).ready(function() {
$('.summernote').summernote({
placeholder: 'Info 1',
tabsize: 2,
height: 250,
toolbar: [
[ 'style', [ 'style' ] ],
[ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
[ 'fontname', [ 'fontname' ] ],
[ 'fontsize', [ 'fontsize' ] ],
[ 'color', [ 'color' ] ],
[ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
[ 'table', [ 'table' ] ],
[ 'insert', [ 'link'] ],
[ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
]
});
});
</script>
@endsection