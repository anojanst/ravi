
{include file="user_header.tpl"}


 <div class="row" style="margin-left: 20px;">
<div class="col-lg-5">
	<div class="panel panel-primary" style="margin-top: 10px;">
		<div class="panel-heading">
                  Add 
        </div>

			<div class="panel-body" style="margin-left: 50px;">
				<form role="form" action="label.php?job=save" method="post" class="product" enctype="multipart/form-data">
					 
					<div class="row">
					<div class="col-lg-10">	
						<div class="form-group">
							<input class="form-control" name="label" value="{$label}" required placeholder="Label">
						</div>
					</div>
					</div>
					
					
					
					<div class="row">
					<div class="col-lg-8" >
						{if $edit=='on'}
							<button type="submit" name="ok" style="width: 150px; background: #3498db;" value="Update" class="btn btn-default">Update</button>
						{else}
							<button type="submit" name="ok" style="width: 150px; background: #3498db;" value="Save" class="btn btn-default">Save</button>
						{/if}
					</div>
					</div>
	      		</form>
			</div>
	</div>	
</div>

 

<div class="col-lg-6" >
			<div class="panel panel-primary" style="margin-top: 10px;">
				<div class="panel-heading">
                  Labels
				</div>
                <div class="panel-body">

					{php}list_label();{/php}

                </div>
                <div class="panel-footer">
                </div>
            </div>   
        
   </div>
 </div>


{include file="user_footer.tpl"}
