<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="main.js"></script>

<div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
        <h1 style="text-align: center;padding:20px;"> Chemist Report</h2>
			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Chemist Name
						</th>
						<th class="text-center">
							POB
						</th>
						<th class="text-center">
							Quantity
						</th>
    					<th class="text-center">
							Total Amount
						</th>
                        <th class="text-center">
							Remark
						</th>
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
						</th>
					</tr>
				</thead>
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="name">
						    <input type="text" name='name0'  placeholder='Name' class="form-control"/>
						</td>
                        </td>
    					<td data-name="sel">
						    <select name="sel0">
        				        <option value="">Select Option</option>
    					        <option value="1">Option 1</option>
        				        <option value="2">Option 2</option>
        				        <option value="3">Option 3</option>
						    </select>
						</td>
						<td data-name="mail">
						    <input type="text" name='mail0' placeholder='1' class="form-control"/>
						</td><td data-name="mail">
						    <input type="text" name='mail0' placeholder='1' class="form-control"/>
						</td>
						<td data-name="desc">
						    <textarea name="desc0" placeholder="Description" class="form-control"></textarea>
                        </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
    <a id="add_row" class="btn btn-primary float-left">Submit</a>
	<a id="add_row" class="btn btn-primary float-right">Add Row</a>
</div>
