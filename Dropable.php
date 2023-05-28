

<title>Drag & Drop</title>

<link rel= "stylesheet" href = "./css/bootstrap.css">

<link rel = "stylesheet" href="./jquery-ui.css">

  <style>
      #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
      #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }

      #draggableInputBox{
        width: 300px;
        height: 70px;
        padding: 0.5em;
        float: left;
        margin: 19px;
        border: 1px outset red;
        /* background-color: lightblue;   */
      }
      #droppableInputBox { width: 400px; height: 300px; padding: 0.5em; float: left; margin: 10px; }

      
      #draggableCheckBox{
        width: 300px;
        height: 70px;
        padding: 0.5em;
        float: left;
        margin: 19px;
        border: 1px outset red;
        /* background-color: lightblue;   */
      }
 
      #draggableBtn{
        width: 300px;
        height: 70px;
        padding: 0.5em;
        float: left;
        margin: 19px;
        border: 1px outset red;
        /* background-color: lightblue;   */
      }
      

  </style>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->

<script src="./jquery-3.7.0.js"></script>
<script src="./jquery-ui.js"></script>

<script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
           .find( "p" )
            .html( "Dropped!" );
      }
    });


    $( "#draggableInputBox" ).draggable();
    $( "#droppableInputBox" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
           .find( "p" )
            .html( "Dropped txtbox!" );
      }
    });

    $( "#draggableCheckBox" ).draggable();
    $( "#draggableBtn" ).draggable();

  } );


  </script>

</head>

<body>

<div id="draggable" class="ui-widget-content">
  <p>Drag me to my target</p>
</div>
<div id="droppable" class="ui-widget-header">
  <p>Drop here</p>
</div>



<div id="draggableInputBox" class="col-md-6 ui-widget-content">
    <table id="txtbox">
        <tr>
            <td> <label for="email">TextBox</label> </td>
            <td> <input type="email" class="form-control" id="txtinputbox"> </td>
        </tr>
    </table>

</div>
<!-- <div id="droppableInputBox" class="ui-widget-header">
  <p>Drop textbox here</p>
</div> -->


<div id="draggableCheckBox" class="ui-widget-content">
    <table id="txtchkbox">
        <tr>
            <td> <label>CheckBox</label> </td>
            <td> <input type="checkbox"> </td>
        </tr>
    </table>

</div>


<div id="draggableBtn" class="ui-widget-content">
    <table id="txtbtn">
        <tr>
            <td> </td>
            <td> <button type="submit" class="btn btn-success">Submit</button> </td>
        </tr>
    </table>

</div>

<div id="droppableInputBox" class="ui-widget-header">
  <p>Drop Form Elements here</p>
</div>



<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</body>

</html>


