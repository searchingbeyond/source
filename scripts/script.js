window.onload=function(){ 
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange =function(){ 
        if(xhr.readyState == 4){ 
            var source = JSON.parse(xhr.responseText); 
            var str = ""; 
            for( var k in source ){ 
                str += "<div><h1>" + k + "</h1><ol>";
                for( var j in source[k]){
                    str += "<li><a href='" + j + "'><img src='./images/" + source[k][j] + ".jpg' /></a></li>"; 
                }
                str += "</ol></div>";
            }
            var body = document.getElementsByTagName("body")[0]; 
            body.innerHTML = str;
        } 
    } 
    xhr.open("GET","data.php",true); 
    xhr.send(); 
}
