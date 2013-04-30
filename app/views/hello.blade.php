<!doctype html>
<html>

<head>
	<title>Sample ToDo App</title>
</head>

<body>

<h1>Hello from the sample ToDo App</h1>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://underscorejs.org/underscore.js"></script>
<script src="http://backbonejs.org/backbone.js"></script>

<script>
	(function() {
		window.App = {
			Models: {},
			Views: {},
			Collections: {}	
		};

		// Model
		App.Models.Task = Backbone.Model.extend({
			defaults: {
				title: '',
				completed: 0,
				id: ''
			},

			urlRoot: 'tasks'	
		});	
	})();	
</script>

</body>

</html>