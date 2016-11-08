function run(){
for(i=1;i<total+1;i++){
	$.ajax('http://2016.techkriti.org/tosc/api/pay/check/?id='+i).success(function(d){
	console.log(d);
});
}
}
var total=5;
