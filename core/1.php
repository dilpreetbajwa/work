


<!DOCTYPE html>
<html >
<head></head>
<body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
 <script>
  $(document).ready(function () {
    $('#someTextBox').keyup(function(){
      $('#target').html($(this).val());
    });
  });
</script>
<textarea id="someTextBox"></textarea>
<div id="target"> </div>

</body>
</html>