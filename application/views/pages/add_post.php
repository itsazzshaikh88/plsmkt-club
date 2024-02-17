<div class="main-content-add-post">
    <div class="post">
        <div class="post-author" style="justify-content: center;">
            <!-- <img src="images/png-transparent-add.png" alt="" /> -->
            <!-- <i class="fa-solid fa-square-plus"></i> -->
            <div>
                <h1 class="text-center">ADD POST</h1>
                <h3>Create your Post</h3>
                <!-- <small>2 hours ago</small> -->
            </div>
        </div>


            <div class="create-post">
                <form id="PostForm" enctype="multipart/form-data">
                    <?php $id = $this->userid ?>
                    <input type="hidden" name="club_id" id="club_id" value="<?= $id ?>">
                    <input type="hidden" name="post_id" id="post_id" value="">
                    <input type="file" name="post_video" hidden id="post_video">
                    <input type="file" name="post_photo" hidden id="post_photo">
                    <input type="hidden" name="type" id="type" value="">

                    <div class="create-post-input">
                        <img src="images/user-1.png" alt="" />
                        <textarea rows="2" name="post_text" id="post_text" placeholder="Write a Description"></textarea>
                        <div id="thumbnail-preview"></div>
                    </div>
                    <div class="create-post-links">
                        <li onclick="PhotoPicker(this)" id="photo_text">
                        <input type="file" name="post_thumbnail" id="post_thumbnail" style="display: none;" />

                            <img src="images/photo.png">
                            Attachment
                        </li>
                        <!-- <li onclick="VideoPicker(this)" id="video_text">
				<img src="assets/img/video.png">
				video
				</li> -->

                    </div>
                    <div class="add-post">
                        <button type="button" id="post_btn" class="btn btn-success"><i class="bi-plus-circle-fill"></i>Post</button>
                    </div>


                    <!-- <li >Post</li> -->
                </form>
            </div>
        
    </div>

</div>