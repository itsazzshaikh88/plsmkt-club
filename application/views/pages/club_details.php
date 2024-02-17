<div class="main-content">

<form  onsubmit="submitClubData(event)">
    <div class="sidebar-ad">
        <h3 class="sidebar-heading"> Personal Information </h3>
        <div class="row">
            <div class="col-md-12">
            <input type="hidden" name="club_id" value="<?= $this->userid ?>" class="form-control" id="club_id">
            <div class="form-group">
                    <label class="control-label col-md-2">Managed By</label>
                    <div class="col-md-4">
					<input type="text" name="managed_by" value="<?= $Clubs['managed_by'] ?>" class="form-control"
                        id="managed_by">
                    </div>
                
                    <label class="control-label col-md-2 ">Club Name</label>
                    <div class="col-md-4">
					<input type="text" name="club_name" value="<?= $Clubs['club_name'] ?>" class="form-control"
                        id="club_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">Email</label>
                    <div class="col-md-10">
					<input type="text" name="email" value="<?= $Clubs['email'] ?>" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">Country</label>
                    <div class="col-md-4">
					<input type="text" name="country" value="<?= $Clubs['country'] ?>" class="form-control" id="country">
                    </div>
               
                    <label class="control-label col-md-2">City</label>
                    <div class="col-md-4">
					<input type="text" name="city" value="<?= $Clubs['city'] ?>" class="form-control"
                        id="city">
                    </div>
                </div>
                       
                <div class="form-group float-end">
                    <button type="submit" id="update_btn"  class=" btn-theme btn-outline-success-theme btn-sm-theme ">Update</button>
                </div>
            </div>
        </div>
    </div>
	</form>
</div>
