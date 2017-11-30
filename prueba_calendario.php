<!DOCTYPE html>
<html>
<head>
    <link href="styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <input type="text" id="mydate" gldp-id="mydate" />
    <div gldp-el="mydate"
         style="width:400px; height:300px; position:absolute; top:70px; left:100px;">
    </div>

       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/glDatePicker.min.js"></script>

    <script type="text/javascript">
        $(window).load(function()
        {
            $('input').glDatePicker();
           
        });
        var example5 = $('#mydate').glDatePicker(
	{
		showAlways: true
	}).glDatePicker(true);
    </script>
</body>
</html>