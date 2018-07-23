<?php 
	include('defaults/header.php');
?>

<main class="bg-gradient">

	<!-- Content Start -->

	<div class="contact-wrapper">
		<div class="container full-width pos-rel">
			<div class="row">
				<div class="col s6 tape valign-wrapper">
					<img src="assets/img/tape.svg">
				</div>
				<div class="col s6 contact valign-wrapper">
					<form class="col s8 m-0">
						<div class="row">
					        <div class="input-field col s12">
					        	<input id="Name" type="text">
					        	<label for="Name">სახელი</label>
					        </div>
					        <div class="input-field col s12">
					        	<input id="LastName" type="text">
					        	<label for="LastName">გვარი</label>
					        </div>
					        <div class="input-field col s12">
					        	<input id="Email" type="email">
					        	<label for="Email">ელ.ფოსტა/პირადი ნომერი</label>
					        </div>
					        <div class="input-field col s12">
					        	<input id="Organization" type="text">
					        	<label for="Organization">ორგანიზაცია</label>
					        </div>
					        <div class="input-field col s12">
					        	<textarea id="Message" class="materialize-textarea" data-length="120" rows="4" cols="50"></textarea>
					        	<label for="Message">შეტყობინების ტექსტი</label>
					        </div>
					        <div class="input-field col s12">
					        	<button class="waves-effect waves-light btn right">გაგზავნა</button>
					        </div>
					     </div>
					</form>
				</div>
			</div>
			<div class="contact-info pos-abs">
				<span>საბა მენაბდე</span>
				<span>ტელ: <a href="tel:">595 65 65 65</a></span>
				<span>მისამრთი</span>
			</div>
		</div>
	</div>

	<!-- Content End -->

</main>

<?php
	include('defaults/footer.php');
?>
