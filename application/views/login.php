<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Musanji</title>
	<link rel="stylesheet" href="<?= base_url('sneebf')?>/css/login-page.css">
	<link rel="icon" type="image/x-icon" href="<?= base_url('sneebf')?>/img/logoweb1.png" />
</head>

<body>
	<!-- <center>
		<div class="login-tab">
			<div class="login-title">
				<div class="bag-1">
					<div class="judul-1">
						<h1 class="login-q">Login</h1>
					</div>
                    <div class="bagian-form-login">
                        <form action=""> -->
								<!-- <br>
								<label for="" class="label-login">Username</label><br>
								<br>
								<input type="text" style="border:none;"> -->
                        <!-- </form>
                    </div>
				</div>
				<div class="bag-2">
					<div class="judul-2">
						<h1 class="signup-q">Sign Up</h1>
					</div>
                    <div class="bagian-form-signup">
                    <form action=""> -->
                            <!-- <label for="" class="label-signup">Username</label><br>
                            <input type="text"> -->
                        <!-- </form>
                    </div>
				</div>
			</div>
			<div class="login-secondary"></div>
			<div class="login-form"></div>
			<div class="test-button">
				<button>Test Button</button>
			</div>
		</div>
	</center> -->

	<form class="mb-3" action="<?= base_url('auth/login') ?>" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
                <div id="ngilang">
                  <?= $this->session->flashdata('alert') ?>
                </div>
              </div>
              </form>
</body>

</html>
