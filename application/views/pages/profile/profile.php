<div class="main-content">

    <form onsubmit="submitClubData(event)">
        <div class="sidebar-ad">
            <h3 class="sidebar-heading"> Personal Information </h3>
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="club_id" value="<?= $this->userid ?>" class="form-control" id="club_id">
                    <div class="form-group">
                        <label class="control-label col-md-2">Managed By</label>
                        <div class="col-md-4">
                            <input type="text" name="managed_by" value="<?= $Clubs['managed_by'] ?>" class="form-control" id="managed_by">
                        </div>

                        <label class="control-label col-md-2 ">Club Name</label>
                        <div class="col-md-4">
                            <input type="text" name="club_name" value="<?= $Clubs['club_name'] ?>" class="form-control" id="club_name">
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
                            <input type="text" name="city" value="<?= $Clubs['city'] ?>" class="form-control" id="city">
                        </div>
                    </div>

                    <div class="form-group float-end">
                        <button type="submit" id="update_btn" class=" btn-theme btn-outline-success-theme btn-sm-theme ">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form onsubmit="submitClubData(event)">
        <div class="sidebar-ad">
            <h3 class="sidebar-heading"> Personal Information </h3>
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="club_id" value="<?= $this->userid ?>" class="form-control" id="club_id">
                    <div class="form-group">
                        <label class="control-label col-md-2">Owner Name</label>
                        <div class="col-md-10">
                            <input type="text" name="owner_name" value="<?= $clubs['owner_name'] ?>" class="form-control" id="owner_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 ">Foundation</label>
                        <div class="col-md-10">
                            <input type="date" name="founded_at" value="<?= $clubs['founded_at'] ?>" class="form-control" id="founded_at">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 ">President</label>
                        <div class="col-md-10">
                            <input type="text" name="president" value="<?= $clubs['president'] ?>" class="form-control" id="president">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 ">Manager</label>
                        <div class="col-md-10">
                            <input type="text" name="manager" value="<?= $clubs['manager'] ?>" class="form-control" id="manager">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Total Titles</label>
                        <div class="col-md-10">
                            <input type="text" name="total_titles" value="<?= $clubs['total_titles'] ?>" class="form-control" id="total_titles">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 ">Location</label>
                        <div class="col-md-10">
                            <input type="text" name="gmap_location" value="<?= $clubs['gmap_location'] ?>" class="form-control" id="gmap_location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Website Link</label>
                        <div class="col-md-10">
                            <input type="link" name="website_link" value="<?= $clubs['website_link'] ?>" class="form-control" id="website_link">
                        </div>
                    </div>

                    <div class="form-group float-end">
                        <button type="submit" id="update_btn" class=" btn-theme btn-outline-success-theme btn-sm-theme">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form onsubmit="submitClubData(event)">
        <div class="sidebar-ad">
            <h3 class="sidebar-heading"> Document </h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Title</label>
                        <div class="col-md-10">
                            <input type="text" name="owner_name" value="" class="form-control" id="owner_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 ">Foundation</label>
                        <div class="col-md-10">
                            <input type="file" name="founded_at" value="" class="form-control" id="founded_at">
                        </div>
                    </div>


                    <div class="form-group float-end">
                        <button type="submit" id="update_btn" class=" btn-theme btn-outline-success-theme btn-sm-theme">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form onsubmit="submitClubData(event)">
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
                        <button type="submit" id="update_btn" class=" btn-theme btn-outline-success-theme btn-sm-theme">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>