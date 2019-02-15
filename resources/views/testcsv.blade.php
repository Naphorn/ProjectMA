<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/testtext.css')}}">
</head>
<body>

        <script type="text/javascript">
            function Upload() {
                var fileUpload = document.getElementById("fileUpload");
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
                if (regex.test(fileUpload.value.toLowerCase())) {
                    if (typeof (FileReader) != "undefined") {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var table = document.createElement("table");
                            var rows = e.target.result.split("\n");
                            for (var i = 0; i < rows.length; i++) {
                                var cells = rows[i].split(",");
                                if (cells.length > 1) {
                                    var row = table.insertRow(-1);
                                    for (var j = 0; j < cells.length; j++) {
                                        var cell = row.insertCell(-1);
                                        cell.innerHTML = cells[j];
                                    }
                                }
                            }
                            var dvCSV = document.getElementById("dvCSV");
                            dvCSV.innerHTML = "";
                            dvCSV.appendChild(table);
                            this.parentNode.setAttribute(`class`, `active`);
                        }
                        reader.readAsText(fileUpload.files[0]);
                    } else {
                        alert("This browser does not support HTML5.");
                    }
                } else {
                    alert("Please upload a valid CSV file.");
                }
            }
        </script>
        <input type="file" id="fileUpload" />
        <input type="button" id="upload" value="Upload" onclick="Upload()" />
        <hr />
        <div id="dvCSV">
        </div>
</body>
</html>