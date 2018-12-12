var canvasBlock = document.getElementsByClassName('canvas_block')[0];
var canvas = document.getElementById('cl');
var canvas2 = document.getElementById('cl2');
var ctx = canvas.getContext('2d');
var ctx2 = canvas2.getContext('2d');
var resizeCanvas = function () {

    canvas.style.width = canvasBlock.offsetWidth + 'px';
    canvas2.style.width = canvasBlock.offsetWidth + 'px';
    canvas.width = canvasBlock.offsetWidth;
    canvas2.width = canvasBlock.offsetWidth;
    //console.log(canvas.style.width);
    ctx.beginPath();
    ctx.moveTo(canvas.width, 200);
    ctx.lineTo(canvas.width, 0);
    ctx.lineTo(0, 0);
    ctx.lineTo(0, 100);
    ctx.bezierCurveTo(100, 100, canvas.width * 0.3, 300, canvas.width * 0.6, 150);
    ctx.bezierCurveTo(canvas.width * 0.8,50, canvas.width * 0.9, 250, canvas.width, 50);
    var gradient = ctx.createLinearGradient(0, 0, canvas.width, 300);
    gradient.addColorStop(0, "blue");
    gradient.addColorStop(1, "white");
    ctx.fillStyle = gradient;
    ctx.strokeStyle = gradient;
    ctx.fill();
    ctx.stroke();

    ctx2.beginPath();
    ctx2.moveTo(0, 200);
    ctx2.lineTo(0, 300);
    ctx2.lineTo(canvas2.width, 300);
    ctx2.lineTo(canvas2.width, 150);
    ctx2.bezierCurveTo(canvas2.width * 0.9, 50, canvas2.width * 0.8, 200, canvas2.width * 0.6, 150);
    ctx2.bezierCurveTo(canvas2.width * 0.3, 50, canvas2.width * 0.3, 250, 0, 250);
    var gradient2 = ctx2.createLinearGradient(0, 0, canvas.width, 300);
    gradient2.addColorStop(0, "white");
    gradient2.addColorStop(1, "#FFB664");
    ctx2.strokeStyle = gradient2;
    ctx2.fillStyle = gradient2;
    ctx2.fill();
    ctx2.stroke();
};
resizeCanvas();

var canvasBlock2 = document.getElementsByClassName('canvas_block2')[0];
console.log(canvasBlock2);

var _canvas = document.getElementById('cl_canvas_block2');
var _ctx = _canvas.getContext('2d');

var resizeCanvas2 = function (){
    _canvas.style.width = canvasBlock2.offsetWidth + 'px';
    _canvas.style.height = canvasBlock2.offsetHeight + 'px';
    _canvas.width = canvasBlock2.offsetWidth;
    _canvas.height = canvasBlock2.offsetHeight*0.6;
    _ctx.beginPath();
    _ctx.moveTo(0, 50);
    _ctx.lineTo(0, _canvas.height);
    _ctx.lineTo(_canvas.width, _canvas.height);
    _ctx.lineTo(_canvas.width, 40);
    _ctx.bezierCurveTo(_canvas.width * 0.75, _canvas.height*1.25, _canvas.width * 0.6, 50, _canvas.width * 0.35, 50);
    _ctx.bezierCurveTo(_canvas.width * 0.2, 50, _canvas.width * 0.15, 150, 0, 50);
    _ctx.fillStyle = "white";
    _ctx.strokeStyle = "white";
    _ctx.fill();
    _ctx.stroke();
};
resizeCanvas2();

window.addEventListener('resize', resizeCanvas);
window.addEventListener('resize', resizeCanvas2);