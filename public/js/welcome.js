var str = "Airr Management  ",
     str1 = "ระบบริหารจัดการเครื่องปรับอากาศ ",
    i = 0,
    isTag,
    text,
    text1;

(function type() {
    text = str.slice(0, ++i);
    if (text === str) return;
    
    document.getElementById('typewriter').innerHTML = text;

    var char = text.slice(-1);
    if( char === '<' ) isTag = true;
    if( char === '>' ) isTag = false;

    if (isTag) return type();
    setTimeout(type, 150);
}());
(function type() {
    text1 = str1.slice(0, ++i);
    if (text1 === str1) return;
    
    document.getElementById('typewriter1').innerHTML = text1;

    var char = text1.slice(-1);
    if( char === '<' ) isTag = true;
    if( char === '>' ) isTag = false;

    if (isTag) return type();
    setTimeout(type, 150);
}());

