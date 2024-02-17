// let base_url = "plsmkt-player";
//fetch Clubs 
let  FetchClubs = () => {
let user_type = 'player';
// console.log(club_id);
	
	$.ajax({

		url:base_url  + 'account/FechSuggetions',
		method:"GET",
		data:{user_type:"C"},
		dataType:"json",
		beforeSend: function () {
			$("#club_suggestions").html(`<div class="d-flex justify-content-center">
			<div class="spinner-border" role="status">
			  <span class="sr-only"></span>
			</div>
		  </div>`)
		},
		success:function(data)
		{
			let str = ''
			let seemore = ` <a href="" class="seemore-link">See More >></a>`
			let followed_type = user_type == 'player' ? 'P' : 'C'
			let postNotFound = base_url + 'assets/img/postNotFound.png'



			if(data.length > 0)
			{
				data.forEach(element => {

					const invalid = [null,'','-',' ',undefined];
	
					// let img = invalid.includes(element.profile_picture) ? base_url + 'assets/img/bydefaultuser.png' : element.profile_picture;
					let icon = element.follow == 'Follow' ? '<i class="fa fa-plus"></i>' : '<i class="fa fa-times"></i>'
					let followed_btn = element.follow == 'Follow'? '' : 'bg-primary';
					let onlcick = element.follow == 'Follow'? 'followClub' : 'unfollowClub';
	
				
						str += `<div class="Cmain border-bottem-list pb-2">
					<div class="text-start w-100"><h6 class="text-start fw-normal">${element.club_name} </h6></div>
					<button  class="btn btn-outline-primary follow-btn ${followed_btn}" data-club-name="${element.c_id}-C" onclick="${onlcick}('${'C'}', '${element.c_id}', '${club_id}','${followed_type}')">${icon + ' ' +element.follow}</button>
				  </div>`
				
				})
			}else{
				str =`
			<div class="container-fluid">
		 <div class="col-md-12">
			 <div class="row" style="text-align: center;">
				 <div class="col-md-12">
					 <img src="${postNotFound}" alt="">
				 </div>
				 <div class="col-md-12">
					 <h6>Clubs not found .......</h6>
				 </div>
			 </div>
		 </div>

	 	</div>	`
			}

			

			$("#club_suggestions").html(str)

			if(data.length > 10){
				$("#club_seemore").html(seemore)}
		}
	})

}

FetchClubs()

let  FetchPlayers = () => {
	let user_type = 'player';
	let id = 'user';
	$.ajax({
		
		url:base_url  + 'account/FechSuggetions',
		method:"GET",
		data:{user_type:"P"},
		dataType:"json",
		beforeSend: function () {
		// 	$("#players_suggestions").html(`<div class="d-flex justify-content-center">
		// 	<div class="spinner-border" role="status">
		// 	  <span class="sr-only"></span>
		// 	</div>
		//   </div>`)
		},
		success:function(data)
		{
			let str = ''
			let seemore = ` <a href="" class="seemore-link">See More >></a>`
			let counter = 1
			let rowIdx = 0
			let followed_type = user_type == 'player' ? 'P' : 'C'
			let postNotFound = base_url + 'assets/img/postNotFound.png'

			if(data.length > 0)
			{
				data.forEach(element => {
					const invalid = [null,'','-',' ',undefined];
					// let img = invalid.includes( element.profile_photo) ? base_url + 'assets/img/bydefaultuser.png' : element.profile_photo;
					let player_name = element.Playername
					let icon = element.follow == 'Follow' ? '<i class="fa fa-plus"></i>' : '<i class="fa fa-times"></i>'
					let followed_btn = element.follow == 'Follow'? '' : 'bg-primary';
					let onlcick = element.follow == 'Follow' ? 'followClub' : 'unfollowClub';
	
				
						if(counter <= def_limit)
						{
							
							str += `<div class="Cmain border-bottem-list pb-2">
					<div class="text-start w-100"><h6 class="text-start fw-normal">${player_name} </h6></div>
					<button  class="btn btn-outline-primary follow-btn ${followed_btn}"  data-club-name="${element.c_id}-P" onclick="${onlcick}('${'P'}', '${element.c_id}', '${club_id}','${followed_type}')">${icon +' '+element.follow}</button></div>`

					counter++
						
						}
					
				})
			}else
			{
				str =`
			<div class="container-fluid">
		 <div class="col-md-12">
			 <div class="row" style="text-align: center;">
				 <div class="col-md-12">
					 <img src="${postNotFound}" alt="">
				 </div>
				 <div class="col-md-12">
					 <h6>Players not found .......</h6>
				 </div>
			 </div>
		 </div>

	 	</div>	`
			}

			if(counter > def_limit)
		{	$("#player_seemore").html(seemore)}

			$("#players_suggestions").html(str)
		}
	})

}
FetchPlayers()



//Follow 

function followClub(user_type, following_to, followed_by, followedType) {


    let url = base_url + 'account/follow';
    let loader = '<i class="fa fa-spinner"></i> Wait ...';

    // Find the button related to the followed club
    let followButton = $(`.follow-btn[data-club-name="${following_to}-${user_type}"]`);
	let followType = 'follow';


    $.ajax({
      url: url,
      method: "POST",
      data: {
        user_type,
        following_to,
        followed_by,
		followedType,
		followType
      },
			dataType:"json",
      beforeSend: function () {
        followButton.html(loader);
      },
      success: function (data) {

        if (data['status'] == 0) {
          followButton.attr('onclick', `unfollowClub('${user_type}', '${following_to}', '${followed_by}','${followedType}')`);
          followButton.html('<i class="fa fa-times"></i> Followed');
					followButton.attr('class','btn btn-outline-primary follow-btn bg-primary')
					FetchPosts()
        } else if (data['status'] == 2) {

          followButton.attr('onclick', `followClub('${user_type}', '${following_to}', '${followed_by}','${followedType})`);
          followButton.html('<i class="fa fa-plus"></i> Follow');
					followButton.attr('class','btn btn-outline-primary follow-btn')

        } else {
          alert("Failed to perform action");
        }
      },
      error: function () {
        alert("Error in the AJAX request");
      }
    });
  }



  function unfollowClub(userType, followingTo, followedBy,followedType) {

    let url = base_url + 'player/feed/follow/unfollow'; // Assuming 1 is the action for unfollow
    let loader = '<i class="fa fa-spinner"></i> Wait ...';

    // Find the button related to the followed club
		let followButton = $(`.follow-btn[data-club-name="${followingTo}-${userType}"]`);
		let followType = 'unfollow';


    $.ajax({
      url: url,
      method: "POST",
      data: {
        user_type: userType,
        following_to: followingTo,
        followed_by: followedBy,
				followType:followType,
				followedType:followedType
      },
      beforeSend: function () {
        followButton.html(loader);
      },
      success: function (data) {
        if (data === '3') {
          alert("Failed to unfollow");
        } else {
          followButton.attr('onclick', `followClub('${userType}', '${followingTo}', '${followedBy}','${followedType}')`);

		followButton.attr('class','btn btn-outline-primary follow-btn')
        followButton.html('<i class="fa fa-plus"></i> Follow');
		FetchPosts()

        }
      },
      error: function () {
        alert("Error in the AJAX request");
      }
    });
  }

