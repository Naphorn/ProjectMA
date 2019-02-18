<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
    /* ------------------------------------------------------------------ */
    </style>

</head>
<body>
    <table>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td class="c" onclick="myFunction()">IE3415</td>
            <td class="f">IE3415</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td class="i">IE3415</td>
            <td class="l">IE3415</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" height="30px" class="o">IE3414</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" class="g">IE3413</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" class="m">IE3413</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" class="o">IE3412</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" class="o">IE3411</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" class="o">IE3410</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td colspan="2" class="o">IE3409</td>
        </tr>
        <tr>
            <td class="c">IE3402</td>
            <td class="f">IE3402</td>
            <td class="o">IE3403</td>
            <td class="k">IE3404</td>
            <td class="n">IE3404</td>
            <td class="k">IE3405</td>
            <td class="n">IE3405</td>
        </tr>
        <tr>
            <td class="a">IE3402</td>
            <td class="d">IE3402</td>
        </tr>
        <tr>
            <td class="a">IE3402</td>
            <td class="d">IE3402</td>

        </tr>
        <tr>
            <td class="i">IE3402</td>
            <td class="l">IE3402</td>
            <td></td>
            <td class="c">IE3406</td>
            <td class="f">IE3406</td>
            <td class="g">IE3407</td>
            <td class="g">IE3408</td>

        </tr>
        <tr>
            <td class="c">IE3401</td>
            <td class="f">IE3401</td>
            <td></td>
            <td class="i">IE3406</td>
            <td class="l">IE3406</td>
            <td class="m">IE3407</td>
            <td class="m">IE3408</td>
        </tr>
        <tr>
            <td class="a">IE3401</td>
            <td class="d">IE3401</td>
        </tr>
        <tr>
            <td class="a">IE3401</td>
            <td class="d">IE3401</td>

        </tr>
        <tr>
            <td class="i">IE3401</td>
            <td class="l">IE3401</td>

        </tr>
        <tr>
            <td class="c">IE2409</td>
            <td class="f">IE2409</td>
            <td></td>
            <td class="g">IE2408</td>
            <td class="g">IE2407</td>
            <td class="c">IE2406</td>
            <td class="f">IE2406</td>
            <td class="c">IE2405</td>
            <td class="f">IE2405</td>
            <td class="c">IE2404</td>
            <td class="b">IE2404</td>
            <td class="f">IE2404</td>
            <td class="c">IE2402</td>
            <td class="f">IE2402</td>
            <td class="c">IE2401</td>
            <td class="f">IE2401</td>

        </tr>
        <tr>
            <td class="i">IE2409</td>
            <td class="l">IE2409</td>
            <td></td>
            <td class="m">IE2408</td>
            <td class="m">IE2407</td>
            <td class="i">IE2406</td>
            <td class="l">IE2406</td>
            <td class="i">IE2405</td>
            <td class="l">IE2405</td>
            <td class="i">IE2404</td>
            <td class="l">IE2404</td>
            <td class="o">IE2403</td>
            <td class="i">IE2402</td>
            <td class="l">IE2402</td>
            <td class="i">IE2401</td>
            <td class="l">IE2401</td>
        </tr>
      </table>

    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>

</body>
</html>

