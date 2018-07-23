<?php 
	include('defaults/header.php');
?>

<main class="bg-gradient">

	<!-- Content Start -->

	<section class="login-wrapper">
		<img class="login-reg-img" src="assets/img/bag.svg">
		<div class="row">
			<div class="col s12 p-0">
				<ul class="tabs login-registration-tabs col s4 offset-s4">
					<li class="tab col s5 offset-s1"><a class="active" href="#login-form" id="Login">შესვლა</a></li>
					<li class="tab col s5"><a href="#registration-form" id="Registration">რეგისტრაცია</a></li>
				</ul>
				<div id="login-form" class="col s12">
					<form class="col s4 offset-s4">
						<div class="row">
					        <div class="input-field col s6">
					        	<input id="Email" type="email">
					        	<label for="Email">ელ.ფოსტა/პირადი ნომერი</label>
					        </div>
					        <div class="input-field col s6">
					        	<input id="Password" type="password">
					        	<label for="Password">პაროლი</label>
					        </div>
					        <div class="input-field col s12">
					        	<button class="waves-effect waves-light btn right">დადასტურება</button>
					        </div>
					     </div>
					</form>
				</div>
				<div id="registration-form" class="col s12">
					<ul class="tabs registration-types col s4 offset-s4">
						<li class="tab"><a class="active" href="#person-form">მომხმარებელი</a></li>
						<li class="tab"><a href="#company-form">კომპანია</a></li>
					</ul>
					<div id="person-form" class="col s12">
						<form class="col s6 offset-s3">
							<div class="row">
						        <div class="input-field col s6">
						        	<input id="Name" type="text">
						        	<label for="Name">სახელი/გვარი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="City" type="text">
						        	<label for="City">ქალაქი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="BirthDate" type="text">
						        	<label for="BirthDate">დაბადების თარიღი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="Address" type="text">
						        	<label for="Address">მისამართი(გაქტობრივი)</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="UserID" type="text">
						        	<label for="UserID">პირადი ნომერი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="UserEmail" type="text">
						        	<label for="UserEmail">ელ.ფოსტა</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="Phone" type="text">
						        	<label for="Phone">საკონტაქტო ნომერი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="UserPassword" type="text">
						        	<label for="UserPassword">პაროლი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="Gender" type="text">
						        	<label for="Gender">სქესი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="RepeatUserPassword" type="text">
						        	<label for="RepeatUserPassword">გაიმერორეთ პაროლი</label>
						        </div>
						        <div class="input-field col s12">
						        	<button class="waves-effect waves-light btn right">დადასტურება</button>
						        </div>
						     </div>
						</form>
					</div>
					<div id="company-form" class="col s12">
						<form class="col s6 offset-s3">
							<div class="row">
						        <div class="input-field col s6">
						        	<input id="CompName" type="email">
						        	<label for="CompName">ორგანიზაციის დასახელება</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="CompPhone" type="password">
						        	<label for="CompPhone">საკონტაქტო ნომერი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="CompID" type="password">
						        	<label for="CompID">საიდენტიფიკაციო ნომერი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="CompEmail" type="password">
						        	<label for="CompEmail">ელ.ფოსტა</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="CompAddress" type="password">
						        	<label for="CompAddress">იურიდიული მისამართი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="CompPassword" type="password">
						        	<label for="CompPassword">პაროლი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="CompAdreess" type="password">
						        	<label for="CompAdreess">ფაქტობრივი მისამართი</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="RepeatCompPassword" type="password">
						        	<label for="RepeatCompPassword">გაიმეორეთ პაროლი</label>
						        </div>
						        <div class="input-field col s12">
						        	<button class="waves-effect waves-light btn right">დადასტურება</button>
						        </div>
						     </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Content End -->

</main>

<?php
	include('defaults/footer.php');
?>