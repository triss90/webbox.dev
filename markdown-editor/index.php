<?php
    $pageName = "Markdown Editor";
    $pageDescription = "Compile and edit markdown. See both HTML and rendered view";
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>Markdown Editor</h1>
        <h5>Compile and edit markdown. See both HTML and rendered view</h5>
        <br>

        <section class="markdown-editor full">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4>Markdown</h4>
                    <textarea class="markdown" id="markdown" placeholder="#This is Markdown" autofocus></textarea>
                </div>
                <div class="col-12 col-md-6">
                    <h4>HTML</h4>
                    <pre class="html"><code id="html"></code></pre>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Output</h4>
                    <div class="output" id="output"></div>
                </div>
            </div>
        </section>

  	</div>

<?php include('../_inc/scripts.php'); ?>

<script src="showdown.min.js"></script>
<script src="highlight.pack.js"></script>
<script src="indent.min.js"></script> <!--https://github.com/zebzhao/indent.js-->
<script>

    // Compile Markdown
    function compileMarkdown() {
        var text = document.getElementById('markdown').value,
            target = document.getElementById('output'),
            converter = new showdown.Converter(),
            html = converter.makeHtml(text);
        target.innerHTML = html;
    }

    // Encode HTML
    function htmlEncode (html) {
        html = $.trim(html);
        return html.replace(/[&"'\<\>]/g, function(c) {
            switch (c) {
                case "&":
                    return "&amp;";
                case "'":
                    return "&#39;";
                case '"':
                    return "&quot;";
                case "<":
                    return "&lt;";
                default:
                    return "&gt;";
            }
        });
    };

    // Initialize editor
    compileMarkdown();
    $('#html').html(htmlEncode($('#output').html()));
    var indented = indent.html($('#html').text(), {tabString: '  '});
    $('#html').html(htmlEncode(indented));

    // Reformat and compile when typing
    var input = document.getElementById('markdown');
    input.addEventListener('keyup', function() {
        compileMarkdown();
        $('#html').html(htmlEncode($('#output').html()));
        var indented = indent.html($('#html').text(), {tabString: '  '});
        $('#html').html(htmlEncode(indented));
        hljs.initHighlighting();
        $('pre code').each(function(i, block) {
            hljs.highlightBlock(block);
        });
    });

</script>
<?php include('../_inc/footer.php'); ?>


