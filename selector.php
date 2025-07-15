<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Visage</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='css/button.scss' type='text/css'>
    <style>
      body {
        background: #333;
        text-align: center;
        font-family: Raleway;
      }
      .output {
        margin-top: 60px;
        font-size: 2em;
        color: #2c7;
        margin-bottom: 10vh;
      }
      .label {
        border: #2c7 3px solid;
        position: relative;
        left: 0;
        right: 0;
        margin: auto;
        margin-top: 30px;
        padding: 0 15px 0 15px;
        width: 50%;
        color: #333;
        background: #2c7;
      }
      input {
        text-align: inherit;
        width: 50%;
        height: 60px;
        font-size: 40px;
        background: transparent;
        border: #2c7 3px solid;
        color: #2c7;
        transition: padding 0.4s;
        padding: 0 15px 0 15px;
        outline: none;
        overflow: auto;
      }
      input::-ms-clear {
        display: none;
      }
      input:focus {
        padding: 15px;
      }
      button.btn {
        width: 125px;
        height: 50px;
        color: black;
        background-color: #2c7;
      }
    </style>
    <script src="js/prefixfree.min.js"></script>
  </head>
  <body>
    <div class="output">
      <span class="name">VISAGE</span>
    </div><br /><hr />
    <form method="post" action="redirect_method.php">
      <select name="dropdown" style="width: 100px; text-align: center; font-size: 1em;">
        <option value="staff">Staff</option>
        <option value="student">Student</option>
        <option value="valve">Valve</option>
        <option value="other">Other</option>
      </select><br /><br />
        <button name="submit" class="btn" type="submit">[Choose Method]</button>
    </form>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><p></p>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
