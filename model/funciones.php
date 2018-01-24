
<script>  $(document).ready(function() {
    $('select').material_select();
  });
         </script>
         <script>
         
  $('select').material_select('destroy');</script>
<script> $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, 
      hover: true, 
      gutter: 0,
      belowOrigin: false, 
      alignment: 'left', 
      stopPropagation: false
    }
  );
    </script>
    <script> $('.dropdown-button').dropdown('open');
        </script>
        <script> $('.dropdown-button').dropdown('close');
        </script>
<script>$(".button-collapse").sideNav();</script>
<script> $(document).ready(function(){
      $('.carousel').carousel();
    });
        </script>
        <script>
        $('.modal').modal({
            dismissible: true, 
            opacity: .5, 
            inDuration: 300, 
            outDuration: 200, 
            startingTop: '4%',
            endingTop: '10%', 
            ready: function(modal, trigger) { 
              alert("Ready");
              console.log(modal, trigger);
            },
            complete: function() { alert('Closed'); } 
          }
        );
        </script>
     <script>
$(window).load(function() {
	$('#preloader').fadeOut('slow');
	$('body').css({'overflow':'visible'});
})
</script>