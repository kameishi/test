function abc(r,en=3.14){
    return r*r*en;
}
document.write(abc(5)+"<br>");
document.write(abc(7)+"<br>");
document.write(abc(10)+"<br>");

function xyz(adult,child){
    return ((adult*500)+(child*200))+"円です。";
}
document.write("Aグループの合計金額は"+xyz(2,1)+"<br>");
document.write("Bグループの合計金額は"+xyz(1,5)+"<br>");
document.write("Cグループの合計金額は"+xyz(3,7)+"<br>");