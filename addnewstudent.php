<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <title>Student Login</title>

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@700&display=swap" />
</head>

<style>
 
 body {
  margin: 0;
  line-height: normal;
}

:root {
  /* fonts */
  --font-dm-sans: "DM Sans";

  /* font sizes */
  --font-size-xl: 1.25rem;
  --font-size-6xl: 1.56rem;
  --font-size-base: 1rem;

  /* Colors */
  --color-gainsboro-100: #e6e8ec;
  --color-gainsboro-200: rgba(217, 217, 217, 0.81);
  --color-black: #000;
  --color-lightsteelblue: #b5c3d9;
  --color-gray-100: #fcfcfd;
  --color-whitesmoke: #f4f5f6;
  --color-slategray: #777e90;
  --color-firebrick: #c10606;

  /* Paddings */
  --padding-3xs: 0.63rem;

  /* border radiuses */
  --br-xl: 20px;
  --br-71xl: 90px;
  --br-7xs: 6px;
}

.industrialist-form-child {
  position: absolute;
  top: 4.5rem;
  left: 0;
  background-color: var(--color-whitesmoke);
  width: 96rem;
  height: 40.2rem;
}
.industrialist-details {
  position: absolute;
  top: 1.2rem;
  left: 1.94rem;
  line-height: 1rem;
  display: inline-block;
  width: 22.13rem;
  height: 3.56rem;
}
.group-child {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 18px;
  background-color: var(--color-gainsboro-200);
  width: 40.63rem;
  height: 30.31rem;
}
.span {
  color: var(--color-firebrick);
}
.phone-number-container {
  position: absolute;
  top: 0;
  left: 0;
  line-height: 1rem;
  display: inline-block;
  width: 10.75rem;
  height: 1.19rem;
}
.group-item {
  border: 0;
  background-color: var(--color-gray-100);
  position: absolute;
  top: 1.69rem;
  left: 0.44rem;
  border-radius: var(--br-7xs);
  width: 12.44rem;
  height: 1.81rem;
}
.phone-number-parent {
  position: absolute;
  top: 10.88rem;
  left: 25rem;
  width: 12.88rem;
  height: 3.5rem;
}
.confirm-password-container {
  position: absolute;
  top: 0;
  left: 0;
  line-height: 1rem;
  display: inline-block;
  width: 12.06rem;
  height: 1.19rem;
}
.group-inner {
  border: 0;
  background-color: var(--color-gray-100);
  position: absolute;
  top: 2.25rem;
  left: 0.44rem;
  border-radius: var(--br-7xs);
  width: 12.44rem;
  height: 1.81rem;
}
.confirm-password-parent {
  position: absolute;
  top: 16.69rem;
  left: 25rem;
  width: 12.88rem;
  height: 4.06rem;
}
.password {
  position: absolute;
  top: 0;
  left: 0;
  line-height: 1rem;
  display: inline-block;
  width: 9.31rem;
  height: 1.19rem;
}
.rectangle-input {
  border: 0;
  background-color: var(--color-gray-100);
  position: absolute;
  top: 2.25rem;
  left: 0.56rem;
  border-radius: var(--br-7xs);
  width: 16.5rem;
  height: 1.81rem;
}
.password-parent {
  position: absolute;
  top: 16.69rem;
  left: 2.81rem;
  width: 17.06rem;
  height: 4.06rem;
}
.email {
  position: absolute;
  top: 0;
  left: 0;
  line-height: 1rem;
  display: inline-block;
  width: 8.31rem;
  height: 1.19rem;
}
.group-child1 {
  border: 0;
  background-color: var(--color-gray-100);
  position: absolute;
  top: 2.19rem;
  left: 0.56rem;
  border-radius: var(--br-7xs);
  width: 16.5rem;
  height: 1.81rem;
}
.email-parent,
.group-child2 {
  position: absolute;
  top: 10.31rem;
  left: 2.81rem;
  width: 17.06rem;
  height: 4rem;
}
.group-child2 {
  border: 0;
  background-color: var(--color-gray-100);
  top: 1.88rem;
  left: 0.44rem;
  border-radius: var(--br-7xs);
  width: 16.5rem;
  height: 1.81rem;
}
.first-name-parent,
.group-child3 {
  position: absolute;
  top: 4.19rem;
  left: 2.94rem;
  width: 16.94rem;
  height: 3.69rem;
}
.group-child3 {
  border: 0;
  background-color: var(--color-gray-100);
  top: 1.88rem;
  left: 0.44rem;
  border-radius: var(--br-7xs);
  width: 12.44rem;
  height: 1.81rem;
}
.last-name-parent {
  position: absolute;
  top: 4.19rem;
  left: 25rem;
  width: 12.88rem;
  height: 3.69rem;
}
.add,
.button {
  position: absolute;
}
.add {
  line-height: 1rem;
  display: inline-block;
  width: 6.13rem;
  height: 2.31rem;
  left: 0rem;
  margin-top: -2rem;
  border-radius: var(--br-71xl);
  background-color: var(--color-lightsteelblue);
  border: none;
  width: 13.13rem;
  height: 3.25rem;
  font-weight: 700;
  font-size: var(--font-size-xl);
  cursor: pointer;
  transition: all .3s ease-in-out;
}
.add:hover{
  background-color: var(--color-black);
  color: var(--color-lightsteelblue);
}
.button-parent {
  top: 26.06rem;
  left: 25.31rem;
  width: 13.13rem;
  height: 3.44rem;
  text-align: center;
  font-size: var(--font-size-6xl);
}
.button-parent,
.reset {
  position: absolute;
}
.reset {
  line-height: 1rem;
  display: inline-block;
  width: 6.13rem;
  height: 2.31rem;
  left: 1rem;
  margin-top: -2rem;
  border-radius: var(--br-71xl);
  background-color: var(--color-lightsteelblue);
  border: none;
  width: 13.13rem;
  height: 3.25rem;
  font-weight: 700;
  font-size: var(--font-size-xl);
  cursor: pointer;
  transition: all .3s ease-in-out;
}
.reset:hover{
  background-color: var(--color-black);
  color: var(--color-lightsteelblue);
}
.button-group {
  position: absolute;
  top: 26.06rem;
  left: 2.94rem;
  width: 13.13rem;
  height: 3.5rem;
  text-align: center;
  font-size: var(--font-size-6xl);
}
.rectangle-parent {
  position: absolute;
  top: 5rem;
  left: 9.75rem;
  width: 40.63rem;
  height: 32.31rem;
  text-align: left;
  font-size: var(--font-size-xl);
}
.industrialist-details-parent {
  position: absolute;
  top: 6rem;
  left: 27.94rem;
  width: 60.06rem;
  height: 38rem;
  overflow: hidden;
}
.iconsstarfilled {
  position: relative;
  width: 1rem;
  height: 1rem;
  left: 0.8rem;
  overflow: hidden;
  flex-shrink: 0;
}
.label {
  position: relative;
  line-height: 1rem;
}
.button2,
.divider {
  background-color: var(--color-gainsboro-100);
}
.label, .button2 {
  border-radius: var(--br-71xl);
  width: 8.63rem;
  height: 3.25rem;
  display: flex;
  flex-direction: row;
  border: none;
  padding: 1rem 1.5rem;
  box-sizing: border-box;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
  text-align: left;
  color: #23262f;
  cursor: pointer;
}

.label{
  display: flex;
  width: 138px;
  height: 52px;
  padding: 16px 24px;
  justify-content: center;
  align-items: center;
  gap: 12px;
  color: #23262F;
  font-family: DM Sans;
  font-size: 16px;
  border: none;
  font-style: normal;
  font-weight: 700;
  line-height: 16px; /* 100% */
  border-radius: 90px;
  background: #E6E8EC;
}
.divider {
  position: relative;
  border-radius: 2px;
  width: 0.13rem;
  height: 2.5rem;
  overflow: hidden;
  flex-shrink: 0;
}
.reports {
  text-decoration: none;
  position: relative;
  line-height: 1rem;
  font-weight: 700;
  color: inherit;
  transition: all .3s ease-in-out;
}
.reports:hover{
  color: black;
}
.left-content {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: 2rem;
}
.iconsuserline {
  position: relative;
  width: 1.5rem;
  height: 1.5rem;
  overflow: hidden;
  flex-shrink: 0;
}
.frame-div {
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  flex-direction: row;
  padding: var(--padding-3xs);
  align-items: flex-start;
  justify-content: flex-start;
}
.frame-container {
  position: relative;
  width: 2.75rem;
  height: 2.75rem;
}
.frame-wrapper,
.nav-content-inner {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
.nav-content-inner {
  width: 2.75rem;
  height: 2.56rem;
  align-items: flex-start;
  justify-content: flex-start;
}
.nav-content {
  background-color: var(--color-whitesmoke);
  width: 95.81rem;
  display: flex;
  flex-direction: row;
  padding: 0.6rem 10rem;
  box-sizing: border-box;
  align-items: center;
  justify-content: space-between;
}
.divider1 {
  align-self: stretch;
  position: relative;
  background-color: var(--color-gainsboro-100);
  height: 0.06rem;
  overflow: hidden;
  flex-shrink: 0;
}
.admin-name,
.nav {
  position: absolute;
  left: 0;
}
.nav {
  top: -0.5;
  background-color: var(--color-gray-100);
  width: 96rem;
  height: 7.38rem;
  overflow: hidden;
  display: flex;
  font-family: var(--font-dm-sans);
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  font-size: var(--font-size-base);
  color: var(--color-slategray);
}
.admin-name {
  top: 11.35rem;
  line-height: 1rem;
  display: inline-block;
  width: 17.31rem;
  height: 4.28rem;
}
.background {
  border-radius: 50%;
  background-color: #141416;
}
.background,
.object {
  position: absolute;
  top: 0;
  left: 0;
  width: 9.66rem;
  height: 9.52rem;
}
.indicator {
  position: absolute;
  top: 7.02rem;
  left: 7.16rem;
  border-radius: 50%;
  background-color: #2dab32;
  border: 1px solid #fff;
  box-sizing: border-box;
  width: 2.5rem;
  height: 2.51rem;
}
.iconsuserline1 {
  position: relative;
  width: 5.63rem;
  height: 5.31rem;
  overflow: hidden;
  flex-shrink: 0;
}
.iconsuserline-container {
  position: absolute;
  top: 2.57rem;
  left: 2.19rem;
  width: 5.33rem;
  height: 4.34rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
.background-parent {
  position: absolute;
  top: 0;
  left: 4.26rem;
  width: 9.66rem;
  height: 9.52rem;
}
.admin,
.manage1 {
  position: relative;
  width: 17.31rem;
  height: 15.63rem;
}
.manage1 {
  line-height: 1rem;
  display: inline-block;
  width: 6.63rem;
  height: 1.44rem;
  flex-shrink: 0;
}
.manage-child {
  position: relative;
  width: 18.25rem;
  height: 0.13rem;
}
.students {
  line-height: 1rem;
  display: inline-block;
  width: 6.13rem;
  height: 2.31rem;
  left: 1rem;
  margin-top: -2rem;
  border-radius: var(--br-71xl);
  background-color: var(--color-gainsboro-100);
  border: none;
  width: 13.13rem;
  height: 3.25rem;
  font-weight: 700;
  font-size: var(--font-size-xl);
  cursor: pointer;
  transition: all .3s ease-in-out;
}
.button-container {
  position: relative;
  width: 13.13rem;
  height: 3.25rem;
}
.industrialist {
  line-height: 1rem;
  display: inline-block;
  width: 6.13rem;
  height: 2.31rem;
  left: 1rem;
  margin-top: -2rem;
  border-radius: var(--br-71xl);
  background-color: var(--color-lightsteelblue);
  border: none;
  width: 13.13rem;
  height: 3.25rem;
  font-weight: 700;
  font-size: var(--font-size-xl);
  cursor: pointer;
  transition: all .3s ease-in-out;
}
.admin-parent,
.manage {
  border-radius: var(--br-xl);
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  justify-content: flex-start;
}
.manage {
  background-color: var(--color-gainsboro-200);
  width: 18.13rem;
  height: 15.31rem;
  padding: 1.88rem 2.5rem;
  align-items: center;
  gap: 1.25rem;
  font-size: var(--font-size-6xl);
}
.admin-parent {
  position: absolute;
  top: calc(50% - -7rem);
  left: calc(50% - -70px);
  width: 21.63rem;
  height: 37rem;
  padding: var(--padding-3xs) 31.25rem 6.25rem 0.31rem;
  align-items: flex-start;
  gap: 6.25rem;
  mix-blend-mode: normal;
  font-size: var(--font-size-xl);
}
.industrialist-form-item {
  position: absolute;
  top: 5rem;
  left: 27.38rem;
  width: 0.13rem;
  height: 39rem;
}
.industrialist-form {
  text-decoration: none;
  position: relative;
  width: 100%;
  height: 59.38rem;
  text-align: center;
  font-size: 2.19rem;
  color: var(--color-black);
  font-family: var(--font-dm-sans);
}
</style>

<body>
  <div class="nav">
    <div class="nav-content">
      <div class="left-content">
        <div class="button2">
          <img class="iconsstarfilled" alt="" src="./public/iconsstarfilled.svg" />

          <b class="label">LOGO</b>
        </div>
        <div class="divider"></div>
        <a href="#" class="reports">Reports</a>
        <a href="#" class="reports">Manage Courses</a>
        <a href="#" class="reports">Notifications</a>
      </div>
      <div class="nav-content-inner">
        <div class="frame-wrapper">
          <div class="frame-container">
            <div class="frame-div">
              <div class="frame-wrapper">
                <img class="iconsuserline" alt="" src="./public/iconsuserline.svg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="divider1"></div>
  </div>

  <a class="industrialist-form" target="_blank">
    <div class="industrialist-form-child"></div>
    <div class="industrialist-details-parent">
   <form method="post" action="addnewstudentpro.php" id="myForm">
      <b class="industrialist-details">Student Details :</b>
      <div class="rectangle-parent">
        <div class="group-child"></div>
        <div class="phone-number-parent">
          <b class="phone-number-container">
            <span>Phone Number </span>
            <span class="span">*</span>
          </b>
          <input name="phoneno" class="group-item" type="text" />
        </div>
        <div class="confirm-password-parent">
          <b class="confirm-password-container">
            <span>Confirm Password </span>
            <span class="span">*</span>
          </b>
          <input name="confirmpass" class="group-inner" type="password" />
        </div>
        <div class="password-parent">
          <b class="password">
            <span>Password </span>
            <span class="span">*</span>
          </b>
          <input name="password" class="rectangle-input" type="password" />
        </div>
        <div class="email-parent">
          <b class="email">
            <span>Email </span>
            <span class="span">*</span>
          </b>
          <input name="email" class="group-child1" type="email" />
        </div>
        <div class="first-name-parent">
          <b class="email">
            <span>First Name </span>
            <span  class="span">*</span>
          </b>
          <input name="firstname" class="group-child2" type="text" />
        </div>
        <div class="last-name-parent">
          <b class="email">
            <span>Last Name</span>
            <span class="span">*</span>
          </b>
          <input name="lastname" class="group-child3" type="text" />
        </div>
        <div class="button-parent">
          <button name="addstudent" class="add">ADD</button>
        </div>
        <div class="button-group">
          <div class="button1"></div>
          <button  class="reset">RESET</button>
        </div>
      </div>
     </div>
    </form> 

    <script>
      document.querySelector('.reset').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('myForm').reset();
      });
    </script>
    
    <div class="admin-parent">
      <div class="admin">
        <b class="admin-name">Admin_Name </b>
        <div class="background-parent">
          <div class="background"></div>
          <div class="object"></div>
          <div class="indicator"></div>
          <div class="iconsuserline-container">
            <img class="iconsuserline1" alt="" src="./public/iconsuserline1.svg" />
          </div>
        </div>
      </div>
      <div class="manage">
        <b class="manage1">Manage</b>
        <img class="manage-child" alt="" src="./public/line-58.svg" />

        <div class="button-container">
          <button class="students">Students</button>
        </div>
        <div class="button-container">
          <button class="industrialist">Industrialist</button>
        </div>
      </div>
    </div>
    <img class="industrialist-form-item" alt="" src="./public/line-57.svg" />
  </a>
</body>

</html>