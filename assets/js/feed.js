let photo = document.getElementById('post_photo')
let photo_text = document.getElementById('photo_text')


let PhotoPicker = (element) => {
	photo.click()
}

photo.addEventListener('change', function () {
	if (photo.value) {
		let picker = [
			{
				key: 'jpg',
				value: "photo"
			},
			{
				key: 'mp4',
				value: "video"
			}
		]



		const typeo = ['jpg', 'gif', 'jpg', 'png', 'jpeg', 'jfif'];
		const includes = ['mp4'];

		let photo_split = photo.value
		let first = photo_split.split('\\')
		photo_text.innerHTML = '<img src="assets/img/photo.png">' + first[2]
		let typeattachment = ''

		picker.forEach(element => {
			let attachment = first[2].split('.');
			typeattachment += element.key == attachment[1] ? element.value : '';

		})

		let type = document.getElementById('type')

		if (typeattachment == 'photo')
			type.value = 'photo'
		else if (typeattachment == 'video')
			type.value = 'video'
		else
			type.value = 'text'


	}
})


/// Insert Post 

let  post_btn = document.getElementById('post_btn')
let  PostForm = document.getElementById('PostForm')
let  type = document.getElementById('type')
let  post_video = document.getElementById('post_video')
let  post_photo = document.getElementById('post_photo')
let  post_text = document.getElementById('post_text')


$(post_btn).click('submit',function(e){
	e.preventDefault()

	if(post_photo.value)
	type.value = 'photo'
	else if(post_video.value)
	type.value = 'video'
	else 
	type.value = 'text'

	$.ajax({
		url: base_url + 'add_post/post',
		method:"POST",
		data:new FormData(PostForm),
		dataType:"json",
		contentType:false,
		processData:false,
		beforeSend: function () {
			$("#post_btn").html(`<div class="d-flex justify-content-center">
			<div class="spinner-border" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
		  </div>`)
		},
		success: function (res) {
			let green = '#28a745'
			let red = '#dc3545'
			if (res['status'] == 1) {

				toastMessage({
					msgText: 'Post is Inserted succesfully',
					background: green
				});
				post_text.value = ''
				post_photo.value = ''
				photo_text.innerHTML = '<img src="files/posts/images"> Attachment'
				post_btn.innerHTML = 'Post'


			} else {
				toastMessage({
					msgText: 'Post is Insert faild',
					background: red
				});
				post_btn.innerHTML = 'Post'

			}
		}
	})

})

let FetchPosts = () => {

	let feeds = document.getElementById('feeds');
	let img = base_url + 'assets/img/postNotFound.png'


	$.ajax({
		url:base_url + 'player/feed/fetchposts',
		method:"GET",
		dataType:"json",
		beforeSend: function () {
			$("#feeds").html(`<div class="d-flex justify-content-center">
			<div class="spinner-border" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
		  </div>`)
		},
		success:function(data)
		{
			let str = '';

		if(data.length > 0)
		{
			data.forEach(element => {

				const invalid = [null,'','-',' ',undefined];


				let  post = invalid.includes(element.file_link) ? '' : (element.post_type == 'video' ? `<video src="${base_url +'club_post_vedios/'+ element.file_link}" width="70%" controls></video>` : `<img src="${base_url +'club_post_images/'+ element.file_link}" width="70%"></img>`);

				let caption = element.file_link == '-' ? `<h5 class="mb-2">${element.caption}</h4>` : (element.post_type == 'text' ? `<h5 class="mb-2">${element.caption}</h4>` : `<p>${element.caption}</p>`)


				let porfile_picture = invalid.includes(element.pp) ? base_url + 'assets/img/bydefaultuser.png' : 
				base_url + 'user_profile/'+ element.pp

				let post_image = 


				str += `<div class="post">
				<div class="post-author">
					<img src="${porfile_picture}">
					<div>
						<h1>${element.user_name}</h1>
						<small>Founder and CEO at Gellelio Group|Angel Investor</small>
						<small>2 hours ago</small>
					</div>
				</div>
	
				${caption}
				${post}
				<div class="post-stats">
				</div>
			</div>`

			})
		}else
		{
			str += `
				<div class="container-fluid">
             <div class="col-md-12">
                 <div class="row" style="text-align: center;">
                     <div class="col-md-12">
                         <img src="${img}" alt="">
                     </div>
                     <div class="col-md-12">
                         <h4>You'r currently not following Clubs or Players .......</h4>
                     </div>
                 </div>
             </div>

         </div>
				`
			
		}

			$(feeds).html(str);

		}
	})


}
FetchPosts()


