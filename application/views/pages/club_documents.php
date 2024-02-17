<div class="main-content">

<form  onsubmit="submitClubData(event)">
    <div class="sidebar-ad">
        <h3 class="sidebar-heading"> Document </h3>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                    <label class="control-label col-md-2">Title</label>
                    <div class="col-md-10">
					<input type="text" name="owner_name" value="" class="form-control"
                        id="owner_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">Foundation</label>
                    <div class="col-md-10">
					<input type="file" name="founded_at" value="" class="form-control"
                        id="founded_at">
                    </div>
                </div>
       
                       
                <div class="form-group float-end">
                    <button type="submit" id="update_btn"  class=" btn-theme btn-outline-success-theme btn-sm-theme">Update</button>
                </div>
            </div>
        </div>
    </div>
	</form>
</div>
