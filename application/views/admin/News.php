<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Musanji</title>
	<link rel="stylesheet" href="<?= base_url('sneebf')?>/css/adminindex.css">
	<link rel="icon" type="image/x-icon" href="<?= base_url('sneebf')?>/img/logoweb1.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<!-- backup -->

<!-- ------------ theme toggle -->

<!-- <div class="content"><input type="checkbox" id="darkmode-toggle">
<label for="darkmode-toggle"></label>   
<div class="background"></div></div> -->

<!-- ------------ -->

<body>
	<a href="#" class="scroll-top">UP</a>
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
					<div class="ava" >
						<img src="<?= base_url('sneebf')?>/img/profile2.jpeg" alt class="w-px-40 h-auto rounded-circle" />
					</div>
					<div class="border-avatar">
						<img src="<?= base_url('sneebf')?>/img/kinichborder.png" alt class="w-px-40 h-auto rounded-circle" />
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
				<!-- <a href="#">
					<div class="dashboard-ico" style="margin-top:90%;">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
						<h4>Setting</h4>
					</div>
				</a> -->
			</div>
		</div>
		<div class="topbar">
			<div class="searchbut">
				<input type="text" class="form-control border-0 shadow-none bc-black" style="background-color:black;color: #a6c964;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;letter-spacing: 1px;" placeholder="Search..."
					aria-label="Search..." />
			</div>
			<div class="link-page-top">
				<a href="#">
					<div class="dashboard-ico-top">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />
					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico-top">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />

					</div>
				</a>

				<a href="#">
					<div class="dashboard-ico-top">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />

					</div>
				</a>
				<a href="#">
					<div class="dashboard-ico-top">
						<img src="<?= base_url('sneebf')?>/img/homeicon.png" alt class="" />

					</div>
				</a>
			</div>
            <div class="avatar-top">
					<img src="<?= base_url('sneebf')?>/img/profile1.png" alt class="w-px-40 h-auto rounded-circle" />
				</div>
		</div>
		<!-- <div class="dropdown">
					<button class="dropdown-button">^</button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div> -->
		</div>
		<div class="content">
		<form action="<?= base_url('admin/news/save') ?>" enctype="multipart/form-data" method="POST">
    <label for="title_news">Title News</label>
    <input type="text" name="title_news" id="title_news" required>
    
    <label for="cat_news">Category</label>
    <select name="cat_news" id="cat_news" required>
        <option value="event">Event</option>
        <option value="gacha">Gacha</option>
    </select>
    
    <label for="status_news">Status</label>
    <select name="status_news" id="status_news" required>
        <option value="ongoing">Ongoing</option>
        <option value="over">Over</option>
    </select>
    
    <label for="image_news">Image</label>
    <input type="file" name="image_news" id="image_news" accept="image/*">
    
    <label for="desc_news">Description</label>
    <input type="text" name="desc_news" id="desc_news" required>
    
    <label for="date_news">Date</label>
    <input type="date" name="date_news" id="date_news" required>
    
    <button type="submit">Save</button>
</form>
		</div>
	</nav>
	<div class="cnt">

	</div>
	</div>


</body>

</html>
