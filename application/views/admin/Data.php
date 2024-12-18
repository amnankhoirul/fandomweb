<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Musanji</title>
	<link rel="stylesheet" href="<?= base_url('sneebf')?>/css/admindata.css">
	<link rel="icon" type="image/x-icon" href="<?= base_url('sneebf')?>/img/logoweb1.png" />


</head>

<!-- backup -->

<!-- ------------ theme toggle -->

<!-- <div class="content"><input type="checkbox" id="darkmode-toggle">
<label for="darkmode-toggle"></label>   
<div class="background"></div></div> -->

<!-- ------------ -->

<body>

	<nav>
		<div class="sidebar">
			<div class="brandweb">
				<a href="home"><img src="<?= base_url('sneebf')?>/img/Logoweb1.png" alt class="" /></a>
				<a href="home">
					<h1>usanji</h1>
				</a>

			</div>
			<div class="profile">
				<div class="avatar">
					<div class="ava">
						<img src="<?= base_url('sneebf')?>/img/profile2.jpeg" alt
							class="w-px-40 h-auto rounded-circle" />
					</div>
					<div class="border-avatar">
						<img src="<?= base_url('sneebf')?>/img/kinichborder.png" alt
							class="w-px-40 h-auto rounded-circle" />
					</div>
				</div>

				<div class="infoprofile">
					<h3><b>Sneebf</b></h3>
					<p>Nice To See You</p>
				</div>
			</div>
			<div class="link-page">
				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Dashboard</h4>
					</div>
				</a>

				<a href="user">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>User</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Konten</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Konten</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Konten</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Konten</h4>
					</div>
				</a>

			</div>
		</div>

		</div>
		<div class="content">
			<div class="form-input">



				<div class="form1">

					<!-- <div class="tampilan-form">
					<?php foreach($data as $maybedata){ ?>
						<div class="background-data"><img src="<?= $maybedata ['background_data']?>" alt=""></div>
						<div class="type-data"><?= $maybedata ['type_data']?></div>
						<div class="position-data"><?= $maybedata ['position_data']?></div>
						<div class="name-data"><?= $maybedata ['name_data']?></div>
						<div class="intro-data"><?= $maybedata ['intro_data']?></div>
						<div class="va-data"><?= $maybedata ['va_data']?></div>
						<div class="number-data"><?= $maybedata ['number_data']?></div>
						<div class="profile-data"><?= $maybedata ['profile_data']?></div>
						<div class="char_data"><?= $maybedata ['char_data']?></div>
						
					<?php }?>
					</div>
					 -->

					<div class="hal-form">
						<div class="form1">
							<h1 style="color:white;">HEHWWHWH</h1>
							<!-- <form action="<?= base_url('data/save')?>" enctype="multipart/form-data" method="POST">

								<label for="name_data"></label>
								<div class="file-upload-container">
									<input type="file" name="name_data" id="name_data"
										onchange="previewImage(event, 'preview_name_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button"
										onclick="document.getElementById('name_data').click();" />
									<img id="preview_name_data" src="#" alt="Image Preview"
										style="display:none; width:100px; height:100px;" />
								</div>

								<label for="type_data"></label>
								<div class="file-upload-container">
									<input type="file" name="type_data" id="type_data"
										onchange="previewImage(event, 'preview_type_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button"
										onclick="document.getElementById('type_data').click();" />
									<img id="preview_type_data" src="#" alt="Image Preview"
										style="display:none; width:100px; height:100px;" />
								</div>

								

								<button type="submit">Save</button>
							</form> -->
							<script src="<?= base_url('sneebf')?>/javascript/admindata.js"></script>
						</div>
					</div>


				</div>

			</div>

			<div class="wrap-input">
				<div class="input1">
					<div class="all-but">
					<a href="data1">
					<div class="button-edit" onclick="toggleForm()">
        				<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Edit">
      				</div>
					</a>
					
						<div class="back-but"></div>
					</div>
				</div>
				<div class="input2">
					<div class="all-but">

						<div class="button-edit"></div>
						<div class="back-but"></div>
					</div>
				</div>
				<div class="input3">
					<div class="all-but">

						<div class="button-edit"></div>
						<div class="back-but"></div>
					</div>
				</div>
				<div class="input4">
					<div class="all-but">

						<div class="button-edit"></div>
						<div class="back-but"></div>
					</div>
				</div>
				<div class="input5">
					<div class="all-but">

						<div class="button-edit"></div>
						<div class="back-but"></div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	</div>


</body>

</html>
