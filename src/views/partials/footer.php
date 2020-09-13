
    <div class="snackbars" id="form-output-global"></div>
    <script src="<?=$base?>/assets/js/core.min.js"></script>
    <script src="<?=$base?>/assets/js/script.js"></script>
    <script src="<?=$base?>/assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
	window.onload = menu();
	window.onload = ponto_juntos();
	document.onkeydown = fkey;

	var wasPressed = false;

	function fkey(e){
		e = e || window.event;
	   if( wasPressed ) return; 

		if (e.keyCode == 116) {
		window.location.reload()
		window.scrollTo(0, 0);
		wasPressed = true;
		}else{}
	 }
	</script>
  </body>
</html>