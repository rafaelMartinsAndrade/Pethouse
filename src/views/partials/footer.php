<div class="snackbars" id="form-output-global"></div>
	<script src="js/core.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/main.js"></script>
	<script>
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