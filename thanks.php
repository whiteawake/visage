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
      <span class="name">Thanks</span>
    </div>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
