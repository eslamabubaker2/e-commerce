$(window).on("load",function(){require.config({paths:{echarts:"../../../robust-assets/js/plugins/charts/echarts"}}),require(["echarts","echarts/chart/radar","echarts/chart/chord"],function(a){var b=a.init(document.getElementById("radar-multilevel-control"));chartOptions={tooltip:{trigger:"axis"},legend:{x:"left",data:["Figure I","Figure II","Figure III"]},polar:[{indicator:[{text:"Indicator 1"},{text:"Indicator 2"},{text:"Indicator 3"},{text:"Indicator 4"},{text:"Indicator 5"}],center:["50%",240],radius:150,startAngle:90,splitNumber:8,name:{formatter:"ã€{value}ã€‘",textStyle:{color:"red"}},scale:!0,type:"circle",axisLine:{show:!0,lineStyle:{color:"#99B898",width:2,type:"solid"}},axisLabel:{show:!0,textStyle:{color:"#ccc"}},splitArea:{show:!0,areaStyle:{color:["rgba(153,184,152,0.6)","rgba(255,132,124,0.6)"]}},splitLine:{show:!0,lineStyle:{width:2,color:"#FECEA8"}}}],calculable:!0,series:[{name:"Radar Chart",type:"radar",itemStyle:{emphasis:{lineStyle:{width:4}}},data:[{value:[100,8,.4,-80,2e3],name:"Figure I",symbol:"star5",symbolSize:4,itemStyle:{normal:{lineStyle:{type:"dashed"}}}},{value:[10,3,.2,-100,1e3],name:"Figure II",itemStyle:{normal:{areaStyle:{type:"default"}}}},{value:[20,3,.3,-13.5,3e3],name:"Figure III",symbol:"none",itemStyle:{normal:{lineStyle:{type:"dotted"}}}}]}]},b.setOption(chartOptions),$(function(){function a(){setTimeout(function(){b.resize()},200)}$(window).on("resize",a),$(".menu-toggle").on("click",a)})})});