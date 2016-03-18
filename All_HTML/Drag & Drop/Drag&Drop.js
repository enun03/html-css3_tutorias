function doFirst(){
	mypic = document.getElementById('trashPic');
	mipic.addEventListener("dragstart", startDrag, false);
	leftBox = document.getElementById('leftBox');
	leftBox.addEventListener("dragenter", function(e){e.preventDefault();}, false);
	leftBox.addEventListener("drageover", function(e){e.preventDefault();}, false);
	leftBox.addEventListener("drop", dropped, false);
}
function startDrag(e){
	var code = '<img id="trashPic" src="trash.jpg" width="100px" height="200px">';
	e.dataTransfer.setData('Text', code);
}
function dropped(e){
	e.preventDefault();
	leftBox.innerHTML = e.dataTransfer.getData('Text');
}
window.addEventListener("load", doFirst, false);