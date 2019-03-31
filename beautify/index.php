<?php
    $pageName = "Code Beautifier";
?>
<?php include('../_inc/header.php'); ?>
<head>
    <meta charset="utf-8">
    <title>CodeMirror: Formatting Demo</title>
    <link rel="stylesheet" href="codemirror.css">
    <script src="codemirror.js"></script>
    <script src="formatting.js"></script>
    <script src="css.js"></script>
    <script src="xml.js"></script>
    <script src="javascript.js"></script>
    <script src="htmlmixed.js"></script>

    <style type="text/css">
        .CodeMirror {
            border: 1px solid #eee;
            background: #eee;
        }
        td {
            padding-right: 20px;
        }
    </style>
<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>Beautify Code</h1><br>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="custom-select" id="code-select">
                            <option selected value="htmlmixed">HTML</option>
                            <option value="javascript">Javascript</option>
                            <option value="css">CSS</option>
                        </select>
                    </div>
                </div>
            </div>

	  		<div class="row">
				<div class="col">
                    <form><textarea id="code" name="code" autofocus></textarea></form>
			    </div>
			</div>

            <div class="row">

                <div class="col">
                    <a class="btn btn-primary" href="javascript:autoFormatSelection()" style="margin-top:15px;">Format Code</a>
                </div>

            </div>

        </div>

  	</div>

<?php include('../_inc/scripts.php'); ?>

<script>
    var codeFormat = $('#code-select');

    codeFormat.change(function(){
        editor.setOption("mode", $(this).val() );
        console.log($(this).val());
    });

    editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        mode: 'htmlmixed'
    });

    function getSelectedRange() {
        CodeMirror.commands["selectAll"](editor);
        return { from: editor.getCursor(true), to: editor.getCursor(false) };
    }
    function autoFormatSelection() {
        var range = getSelectedRange();
        editor.autoFormatRange(range.from, range.to);
    }
</script>

<?php include('../_inc/footer.php'); ?>


