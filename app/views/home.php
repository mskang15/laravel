<!doctype html>
<html>
	<head>
		<title></title>
	</head>
<body>
	<script src="http://code.jquery.com/jquery-2.0.3.js"></script>
	<script src="http://underscorejs.org/underscore.js"></script>
	<script src="http://backbonejs.org/backbone.js"></script>
	<script src="js/main.js"></script>
	<script src="js/models.js"></script>
	<script src="js/collections.js"></script>
	<script src="js/views.js"></script>
	<script src="js/router.js"></script>
	
	<script>
		new App.Router;
		Backbone.history.start();

		App.contacts = new App.Collections.Contacts;
		App.contacts.fetch().then(function() {
			new App.Views.App({ collection: App.contacts});
		});
	</script>
</body>
</html>