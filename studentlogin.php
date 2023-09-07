<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stu-login.css" />
    <title>Student Login</title>
  </head>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      font-family: "DM Sans", sans-serif;
      color: white;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      max-width: 1200px;
    }

    .left-content {
      background: #353945;
      height: 39.6rem;
    }

    .main-image img {
      width: 74%;
    }

    .logo {
      background-color: white;
      padding: 8px 24px;
      border-radius: 90px;
      width: 18%;
      color: black;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      margin-bottom: 2.4rem;
      cursor: pointer;
      margin-top: 1rem;
      margin-left: 2rem;
      transition: all 0.3s ease-in-out;
    }

    .logo:hover {
      background-color: #868a98;
    }

    .logo img {
      margin-right: 0.5rem;
    }

    .main-content {
      margin-left: 5rem;
    }

    .main-heading {
      inline-size: 35rem;
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .main-paragraph {
      font-size: 1.2rem;
      inline-size: 30rem;
      margin-bottom: 2rem;
    }

    .right-content {
      /* padding: 5rem 5rem; */
      color: #27272e;
      transform: translateX(4rem);
    }

    .right-content,
    label,
    .inputs {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    .form-header {
      color: black;
      margin-bottom: 2rem;
    }

    .form-header h1 {
      margin-bottom: 0.4rem;
    }

    .inputs label {
      color: #425466;
      margin-bottom: 0.2rem;
    }

    .inputs input,
    #type {
      padding: 12px 24px;
      border-radius: 8px;
      border: none;
      background-color: #edf2f7;
      font-family: "DM Sans", sans-serif;
      font-size: 1rem;
      margin-bottom: 1.5rem;
      width: 90%;
    }

    .forget button {
      float: right;
      margin-right: 4rem;
      border: none;
      background: transparent;
      color: #777e90;
      font-size: 0.9rem;
      cursor: pointer;
      margin-bottom: 1rem;
    }

    .forget button:hover {
      color: black;
    }

    .sign button {
      border: none;
      background-color: black;
      color: white;
      cursor: pointer;
      font-family: "DM Sans", sans-serif;
      padding: 12px 24px;
      border-radius: 30px;
      font-size: 1rem;
      transition: all 0.3s ease-in-out;
      width: 90%;
    }

    .sign button:hover {
      background-color: rgb(166, 165, 165);
      color: black;
    }

    @media (max-width: 768px) {
      .container {
        grid-template-columns: 1fr;
        max-width: 100%;
      }

      .logo {
        padding: 8px 52px;
      }

      .left-content {
        height: auto;
      }

      .main-content {
        margin-left: 1rem;
      }

      .main-image img {
        width: 100%;
        height: auto;
      }

      .right-content {
        padding: 2rem;
        transform: none;
      }

      .main-heading {
        inline-size: auto;
        font-size: 1rem;
        margin-bottom: 1rem;
      }

      .main-paragraph {
        font-size: 1rem;
        inline-size: auto;
        margin-bottom: 1rem;
      }

      .inputs label,
      .inputs input,
      #type {
        font-size: 0.9rem;
        margin-bottom: 1rem;
      }

      .forget button,
      .sign button {
        float: none;
        text-align: center;
        width: auto;
      }
    }
  </style>

  <body>
    <div class="container">
      <div class="left-content">
        <div class="logo">
          <img
            width="24"
            height="24"
            src="https://img.icons8.com/material-rounded/24/star--v1.png"
            alt="star--v1"
          />LOGO
        </div>

        <div class="main-content">
          <div class="main-heading">
            <h1>Welcome to Virtual Collaboration Environment</h1>
          </div>

          <div class="main-paragraph">
            <p>
              We’ll help you improve your professional profile, track your
              progress, and find the courses that match your aspirations. Come
              and join us, you won’t regret it.
            </p>
          </div>

          <div class="main-image">
            <img src="image/login-page-1.png" alt="" />
          </div>
        </div>
      </div>

      <div class="right-content">
        <form method="post" action="studentloginpro.php">
          <div class="form-header">
            <h1>Welcome Back</h1>
            <p>Continue Your Professional Development Progress</p>
          </div>

          <div class="inputs">
            <label for="type">Select Account Type</label>
            <select name="accounttype" id="type">
              <option >Student</option>
              <option >Industry</option>
            </select>

            <label for="email">E-mail</label>
            <input name="email" type="email" placeholder="Type your e-mail" required />

            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              placeholder="Type your password"
              required
            />
          </div>

          <div class="forget">
            <button>Forget Password ?</button>
          </div>

          <div class="sign">
            <button name="signin">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
