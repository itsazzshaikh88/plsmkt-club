<nav class="navbar-custom">
	<div class="navbar-left">
		<a href="<?= base_url() ?>" class="logo"><img src="images/logo.png" alt="" /></a>
	</div>
	<div class="navbar-center">
		<ul>
			<li>
				<a href="<?= base_url() ?>" class="active-link">
					<i class="bi bi-house-fill"></i>
					<span>Dashboard </span></a>
			</li>
			<li>
				<a href="network/hub">
					<i class="bi bi-person-badge-fill"></i>
					<span>Network Hub </span></a>
			</li>
			<li>
				<a href="clubs/find">
					<i class="bi bi-people-fill"></i>
					<span>Clubs Hub </span></a>
			</li>
			<li>
				<a href="players/find">
					<i class="bi bi-people"></i>
					<span>Players Hub </span></a>
			</li>
			<li>
				<a href="posts/uploaded">
					<i class="bi bi-image-fill"></i>
					<span>Posts</span></a>
			</li>
			<li>
				<a href="inbox">
					<i class="bi bi-envelope-at-fill"></i>
					<span> Inbox </span></a>
			</li>
			<li>
				<a href="alerts">
					<i class="bi bi-bell-fill"></i>
					<span>Alerts </span></a>
			</li>
		</ul>
	</div>
	<div class="navber-right">
		<?php
		if (isset($this->user['profile_image'])) {
			$img_path = "";
			$img_path_white = "";
		} else {
			$img_path = "images/user.png";
			$img_path_white = "images/user-white.png";
		}
		?>
		<div class="online">
			<img src="<?= $img_path ?>" class="nav-profile-img" onclick="toggleMunu()" />
		</div>
	</div>
	<!-- ------------profile dropdown menu---------- -->
	<div class="profile-menu-wrap" id="profileMenu">
		<div class="profile-menu">
			<div class="user-info">
				<img src="<?= $img_path_white ?>" />
				<div>
					<h3><?= $this->user['club_name']; ?></h3>
					<p><?= $this->user['club_id']; ?></p>
				</div>
			</div>
			<hr />
			<a href="#" class="profile-menu-link">
				<i class="bi bi-person left"></i>
				<p>View Profile</p>
				<span><i class="bi bi-caret-right-fill"></i></span>
			</a>

			<a href="#" class="profile-menu-link">
				<i class="bi bi-person-gear left"></i>
				<p>Account & Settings</p>
				<span><i class="bi bi-caret-right-fill"></i></span>
			</a>

			<a href="#" class="profile-menu-link">
				<i class="bi bi-question-circle left"></i>
				<p>Help & Support</p>
				<span><i class="bi bi-caret-right-fill"></i></span>
			</a>

			<a href="account/logout" class="profile-menu-link">
				<i class="bi bi-box-arrow-right left"></i>
				<p>Logout</p>
				<span><i class="bi bi-caret-right-fill"></i></span>
			</a>
		</div>
	</div>
</nav>
