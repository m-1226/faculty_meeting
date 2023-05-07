  // Get the add_member_btn button
  const addButton = document.querySelector('[name="add_member_btn"]');

  // Add an event listener to detect when the button is clicked
  addButton.addEventListener('click', (event) => {
    // Get the values of the required input fields
    const name = document.querySelector('[name="name"]');
    const gender = document.querySelector('[name="gender"]:checked');
    const email = document.querySelector('[name="email"]');
    const password = document.querySelector('[name="password"]');
    const jobTitle = document.querySelector('[name="job_title"]');
    const jobType = document.querySelector('[name="job_type"]');
    const jobRank = document.querySelector('[name="job_rank"]');
    const department = document.querySelector('[name="department"]');
    const isAdmin = document.querySelector('[name="is_admin"]');

    // Check if any of the required fields are empty
    let errors = false;
    if (name.value.trim() === '') {
      let nameError = name.parentElement.querySelector('.error');
      if (!nameError) {
        nameError = document.createElement('div');
        nameError.classList.add('error');
        nameError.textContent = 'الرجاء إدخال الاسم بالكامل';
        name.parentElement.appendChild(nameError);
      }
      errors = true;

      // Listen for the input event to remove the error message when the user enters a value
      name.addEventListener('input', () => {
        nameError.remove();
      });
    }
    if (!gender) {
      let genderError = gender.parentElement.querySelector('.error');
      if (!genderError) {
        genderError = document.createElement('div');
        genderError.classList.add('error');
        genderError.textContent = 'الرجاء اختيار النوع';
        gender.parentElement.appendChild(genderError);
      }
      errors = true;

      // Listen for the change event to remove the error message when the user makes a selection
      gender.addEventListener('change', () => {
        genderError.remove();
      });
    }
    if (email.value.trim() === '') {
      let emailError = email.parentElement.querySelector('.error');
      if (!emailError) {
        emailError = document.createElement('div');
        emailError.classList.add('error');
        emailError.textContent = 'الرجاء إدخال البريد الالكتروني';
        email.parentElement.appendChild(emailError);
      }
      errors = true;

      // Listen for the input event to remove the error message when the user enters a value
      email.addEventListener('input', () => {
        emailError.remove();
      });
    }
    if (password.value.trim() === '') {
      let passwordError = password.parentElement.querySelector('.error');
      if (!passwordError) {
        passwordError = document.createElement('div');
        passwordError.classList.add('error');
        passwordError.textContent = 'الرجاء إدخال كلمة السر';
        password.parentElement.appendChild(passwordError);
      }
      errors = true;

      // Listen for the input event to remove the error message when the user enters a value
      password.addEventListener('input', () => {
        passwordError.remove();
      });
    }
    if (jobTitle.value.trim() === '') {
      let jobTitleError = jobTitle.parentElement.querySelector('.error');
      if (!jobTitleError) {
        jobTitleError = document.createElement('div');
        jobTitleError.classList.add('error');
        jobTitleError.textContent = 'الرجاء إدخال المسمى الوظيفي';
        jobTitle.parentElement.appendChild(jobTitleError);
      }
      errors = true;

      // Listen for the input event to remove the error message when the user enters a value
      jobTitle.addEventListener('input', () => {
        jobTitleError.remove();
      });
    }
    if (jobType.value.trim() === '') {
      let jobTypeError = jobType.parentElement.querySelector('.error');
      if (!jobTypeError) {
        jobTypeError = document.createElement('div');
        jobTypeError.classList.add('error');
        jobTypeError.textContent = 'الرجاء اختيار الفئة الوظيفية';
        jobType.parentElement.appendChild(jobTypeError);
      }
      errors = true;

      // Listen for the change event to remove the error message when the user makes a selection
      jobType.addEventListener('change', () => {
        jobTypeError.remove();
      });
    }
    if (jobRank.value.trim() === '') {
      let jobRankError = jobRank.parentElement.querySelector('.error');
      if (!jobRankError) {
        jobRankError = document.createElement('div');
        jobRankError.classList.add('error');
        jobRankError.textContent = 'الرجاء اختيار الدرجة الوظيفية';
        jobRank.parentElement.appendChild(jobRankError);
      }
      errors = true;

      // Listen for the change event to remove the error message when the user makes a selection
      jobRank.addEventListener('change', () => {
        jobRankError.remove();
      });
    }
    if (department.value.trim() === '') {
      let departmentError = department.parentElement.querySelector('.error');
      if (!departmentError) {
        departmentError = document.createElement('div');
        departmentError.classList.add('error');
        departmentError.textContent = 'الرجاء اختيار القسم';
        department.parentElement.appendChild(departmentError);
      }
      errors = true;

      // Listen for the change event to remove the error message when the user makes a selection
      department.addEventListener('change', () => {
        departmentError.remove();
      });
    }
    if (!isAdmin.checked) {
      let isAdminError = isAdmin.parentElement.querySelector('.error');
      if (!isAdminError) {
        isAdminError = document.createElement('div');
        isAdminError.classList.add('error');
        isAdminError.textContent = 'الرجاء التحقق من صلاحيات الحساب';
        isAdmin.parentElement.appendChild(isAdminError);
      }
      errors = true;

      // Listen for the change event to remove the error message when the user makes a selection
      isAdmin.addEventListener('change', () => {
        isAdminError.remove();
      });
    }

    // If there are no errors, submit the form
    if (!errors) {
      alert('تم إضافة العضو بنجاح!');
      event.target.form.submit();
    }
  });