<!--    Author :
        Irsyad Muhamad Al Anshori 1301174648
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | MentalCare</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/logo22-nobg.png">
</head>
<body>
				<!-- -------------------- FLASH DATA -------------------- -->
				<?php if ($this->session->flashdata('flash')) : ?>
    				<div class="row text-center fixed-top">
        				<div class="col-md-12">
							<div class="alert alert-dismissible fade show" role="alert"
							style="background-color: #E36447; padding: 15px; margin:0; color:white;">
							    <?= $this->session->flashdata('flash'); ?>
                				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    				<span aria-hidden="true">&times;</span>
                				</button>
            				</div>
        				</div>
    				</div>
    			<?php endif; ?>
				<!-- -------------------- FLASH DATA -------------------- -->

	<div class="login-page">
		<div class="container login-page__container">
			<div class="login-page__box">
				<h3 class="login-page__title" data-test-id="page-title-login">Masuk ke akun MentalCare Anda</h3>
				<img src="<?php echo base_url();?>/assets/img/logo22-nobg.png">
				<div class="login-page__tabs">
					<div class="login-page__tab-panel">
						<div class="login-page__form">
							<form action="" method="POST">
								<div class="fields undefined">
									<label class="fields__label undefined-label"><img src="<?php echo base_url();?>/assets/img/4.png" style="width:42px;"></label>
									<input type="text" name="email" value="" class="fieldsemail">
								</div>
								<div class="login-page__password">
									<div class="fields login-page__fields">
										<label class="fields__label login-page__fields-label"><img src="<?php echo base_url();?>/assets/img/passwd.png" style="width:25px; padding-left:7.5px; padding-right:7.5px;"></label>
										<input type="password" name="password" value="" class="fieldspasswd">
										<span class="fields__error login-page__fields-error"></span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>					