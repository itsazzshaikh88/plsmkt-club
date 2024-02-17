<div class="main-content">

<form  onsubmit="submitClubData(event)">
    <div class="sidebar-ad">
        <h3 class="sidebar-heading"> Document </h3>
        <div class="row">
            <div class="col-md-12">
            <div class="row form-group align-items-center">
                        <label class="control-label col-md-2 ">Proflie Pic</label>
                        <div class="col-md-10">
                            <input type="file" id="profile_pics" value="" name="profile_pics" class="form-control" required="">
                        </div>
                    </div>
                    <div class="row form-group align-items-center">
                        <label class="control-label col-md-2 ">Cover Pic</label>
                        <div class="col-md-10">
                            <input type="file" id="cover_pisc" name="cover_pisc" class="form-control" value="" required="">
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
