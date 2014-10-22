<?php 
require('includes/helpers.php'); 
echoHead();
echoStyles();
?>

<!-- Add My Style Links Here -->
<link href="styles/main.css" rel="stylesheet">
<link href="styles/account.css" rel="stylesheet">

<?php echoScripts(); ?>

<!-- Add My Scripts Here -->
<script src="scripts/main.js"></script>
<script src="scripts/account.js"></script>

<?php require('includes/header.php'); ?>

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
		<div class="col-sm-3"> </div>
		<div class="col-sm-9">
			<h2>Account Settings<br/></h2>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div id="account-controls">
							<table>
								<tr>
									<td class="topic-column">
										<span><b>Username:</b></span>
									</td>
									<td class="data-column">
										<span>User</span>
									</td>
									<td class="change-column"></td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Email:</b></span>
									</td>
									<td class="data-column">
										<span class='email-data'>user123@gcc.edu</span>
										<input type="textbox" class="edit-email hide-class" value="user123@gcc.edu"/>
									</td>
									<td class="change-column">
										<input type="button" id="email-change" class="email-data" value="Change" />
										<input type="button" id="email-submit" class="edit-email hide-class" value="Submit" />
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span class="password-data"><b>Password:</b></span>
										<span class="edit-password hide-class"><b>New Password:<br> </b></span>
										<span class="edit-password hide-class"><b>Confirm Pasword:<br> </b></span>
										<span class="edit-password hide-class"><b>Current Pwd:</b></span>
									</td>
									<td class="data-column">
										<span class="password-data">********</span>
										<input type="textbox" id="new-password" class="edit-password hide-class" value=""/>
										<input type="textbox" id="confirm-password" class="edit-password hide-class" value=""/>
										<input type="textbox" id="current-password" class="edit-password hide-class" value=""/>
									</td>
									<td class="change-column">
										<input id="password-change" class='password-data' type="button" value="Change"/>
										<input id="password-submit" type="button" class="edit-password hide-class" value="Submit"/>
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Payment Info:</b></span>
									</td>
									<td class="data-column">
										<span class="payment-data">Credit Card<br>Master Card<br>XXXX-XXXX-XXXX-1234</span>
										<input class="edit-payment hide-class" type="textbox" value=""/>
										<input class="edit-payment hide-class" type="textbox" value=""/>
										<input class="edit-payment hide-class" type="textbox" value=""/>
									</td>
									<td class="change-column">
										<input id="payment-change" type="button" class="payment-data" value="Change"/>
										<input id="payment-submit" class="edit-payment hide-class" type="button" value="submit"/>
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Shipping Address:</b></span>
									</td>
									<td class="data-column">
										<span class="shipping-data">200 Campus Dr. <br>Grove City, PA, 16127 </span>
										<input type="textbox" class="edit-shipping hide-class" value=""/>
										<input type="textbox" class="edit-shipping hide-class" value=""/>
									</td>
									<td class="change-column">
										<input type="button" id="shipping-change" class='shipping-data' value="Change"/>
										<input type="button" id="shipping-submit" class="edit-shipping hide-class" value="Submit"/>
									</td>
							</table>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
	
<?php require('includes/footer.php'); ?>