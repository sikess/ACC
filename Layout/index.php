<?php 
include("head.php");
?>
 <div class="row">
    <div class="medium-4 small-4 columns reset">
      <div class="etiqueta">
         PRODUCTOS
       </div>
    </div>
		
	<?php 
		include("search.php");
	 ?>

   
   </div>
</div>

<?php 
include("loop.php");
include("news_sugeridas.php");
include("paginador.php");
include("footer.php");
include("modales.php");

 ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>


<?php 

?>


  </body>
</html>


