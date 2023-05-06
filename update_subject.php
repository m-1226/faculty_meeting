<?php
require_once "db.php";
require_once "functions.php";

if (session_status() === PHP_SESSION_NONE)
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
    Head("تعديل موضوع");
    ?>

<body dir="rtl">
  <?php
    Headers();
    Nav();
    if (is_admin()):
    ?>
  <main class="add-member-page">
    <div class="container">
      <!-- عنوان الصفحة -->
      <div class="title">
        <h1>تعديل الموضوع</h1>
      </div>
      <form class="box" method="post" action="add_member_code.php" enctype="multipart/form-data">
        <div class="col">

          <div class="row">
            <h4>عنوان الموضوع</h4><input type="text" name="name" placeholder="عنوان الموضوع" required />
          </div>

          <div class="row">
            <h4>تصنيف الموضوع</h4>
            <div class="select-basic">
              <select name="is_admin" required>
                <option>اختر</option>

                <option>شئون التعليم والطلاب</option>
                <option>شئون الدراسات العليا والبحوث</option>
                <option>شئون خدمة المجتمع وتنمية البيئة</option>
                <option>الأقسام</option>
                <option>لجنة البرامج</option>
                <option>موضوع عام</option>
              </select>
            </div>
          </div>
          <div class="row">
            <h4>تحديد الاولوية</h4>
            <div class="select-basic">
              <select name="is_admin" required>
                <option>اختر</option>

                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>
          </div>
          <div class="row">
            <h4>المرفقات الخاصة بالموضوع</h4>
            <div class="upload">
              <div class="btn-basic">
                <label for="up1">
                  رفع مرفق
                  <i class="fa-solid fa-upload"></i>
                  <input id="up1" type="file" class="upload-button" />
                </label>
              </div>
              <div class="file-list"></div>
            </div>
          </div>

          <div class="row">
            <h4>تفاصيل الموضوع</h4>
            <textarea name=""></textarea>
          </div>
          <div class="row">
            <h4>رفع صورة داخل التفاصيل</h4>
            <div class="upload">
              <div class="btn-basic">
                <label for="up2">
                  رفع صورة
                  <i class="fa-solid fa-upload"></i>
                  <input id="up2" type="file" class="upload-button" />
                </label>
              </div>
              <div class="file-list"></div>
            </div>
          </div>
          <div class="row">
            <h4>ملاحظات</h4>
            <textarea name=""></textarea>
          </div>
          <div class="row sp2-row">
            <button type="submit" class="btn-basic" name="add_member_btn">تعديل موضوع</button>
            <button type="submit" class="btn-basic" name="add_member_btn">حذف موضوع</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <?php
  endif;
  footer();
  ?>

  <!-- Js Scripts and Plugins -->
  <script type="module" src="./js/main.js"></script>

  <!-- font Awesome -->
  <script src="https://kit.fontawesome.com/eb7dada2f7.js" crossorigin="anonymous"></script>
</body>

</html>