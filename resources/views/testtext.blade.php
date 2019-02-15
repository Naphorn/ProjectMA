<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/testtext.css')}}">
</head>
<body>
    <script>

    a = 0;
    $.ajax({
        type: "POST",
        url: "testtext.blade.php",
        data:{ a }, 
        success: function(data){
            console.log(data); 
        }
    })
        var a=0;
        // document.cookie="a=0";
        var b=0;
        var c=1;
        var d=1;
        function toggleLine1() {
            document.getElementById("line1").;
        }
        function toggleLine2() {
            document.getElementById("line2").classList.toggle('active');
        
    </script>

    <table width=25% border="0" cellpadding="50" cellspacing="0">
        <?php
            $a = $_POST['a'];
            
            // echo "<script>document.writeln(a);</script>"; 
            // $a = $_COOKIE['a'];
            // echo $a;
            // $a = x;
            // $b = 0;
            // $c = 0;
            // $d = 0;
            // if(a==0&&b==0&&c==0&&d==0) 
            // {
            //     echo"<th id='line0'></th>";
            // }else
            // if($a==0&&$b==0&&$c==0&&$d==1) 
            // {
            //     echo"<th id='line1'></th>";
            // }else
            // if($a==0&&$b==0&&$c==1&&$d==0) 
            // {
            //     echo"<th id='line2'></th>";
            // }else
            // if($a==0&&$b==0&&$c==1&&$d==1) 
            // {
            //     echo"<th id='line3'></th>";
            // }else
            // if($a==0&&$b==1&&$c==0&&$d==0) 
            // {
            //     echo"<th id='line4'></th>";
            // }else
            // if($a==0&&$b==1&&$c==0&&$d==1) 
            // {
            //     echo"<th id='line5'></th>";
            // }else
            // if($a==0&&$b==1&&$c==1&&$d==0) 
            // {
            //     echo"<th id='line6'></th>";
            // }else
            // if($a==0&&$b==1&&$c==1&&$d==1) 
            // {
            //     echo"<th id='line7'></th>";
            // }else
            // if($a==1&&$b==0&&$c==0&&$d==0) 
            // {
            //     echo"<th id='line8'></th>";
            // }else
            // if($a==1&&$b==0&&$c==0&&$d==1) 
            // {
            //     echo"<th id='line9'></th>";
            // }else
            // if($a==1&&$b==0&&$c==1&&$d==0) 
            // {
            //     echo"<th id='line10'></th>";
            // }else
            // if($a==1&&$b==0&&$c==1&&$d==1) 
            // {
            //     echo"<th id='line11'></th>";
            // }else
            // if($a==1&&$b==1&&$c==0&&$d==0) 
            // {
            //     echo"<th id='line12'></th>";
            // }else
            // if($a==1&&$b==1&&$c==0&&$d==1) 
            // {
            //     echo"<th id='line13'></th>";
            // }else
            // if($a==1&&$b==1&&$c==1&&$d==0) 
            // {
            //     echo"<th id='line14'></th>";
            // }else
            // if($a==1&&$b==1&&$c==1&&$d==1) 
            // {
            //     echo"<th id='line15'></th>";
            // }
            // ?>
            <input type="button" name="test" id="test" value="RUN" /><br/>

    </table>

    <button type="button" class="toggle-btn" onclick="toggleLine1()">1</button>
    <button type="button" class="toggle-btn" onclick="toggleLine2()">2</button>
    <button type="button" class="toggle-btn" onclick="toggleLine3()">4</button>
    <button type="button" class="toggle-btn" onclick="toggleLine4()">8</button>

</body>
</html>

