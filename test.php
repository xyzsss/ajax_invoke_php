<!-- 2017-9-26 20:01:03 -->
<script src="jquery-3.2.1.js" type="text/javascript"></script>
<body>
   <h2>This page is demo for ajax usage </h2> 
   <button id="jquery_id" type="button">Click me Please !</button>

<script type="text/javascript">
  $(document).ready(function(){
    $("#jquery_id").click(function(){
      alert("Thanks for your clicking！");
      $.post("ajax_fun.php", function(data){
         alert("What you got: " + data);
       });
      });
    });
    
  alert('When you opened the page,I will come for you.');
</script>

</body>
