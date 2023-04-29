<?php
require_once "db.php";
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Components Pages</title>

		<!-- Css Initialization And Components Styles -->

		<link rel="stylesheet" href="css/initialize.css" />

		<!-- Your Css Here  -->
		<link rel="stylesheet" href="css/style.css" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800;900&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body dir="rtl">
		<!-- Header And Links -->
		<!-- function header(){ -->
        <?php
        Headers();
        ?>
<!--		<header>-->
<!--			<img class="logo" src="./images/faculty logo.png" alt="" />-->
<!--			<div class="header-title">-->
<!--				<h3 class="univ-name">جامعة حلوان</h3>-->
<!--				<h4 class="facu-name">كلية التجارة وإدارة الأعمال</h4>-->
<!--				<h4 class="prog-name">برنامج نظم معلومات الأعمال BIS</h4>-->
<!--				<h1 class="project-title">-->
<!--					النظام الالكتروني لإدارة موضوعات مجلس الكلية-->
<!--				</h1>-->
<!--			</div>-->
<!--			<img class="logo" src="./images/program logo.png" alt="" />-->
<!--		</header>-->
		<!-- } -->
		<section class="nav-bar">
			<nav>
				<ul>
					<a class="icon" href="#"><i class="fa-solid fa-bars fa-2xl"></i></a>
					<div class="links deactive">
						<li><a href="index.html">الصفحة الرئيسية</a></li>
						<li><a href="meetings.php">المجالس</a></li>
						<li><a href="members.php">الاعضاء</a></li>
						<li><a href="subjects.php">الموضوعات</a></li>
						<li><a href="executive-decisions.php"> القرارات التنفيذية</a></li>
					</div>
				</ul>
				<form class="search" action="#">
					<input type="text" placeholder="بحث..." name="search" />
					<button type="submit" class="btn-basic">
						<i class="fa fa-search"></i>
					</button>
				</form>
			</nav>
		</section>

		<!-- Components That Are Reusable -->
		<div class="components">
			<p>بعض ال components المتكررة وسيعاد استخدامها</p>
			<!-- Button Or Anchor Tag Appear The Same With btn-basic Class -->
			<!-- There is "disabled" class you can add to make a button not clickable-->
			<p>زر button tag</p>
			<button class="btn-basic">رفع ملف المجلس الموثق</button>
			<p>زر button tag مغلق</p>

			<button class="btn-basic disabled">تسجيل الحضور</button>
			<p>زر anchor tag (link)</p>
			<a href="#" class="btn-basic">حذف</a>
			<p>زر anchor tag (link) مغلق</p>
			<a href="#" class="btn-basic disabled">تعديل</a>
			<form action="#">
				<!-- Inputs  -->
				<p>text input bars :</p>
				<input type="text" placeholder="اسم المستخدم" />
				<input type="text" placeholder="رقم المجلس" />
				<input type="password" placeholder="كلمة السر" />
				<input type="email" placeholder="البريد الالكتروني" />
				<!-- Radio Buttons  -->
				<p>Radio & checkbox Buttons :</p>
				<input type="checkbox" />
				<input type="checkbox" />
				<input type="checkbox" />

				<input type="radio" name="radio" />
				<input type="radio" name="radio" />
				<input type="radio" name="radio" />
				<p>Dropdown List :</p>
				<!-- Drop Down List -->
				<div class="select-basic">
					<select>
						<option value="">اختر</option>
						<option value="">كل القرارات</option>
						<option value="">القرارات المنفذة</option>
						<option value="">القرارات الغير منفذة</option>
					</select>
				</div>
				<div class="select-basic">
					<select>
						<option value="">اختر</option>
						<option value="">كل الموضوعات</option>
						<option value="">موضوعات المجلس الحالي</option>
						<option value="">موضوعات بالقرار</option>
						<option value="">موضوعات بدون قرار</option>
					</select>
				</div>
				<div class="select-basic">
					<select>
						<option value="">اختر</option>
						<option value="">الموضوعات حسب دخولها</option>
						<option value="">الموضوعات حسب الاولوية</option>
					</select>
				</div>
			</form>
			<p>Search Bar :</p>
			<form class="search" action="#">
				<input type="text" placeholder="بحث..." name="search" />
				<button type="submit" class="btn-basic">
					<i class="fa fa-search"></i>
				</button>
			</form>
			<p style="margin-bottom: 10px">Upload Buttons:</p>

			<!-- !Note That Each Upload Must have Different {id} & {for} attributes for {input} & {label} tags
			!like : <label for="up1"></label> <input id="up1"/> -->

			<div class="upload">
				<div class="btn-basic">
					<label for="up1">
						رفع ملف المجلس الموثق
						<i class="fa-solid fa-upload"></i>
						<input id="up1" type="file" class="upload-button" multiple />
					</label>
				</div>
				<div class="file-list"></div>
			</div>
			<div class="upload">
				<div class="btn-basic">
					<label for="up2">
						رفع ملف المجلس الموثق
						<i class="fa-solid fa-upload"></i>
						<input id="up2" type="file" class="upload-button" multiple />
					</label>
				</div>
				<div class="file-list"></div>
			</div>
			<div class="upload">
				<div class="btn-basic">
					<label for="up3">
						رفع ملف المجلس الموثق
						<i class="fa-solid fa-upload"></i>
						<input id="up3" type="file" class="upload-button" multiple />
					</label>
				</div>
				<div class="file-list"></div>
			</div>
		</div>

		<!--  Another Content To Be Added Later (Just As an Example Ignore / Delete it) -->

		<div class="another-content">باقي محتوى الصفحة هنا</div>

		<!-- Footer -->
		<!-- function footer(){ -->
		<footer>
			<p>جميع الحقوق محفوظة &copy; لدى فريق رقم 39 Bis Seniors 2023</p>
		</footer>
		<!-- } -->

		<!-- Js Scripts and Plugins -->
		<script type="module" src="./js/main.js"></script>

		<!-- font Awesome -->
		<script
			src="https://kit.fontawesome.com/eb7dada2f7.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
