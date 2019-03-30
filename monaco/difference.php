<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<style type="text/css" media="screen">
		html, body {
			padding:  0;
			margin:  0;
		}
	</style>
</head>
<body>


<div id="container" style="width:100vw;height:100vh;"></div>

<script type="text/javascript" src="https://unpkg.com/monaco-themes/dist/monaco-themes.js"></script>
<script src="MonacoEditor/monaco-editor/min/vs/loader.js"></script>


<script>

	require.config({ paths: { 'vs': 'MonacoEditor/monaco-editor/min/vs' }});
	require(['vs/editor/editor.main'], function() {

		var originalModel = monaco.editor.createModel("This line is removed on the right.\njust some text\nabcd\nefgh\nSome more text", "text/plain");
		var modifiedModel = monaco.editor.createModel("just some text\nabcz\nzzzzefgh\nSome more text.\nThis line is removed on the left.", "text/plain");

		var themeData = MonacoThemes.parseTmTheme(tmThemeString);
	    monaco.editor.defineTheme('monokai', themeData);
	    monaco.editor.setTheme('monokai');

		var diffEditor = monaco.editor.createDiffEditor(document.getElementById("container"), {
			// You can optionally disable the resizing
			enableSplitViewResizing: true
		});
		diffEditor.setModel({
			original: originalModel,
			modified: modifiedModel
		});

	});

</script>


</body>
</html>