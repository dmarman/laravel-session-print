<style>
    pre {
        padding: 5px;
        margin: 5px;
        background-color: white;
        line-height: 1;
        font-size:12px;
    }
    .string {
        color: #c41a16;
    }
    .number {
        color: #1c00cf;
    }
    .boolean {
        color: #aa0d91;
    }
    .null {
        color: #808080;
    }
    .key {
        color: #962f9e;
    }
</style>

<script>
    var mode = "DOM"; // Option: "CONSOLE" for outputting in the console; "HIDDEN" for accessing it via var session

    var data = <?php echo json_encode(session()->all());?>;

    if (mode == "DOM") {
        document.body.appendChild(document.createElement('pre')).innerHTML = syntaxHighlight(JSON.stringify(data, undefined, 2));
    }
    if (mode == "CONSOLE") {
        console.log(JSON.stringify(data, undefined, 2));
        console.log('sessionPrinter is ON! Remember to switch it off in production mode!');
    }
    if (mode == "HIDDEN") {
        var session = JSON.stringify(data, undefined, 2);
        console.log('sessionPrinter is ON! Remember to switch it off in production mode!');
    }

    function syntaxHighlight(json) {
        json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
        return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
            var cls = 'number';
            if (/^"/.test(match)) {
                if (/:$/.test(match)) {
                    cls = 'key';
                } else {
                    cls = 'string';
                }
            } else if (/true|false/.test(match)) {
                cls = 'boolean';
            } else if (/null/.test(match)) {
                cls = 'null';
            }
            return '<span class="' + cls + '">' + match + '</span>';
        });
    }
</script>
