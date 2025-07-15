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
      <span class="name">VISAGE | STAFF</span>
    </div>
    <form method="post" action="staff_engine.php">
      <div class="label">To Name</div>
      <input type="text" class="namein" name="name_to"/>
      <div class="label">To Email</div>
      <input type="email" class="emailin" name="email_to"/>
      <div class="label">From Name</div>
      <input type="text" class="namein2" name="name_from"/>
      <div class="label">From Email</div>
      <input type="text" class="emailin2" name="email_from"/>
      <div class="label">Position</div>
      <input type="text" class="posin" name="pos"/>
      <div class="label">BCC</div>
      <input type="text" class="bcc" name="bcc"/>
      <div class="label">Subject</div>
      <input type="text" class="subjectin" name="subject"/>
      <div class="label">Message</div>
      <input type="text" class="message" name="message"/><br /><br />
        <div class="output">
          <span class="name">Send to <span class="nameout">_</span></span>
          <span class="age">at <span class="emailout">_</span>.</span>
        </div>
        <div class="output">
          <span class="name">From <span class="nameout2">_</span></span>
          <span class="age">at <span class="emailout2">_</span>@REDACTED.wa.edu.au.</span>
        </div>
        <div class="output">
          <span class="name">Position: <span class="posout">_</span></span>
        </div>
        <div class="output">
          <span class="name">Subject: <span class="subjectout">_</span></span>
        </div>
        <div class="output">
          <span class="age">Message: <span class="messageout">_</span></span>
        </div>
        <div class="output">
          <span class="bcc">BCC: <span class="bcc_out">_</span></span>
        </div>
        <button name="submit" class="btn" type="submit">[Send Mail]</button>
    </form>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><p></p>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
