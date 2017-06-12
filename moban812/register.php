<?php  include('./header.php'); ?>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="contact-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<div class="box">
						<center><div class="art-header">
							<h1 class="center">用户登录</h1>
						</div></center>
						<div class="art-content">
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label>
									<span>用户名</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>密码</span>
									<input type="password"  name="pwd" id="pwd" required>
									</label>
                                    <label>
                                        <span>验证码</span>
                                        <input type="text"  name="email" id="email" required>
                                    </label>

									<center><input class="sendButton" type="submit" name="Submit" value="登录"></center>
								</form>
							</div>
						</div>
					</div>
				</div>
<?php  include('./footer.php'); ?>