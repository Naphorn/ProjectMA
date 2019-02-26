<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        html, body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
            font-size: 12px;
        }
        /* ------------------------------------------------------------------ */
        table {
            border-collapse: collapse;
        }
        td {
            text-align:  center;
            padding : 10px;
            height: 25px;
            cursor: pointer;
        }
        td::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }
        /* 1 */
        td.a {
            border-left: 5px solid black;
        }
        /* 2 */
        td.b {
            border-top: 5px solid black;
        }
        /* 3 */
        td.c {
            border-top: 5px solid black;
            border-left: 5px solid black;
        }
        /* 4 */
        td.d {
            border-right: 5px solid black;
        }
        /* 5 */
        td.e {
            border-right: 5px solid black;
            border-left: 5px solid black;
        }
        /* 6 */
        td.f {
            border-right: 5px solid black;
            border-top: 5px solid black;
        }
        /* 7 */
        td.g {
            border-left: 5px solid black;
            border-right: 5px solid black;
            border-top: 5px solid black;
        }
        /* 8 */
        td.h {
            border-bottom: 5px solid black;
        }
        /* 9 */
        td.i {
            border-left: 5px solid black;
            border-bottom: 5px solid black;
        }
        /* 10 */
        td.j {
            border-top: 5px solid black;
            border-bottom: 5px solid black;
        }
        /* 11 */
        td.k {
            border-top: 5px solid black;
            border-left: 5px solid black;
            border-bottom: 5px solid black;
        }
        /* 12 */
        td.l {
            border-right: 5px solid black;
            border-bottom: 5px solid black;
        }
        /* 13 */
        td.m {
            border-right: 5px solid black;
            border-left: 5px solid black;
            border-bottom: 5px solid black;
        }
        /* 14 */
        td.n {
            border-right: 5px solid black;
            border-top: 5px solid black;
            border-bottom: 5px solid black;
        }
        td.o {
            border-right: 5px solid black;
            border-left: 5px solid black;
            border-top: 5px solid black;
            border-bottom: 5px solid black;
        }
        /* ------------------------------------------------------------------ */
        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        /* The actual popup */
        .popup .popuptext {
            visibility: hidden;
            width: 160px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 8px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -80px;
        }
        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }
        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }
        @-webkit-keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity:1 ;}
        }
    </style>

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
                    }
                    reader.readAsText(fileUpload.files[0]);
                } else {
                    alert("This browser does not support HTML5.");
                }
            } else {
                alert("Please upload a valid CSV file.");
            }
        }

        function makeLine() {
            var line1 = ["line1","cd","ab","ef"];
            var line2 = "cd";
            var line4 = "cd";
            var line8 = "cd";

            var n = str1[0].localeCompare(str2);

            document.getElementById("demo").innerHTML = n;
        }
    </script>

    <input type="file" id="fileUpload" />
    <input type="button" id="upload" value="Upload" onclick="Upload()" />
    <hr />
    <div id="dvCSV">
    </div>

</body>
</html>
