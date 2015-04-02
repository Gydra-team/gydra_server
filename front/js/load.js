function load(){//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// загрузка с сервера данных по по датчикам
$.ajax({

  type: 'POST',
  url: 'sborka.php',
 
success: function(data) {
 
if(data!="null"){

var garbage_ar = data.split("$~*~$");
 

for(i=0;i<garbage_ar.length;i++){
obj.ar[i]={};
obj.ar[i]= JSON.parse(garbage_ar[i]);
// alert( garbage_ar[i] );
}//end for 
 
//construct();
draw_chart(); 

hand_statistic(); // статистика по текущей температуре
} //if успешно загружено if
 
}//sucess end
});


}// end load ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
function construct(){
var str = "<table border='1'>";
str+= "<tr>"
str+="<td>index</td>"  //1
str+="<td>ID device</td>" //2 
str+="<td>time_server</td>" //3
str+="<td>time_device</td>" //4
str+="<td>t1</td>" //5
str+="<td>t2</td>" //6
str+="<td>m1</td>" //7
str+="<td>s1</td>" //8
str+="<td>f1</td>" 
str+="<td>ph1</td>"
str+="</tr>";
 
for(var i=obj.ar.length-1; i>=0;i--){
str+= "<tr>";
str+="<td>"+i+"</td>"; //index 1
str+="<td>"+obj.ar[i].id+"</td>"; //id 2
str+="<td>"+obj.ar[i].data+"</td>"; //server time 3
str+="<td>"+obj.ar[i].times+"</td>"; //times 4
str+="<td>"+obj.ar[i].t1+"</td>"; //t1 5
str+="<td>"+obj.ar[i].t2+"</td>"; //t2 6
str+="<td>"+obj.ar[i].m1+"</td>"; //m1 7
str+="<td>"+obj.ar[i].s1+"</td>"; //s1 8
str+="<td>"+obj.ar[i].f1+"</td>"; //f1
str+="<td>"+obj.ar[i].ph1+"</td>"; //ph1

str+= "</tr>";
}//end for


str+="</table >";
d("ground").innerHTML+=str;
}//end construct

*/

 

var graf = {};
graf.ar_date = [];
graf.ar_t1 = [];
graf.ar_t2 = [];
graf.ar_s1 = [];
graf.ar_f1 = [];
graf.ar_ph1 = [];
graf.ar_m1 = [];
function pre_complite(){ // формирование массивов для отображения в диаграмме


for(var i=obj.ar.length-1; i>=0;i--){
graf.ar_date[i] =  obj.ar[i].data;
graf.ar_t1[i] =  Number(obj.ar[i].t1);
graf.ar_t2[i] =  Number(obj.ar[i].t2);
graf.ar_s1[i] =   Number(obj.ar[i].s1);
graf.ar_ph1[i] =   Number(obj.ar[i].ph1);
graf.ar_f1[i] =   Number(obj.ar[i].f1);


}//glob for

 


}//end pre__commplite


 


function draw_chart(){

pre_complite();
 
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Показатели установки 15',
            x: -20 //center
        },
     
        xAxis: {
            categories: graf.ar_date
        },
        yAxis: {
            title: {
                text: 'Показатели'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            shared: true,
                crosshairs: true
        },
     
        series: [{
            name: 'Температура 1 ',
            data: graf.ar_t1 
        }, {
                    name: 'Температура 2 ',
            data: graf.ar_t2 
        }, {
            name: 'Влажность',
            data: graf.ar_f1
        }, {
            name: 'Кислотность',
            data:  graf.ar_ph1
        }, {
            name: 'Освещение',
            data:  graf.ar_s1
        }]
    });
});

}//end draw charts 
