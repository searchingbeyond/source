window.onload=function(){ 
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange =function(){ 
        if(xhr.readyState == 4){ 
            var source = JSON.parse(xhr.responseText); 
            var str = ""; 
            for( var k in source ){ 
//                str += "<li><a href='" + k + "'>" + source[k] + "</a></li>"; 
                str += "<li><a href='" + k + "'><img src='./images/" + source[k] + ".jpg' /></a></li>"; 
            }
            var body = document.getElementsByTagName("body")[0]; 
            body.style.margin = "20% 40%"; 
            body.innerHTML = "<ol>" + str + "</ol>"; 
        } 
    } 
    xhr.open("GET","data.php",true); 
    xhr.send(); 
}
