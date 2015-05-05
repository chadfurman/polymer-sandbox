<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<!-- 1. Load platform support before any code that touches the DOM. -->
	<script src="bower_components/webcomponentsjs/webcomponents.js"></script>
	<link rel="import" href="bower_components/core-toolbar/core-toolbar.html">
	<link rel="import" href="bower_components/core-header-panel/core-header-panel.html">
	<link rel="import" href="bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
	<link rel="import" href="bower_components/core-drawer-panel/core-drawer-panel.html">
	<link rel="import" href="bower_components/core-menu/core-menu.html">
	<link rel="import" href="bower_components/paper-item/paper-item.html">
	<link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
	<link rel="import" href="elements/github-repo-card-grid.html">
	<link rel="stylesheet" href="style.css">

	<script>
		document.addEventListener('polymer-ready', function() {
			var navicon = document.getElementById('navicon');
			var drawerPanel = document.getElementById('drawerPanel');
			var menuLinks = drawerPanel.getElementsByTagName('paper-item')

			navicon.addEventListener('click', function() {
				drawerPanel.togglePanel();
			});

			for (var linkIndex = 0; linkIndex < menuLinks.length; linkIndex++)
			{
				var link = menuLinks[linkIndex];
				link.addEventListener('click', function(event) {
					document.getElementById('githubGrid').setAttribute('user', event.target.getAttribute('username'));
				});
			}

		});
	</script>

	<style>
		.opaque {
			background-color: rgba(255,255,255,1);
		}
	</style>
</head>
<body fullbleed vertical layout unresolved>
<core-drawer-panel id="drawerPanel" forceNarrow="true">
	<core-header-panel drawer mode="seamed" class="opaque">
		<core-toolbar>
			<span>Title</span>
		</core-toolbar>
		<core-menu class="opaque">
			<paper-item username="shadesoflight">Chad</paper-item>
			<paper-item username="nislowk">Karl</paper-item>
		</core-menu>
	</core-header-panel>
	<core-scroll-header-panel main mode="standard">
		<core-toolbar>
			<paper-icon-button id="navicon" icon="menu"></paper-icon-button>
			<span flex>Title</span>
		</core-toolbar>
		<github-repo-card-grid id="githubGrid" user="shadesoflight"></github-repo-card-grid>
	</core-scroll-header-panel>
</core-drawer-panel>
</body>
</html>
