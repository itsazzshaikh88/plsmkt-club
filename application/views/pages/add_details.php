<div class="main-content">

<form  onsubmit="submitClubData(event)">
    <div class="sidebar-ad">
        <h3 class="sidebar-heading"> Personal Information </h3>
        <div class="row">
            <div class="col-md-12">
            <input type="hidden" name="club_id" value="<?= $this->userid ?>" class="form-control" id="club_id">
            <div class="form-group">
                    <label class="control-label col-md-2">Owner Name</label>
                    <div class="col-md-10">
					<input type="text" name="owner_name" value="<?= $Clubs['owner_name'] ?>" class="form-control"
                        id="owner_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">Foundation</label>
                    <div class="col-md-10">
					<input type="date" name="founded_at" value="<?= $Clubs['founded_at'] ?>" class="form-control"
                        id="founded_at">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">President</label>
                    <div class="col-md-10">
					<input type="text" name="president" value="<?= $Clubs['president'] ?>" class="form-control" id="president">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">Manager</label>
                    <div class="col-md-10">
					<input type="text" name="manager" value="<?= $Clubs['manager'] ?>" class="form-control" id="manager">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Total Titles</label>
                    <div class="col-md-10">
					<input type="text" name="total_titles" value="<?= $Clubs['total_titles'] ?>" class="form-control"
                        id="total_titles">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 ">Location</label>
                    <div class="col-md-10">
					<input type="text" name="gmap_location" value="<?= $Clubs['gmap_location'] ?>" class="form-control"
                        id="gmap_location">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Website Link</label>
                    <div class="col-md-10">
					<input type="link" name="website_link" value="<?= $Clubs['website_link'] ?>" class="form-control" id="website_link">
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
