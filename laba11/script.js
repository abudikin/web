var bg = new Image();
bg.src = "images/bg1.jpg";
var bear = [new Image()];
for(var i=0; i<10; i++)
{
    bear[i].src = "images/bear"+(i+1)+".png";
    bear.push(new Image());
}
var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");
cvs.width  = window.innerWidth;
cvs.height = window.innerHeight;

var posX = 0;
var points = 0;
var width = cvs.width;
var height = cvs.height;

class GameModel{
	constructor(width, height, r,speed){
		this.width = width;
		this.height = height;
		this.r = r;
		this.speed = speed;
		this.x = 0;
		this.y = Math.random()*(height-r*2)+r;
		this.dx = speed;
	}
	update(){
		this.x+=this.dx;
		ctx.drawImage(bg, posX, 0, cvs.width, cvs.height);
	}
	checkonclick(x,y){
		if(this.r>0){
			var inside = Math.sqrt((this.x-x)*(this.x-x) + (this.y-y)*(this.y-y))<=this.r;
			return inside;
		}
	}
}
var arr = [];
for(var i =0;i<10;i++){
	if (i<=5)
		arr.push(new GameModel(width,height,40,5));
	if(i>=5 && i<=8)
		arr.push(new GameModel(width,height,25,10));
	if(i>=9 && i<=10)
		arr.push(new GameModel(width,height,10,20));
}
var i=0;
function Render(){
	arr.forEach(function(arr){
		arr.update();
	});

	ctx.clearRect(0,0,cvs.width,cvs.height);
	
	arr.forEach(function(arr){
		ctx.fillStyle = "transparent";
		ctx.beginPath();

		i++;
		if(i==4){
			i=0;
		}
		ctx.drawImage(bear[i], arr.x-arr.r-50, arr.y-arr.r-60, arr.r*6, arr.r*3);
		ctx.fill();
	});
}
setInterval(Render, 70);

cvs.onclick=function(event){
	var x = event.clientX;
	var y = event.clientY;

	arr.forEach(function(arr,index, array){
		if (arr.checkonclick(x,y)){
			array[index] = new GameModel(width,height,0,0);

			if (arr.r == 40){
				points += 10;
			}
			if (arr.r == 25){
				points += 20;
			}
			if (arr.r == 10){
				points += 30;
			}
		}
	});
	if(points==170){
		alert("Вы выиграли!!!");
		location.reload()
	}
}
function stop(){
	if(points!=170){
		alert("Время закончилось.Ваши баллы:" + points);
		location.reload()
	}
	else{1+1}
}
setTimeout(stop, 7500);