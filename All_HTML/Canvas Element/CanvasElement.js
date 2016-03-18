function doFirst(){
	var x = document.getElementById('canvas');
	canvas = x.getContext('2d');
	
	
}

window.addEventListener("load", doFirst, false);

/* This goes inside doFirst()
Images
var pic = new Image();
pic.src="cts.png";
pic.addEventListener("load", function (){canvas.drawImage(pic,0,0,x.width, x.height)},false)

Shadow
canvas.shadowOffsetX = 4;
canvas.shadowOffsetY = 4;
canvas.shadowBlur = 6;
canvas.shadowColor = 'rbga(0,0,255,.5)';
canvas.font = "bold 33px Tahoma";
canvas.textAlign = "end";
canvas.fillText("pjvbgbnmll54", 300, 100);
	
Draw Rectangle
canvas.fillStyle = 'blue';
canvas.strokeStyle = 'red';
canvas.strokeRect(10,10,100,200);
canvas.fillRect(10,10,100,200);
canvas.clearRect(20,20,50,90);

Gradient
var g = canvas.createLinearGradient(0,0,100,100);
g.addColorStop(.0, "green");
g.addColorStop(.5, "yellow");
g.addColorStop(1, "red");
canvas.fillStyle = g;
canvas.fillRect(0,0,100,100);

Animation
window.addEventListener("mousemove", handleMouseMove, false);
(The below function is called outside doFirst())
function handleMouseMove(e){
	canvas.clearRect(0,0,600,400);
	var xPos = e.clientX;
	var yPos = e.clientY;
	canvas.fillRect(xPos-50, yPos-50, 100,100)
}
*/	