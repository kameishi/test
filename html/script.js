for(var a=1;a<=5;a++){
    for(var a1=1;a1<=5;a1++){
        document.write("★");
    }document.write("<br>");
}

document.write("<br>");


for(var b=1;b<=25;b++){
    if(b%2==0){
        document.write("☆");
    }else{
        document.write("★");
    }
    if(b%5==0){
        document.write("<br>");
    }
}

document.write("<br>");

for(var c=1;c<=5;c++){
    for(var c1=1;c1<=5;c1++){
        if(c1==c){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br>");

for(var d=1;d<=5;d++){
    for(var d1=1;d1<=d;d1++){
        document.write("★");
    }document.write("<br>");
}

document.write("<br>");

for(var e=1;e<=5;e++){
    for(var e1=1;e1<=e;e1++){
        if(e1==e){
            document.write("☆");
        }else{
            document.write("★");
        }
    }document.write("<br>");
}