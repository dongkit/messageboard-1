<style>
	body {
		background-color: #111;
		color: #fff;
	}
	p {
		margin-bottom: 5px;
	}
	
	.card {
		background-color: #222;
		color: #fff;
	}
</style>


	
<?php
	if (empty($user['User']['photo_url'])) {
		$photoUrl = 'https://cdn-icons-png.flaticon.com/512/147/147142.png';
	} else {
		$photoUrl = $this->Html->webroot($user['User']['photo_url']);
	}
?>

<?php echo $this->element('navigation'); ?>

<body>
	
<div class="container d-flex justify-content-center">
	<div class="card my-5" style="width:100vh;">
		<h2 class="card-title text-center my-4">User Profile</h2>

		<div class="card-body py-4">
			<div class="row">
				<div class="col-md-3 offset-md-1 ml-3">
					<div class="text-center d-flex justify-content-center">
						<img src="<?php echo $photoUrl; ?>" style="max-height: 100%; border-radius: 15px; max-width: 150px;" class="form-group">
					</div>

					<div class="d-flex justify-content-center mb-4">
						<?php echo $this->Html->link('Edit Profile', array('controller' => 'users', 'action' => 'edit'), array('class' => 'btn btn-secondary'));?>
					</div>
				</div>

				<div class="col-lg-8">
					<div class="text-left">
						<div class="block">
							<h3 class="mb-2"><strong>
								<?php echo $user['User']['name']; ?></strong>
							</h3>
							<p><strong>Email: </strong> 
								<?php echo $user['User']['email']; ?>
							</p>
							<p><strong>Gender:</strong>
								<?php if ($user['User']['gender'] == 'm'): ?>
									Male
								<?php else: ?>
									Female
								<?php endif; ?>
							</p>
							<p><strong>Birthdate: </strong> 
								<?php if ($user['User']['birthdate']): ?>
									<?php echo $user['User']['birthdate'];?>
								<?php else:?>
									N/A
								<?php endif;?>
							</p>
							<p><strong>Joined: </strong> 
								<?php echo $user['User']['created']; ?>
							</p>
							<p><strong>Last Login: </strong> 
								<?php if ($user['User']['last_login_at']): ?>
									<?php echo $user['User']['last_login_at'];?>
								<?php else:?>
									N/A
								<?php endif;?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="col-md-12">
				<h4>Hobby</h4>
				<?php if($user['User']['hobby']): ?>
					<div style="text-align: left; background: rgba(0,0,0,0.1); padding: 20px">
						<p>
							<?php echo $user['User']['hobby']; ?>
						</p>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
</body>