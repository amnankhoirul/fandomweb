<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Musanji</title>
	<link rel="stylesheet" href="<?= base_url('sneebf')?>/css/admindata1.css">
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
						<h4>Home</h4>
					</div>
				</a>
				
				<a href="news">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>News</h4>
					</div>
				</a>
				
				<a href="data">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Data</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Media</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Others</h4>
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Idk</h4>
					</div>
				</a>

			</div>
		</div>

		</div>
		<div class="content">
			<div class="form-input">



				
					<div class="hal-form">
						<div class="form1">
							
						<form action="<?= base_url('admin/data1/save') ?>" enctype="multipart/form-data" method="POST">

    <!-- Name Data Upload -->
    <label for="name_data"></label>
    <div class="file-upload-container">
        <input type="file" name="name_data" id="name_data" onchange="previewImage(event, 'preview_name_data')" style="display: none;" />
        <img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button5" onclick="document.getElementById('name_data').click();" />
        <img id="preview_name_data" src="#" alt="Image Preview" style="display:none; width:300px; height:15px;position:absolute;z-index:3;transform:translateX(800px) translateY(300px);" />
    </div>

    <!-- Background Data Upload -->
    <label for="background_data"></label>
    <div class="file-upload-container">
        <input type="file" name="background_data" id="background_data" onchange="previewImage(event, 'preview_background_data')" style="display: none;" />
        <img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button" onclick="document.getElementById('background_data').click();" />
        <img id="preview_background_data" src="#" alt="Image Preview" style="display:none; width:100%; height:100vh;position:absolute;z-index:1;" />
    </div>

   
								<label for="char_data"></label>
								<div class="file-upload-container">
									<input type="file" name="char_data" id="char_data"
										onchange="previewImage(event, 'preview_char_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button1"
										onclick="document.getElementById('char_data').click();" />
									<img id="preview_char_data" src="#" alt="Image Preview"
										style="display:none; width:700px; height:100vh;position:absolute;z-index:3;transform:translateX(40%);" />
								</div>

								<label for="intro_data"></label>
								<div class="file-upload-container">
									<input type="file" name="intro_data" id="intro_data"
										onchange="previewImage(event, 'preview_intro_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button2"
										onclick="document.getElementById('intro_data').click();" />
									<img id="preview_intro_data" src="#" alt="Image Preview"
										style="display:none; width:320px; height:120px;position:absolute;z-index:3;transform:translateX(68%) translateY(130%);" />
								</div>

								<label for="position_data"></label>
								<div class="file-upload-container">
									<input type="file" name="position_data" id="position_data"
										onchange="previewImage(event, 'preview_position_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button3"
										onclick="document.getElementById('position_data').click();" />
									<img id="preview_position_data" src="#" alt="Image Preview"
										style="display:none; width:150px; height:15px;position:absolute;z-index:3;transform:translateX(210px) translateY(300px) scale(1.1);" />
								</div>

								<label for="type_data"></label>
								<div class="file-upload-container">
									<input type="file" name="type_data" id="type_data"
										onchange="previewImage(event, 'preview_type_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button4"
										onclick="document.getElementById('type_data').click();" />
									<img id="preview_type_data" src="#" alt="Image Preview"
										style="display:none; width:150px; height:15px;position:absolute;z-index:3;transform:translateX(340px) translateY(300px);" />
								</div>

								<label for="cv_data"></label>
								<div class="file-upload-container">
									<input type="file" name="cv_data" id="cv_data"
										onchange="previewImage(event, 'preview_cv_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button6"
										onclick="document.getElementById('cv_data').click();" />
									<img id="preview_cv_data" src="#" alt="Image Preview"
										style="display:none; width:520px; height:100px;position:absolute;z-index:3;transform:translateX(800px) translateY(330px);" />
								</div>

								

								<label for="number_data"></label>
								<div class="file-upload-container">
									<input type="file" name="number_data" id="number_data"
										onchange="previewImage(event, 'preview_number_data')" style="display: none;" />
									<img src="<?= base_url('sneebf')?>/img/editicon.png" alt="Upload" class="upload-button7"
										onclick="document.getElementById('number_data').click();" />
									<img id="preview_number_data" src="#" alt="Image Preview"
										style="display:none; width:450px; height:80px;position:absolute;z-index:3;transform:translateX(800px) translateY(450px);" />
								</div>

								

								<div class="save-button">
								<button type="submit"><b>Save</b></button>
								</div>
								
							</form>
							<div class="cancel-button">
								<a href="data"><button><b>Cancel</b></button></a>
								</div>
							<script src="<?= base_url('sneebf')?>/javascript/admindata.js"></script>
						</div>
					</div>


				</div>

			</div>

			
		</div>
	</nav>
	</div>


</body>

</html>
