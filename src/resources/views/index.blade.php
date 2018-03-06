<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LiveTinker</title>
    <link rel="stylesheet" href="/vendor/live-tinker/css/app.css">
</head>
<body>
<div id="editor"></div>
<div id="extra">
    <div id="run">
        <div class="row">
            <button class="run-buttons" onclick="sendCode(editor.getValue())">Run</button>
        </div>
        <div class="row">
            <button class="run-buttons" onclick="sendCode(editor.getSelectedText())">Run selected</button>
        </div>
    </div>
    <br />
    <iframe name="Response" id="editor-result"></iframe>
</div>
<script src="/vendor/live-tinker/js/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/vendor/live-tinker/js/app.js" type="text/javascript" charset="utf-8"></script>
<script src="/vendor/live-tinker/js/ace/theme-monokai.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>