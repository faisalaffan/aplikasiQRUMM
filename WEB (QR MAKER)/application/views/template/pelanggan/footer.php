<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	$(document).ready(function () {
		$('.sidenav').sidenav();

		$(".dropdown-trigger").dropdown({
			inDuration: 150,
			outDuration: 150,
		});

		// $(document).click(function () {
		// 	$('.dropdown-trigger').close();
		// });

		$("#logoatas").click(function (event) {
			event.preventDefault();
			$('.navatas').sidenav('open');
		});

	});

</script>
</body>
</html>