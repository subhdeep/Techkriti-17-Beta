'use strict';

var bottomGraph = document.getElementById('bottomGraph');
var toggleAnimationsButton = document.getElementById('togglebtn');
var lines = [];

var animations = window.localStorage.getItem('animations') != 'false' ;
var showAnimations = true;

var mobile=navigator.userAgent.search('Android')>-1|| navigator.userAgent.search('Mobile')>-1;
if( (!animations) || mobile){
  showAnimations = false;
}

function updateToggleAnimationButton(){
  animations = window.localStorage.getItem('animations') != 'false' ;
  if(animations){
    toggleAnimationsButton.setAttribute('data-animations','true');
    toggleAnimationsButton.innerHTML = 'Turn off animations';
  }else{
    toggleAnimationsButton.setAttribute('data-animations','false');
    toggleAnimationsButton.innerHTML = 'Turn on animations';
  }
}
updateToggleAnimationButton();

function Line(width,spacing, atPosition, height){
  this.height = height || 10;
  this.width = width;
  this.atPosition = atPosition;
  this.spacing = spacing;
  this.left = ( spacing + this.width ) * atPosition ;
  this.element = document.createElement("div");
  this.element.setAttribute('class','frequency');
  this.apply();
}
Line.prototype.setHeight = function(height){
  this.height = height;
};

Line.prototype.setSpacing = function(spacing){
  this.spacing = spacing;
}

Line.prototype.apply = function(){
  this.left = ( this.spacing + this.width ) * this.atPosition ;
  this.element.style.width = this.width + 'px';
  this.element.style.height = this.height + 'px';
  this.element.style.left = this.left + 'px';
}

function getAmplitude(numberOfLines, shift,position){
  var x = 0.1 * Math.abs(shift - position);
  var zeroPoint = Math.max(shift, Math.abs(numberOfLines - shift) );
  var a =  0.2 * Math.exp( - (x * x)) ;
  // var a = Math.cos(Math.PI /180 * 180 * ( position - zeroPoint) / numberOfLines );
  return a;
}
var graphWidth = 0;
var numberOfLines = 0;
var spacing = 2;
var width = 1;
var maxLineHeight = 80;
var amplitude_should_be_full_height = true;
var moveCursorEnabled = false;

function updateOnSizeChange(){
  graphWidth = window.innerWidth;
}

function init(){
  if(!showAnimations){
    return;
  }
  updateOnSizeChange();
  console.log(graphWidth);
  bottomGraph.style.width = graphWidth + 'px';
  // graphWidth = 4 * parseInt( bottomGraph.offsetWidth / 4 );
  bottomGraph.innerHTML = '';
  lines = [];
  numberOfLines = graphWidth / (spacing + width);
  var shift = numberOfLines / 2;
  var maxAmplitude = getAmplitude(numberOfLines, shift, shift);
  var line;
  for(var i = 0; i < numberOfLines; i++){
    // console.log(getAmplitude(numberOfLines, 3, i));
    if(!amplitude_should_be_full_height){
      line = new Line(width, spacing, i, 1+getAmplitude(numberOfLines, shift, i)/ maxAmplitude * maxLineHeight );
    }else{
      line = new Line(width, spacing, i, window.innerHeight);
    }
    bottomGraph.appendChild(line.element);
    lines.push(line);
  }
}

window.addEventListener('resize',init);
window.addEventListener('load', function(){
  init();
  setTimeout(function(){
    amplitude_should_be_full_height = false;
    cursorMoved({clientX:window.innerWidth/2, clientY:0}, true);
    setTimeout(function(){
      bottomGraph.setAttribute('class','bottom-graph');
      setTimeout(function(){
        moveCursorEnabled = true;
      },450);
    },300);
  },300);
});
// init();

function cursorMoved(e, forcefully){
  if(!showAnimations){
    return;
  }
  if(!moveCursorEnabled){
    if(forcefully != true){
      return;
    }
  }
  spacing = 2;
  var x = e.clientX;
  var t, line ;
  var aroundSpace = (window.innerWidth - graphWidth) / 2;
  var y = e.clientY;
  var cursorHeightRatio = (window.innerHeight - y ) / window.innerHeight ;
  maxLineHeight  = 200  * Math.exp(cursorHeightRatio) / Math.exp(1) ;
  if(maxLineHeight > window.innerHeight - y ){
    maxLineHeight = window.innerHeight - y;
  }
  if(maxLineHeight < 50){
    maxLineHeight = 50;
  }

  var shift = 0;
  if(x < aroundSpace ){
    shift = 0;
  }else{
    if(x >  aroundSpace + graphWidth ){
      shift = numberOfLines;
    }else{
      shift = ( x - aroundSpace ) / (spacing + width);
    }
  }


  var maxAmplitude = getAmplitude(numberOfLines, shift, shift);
  console.log(numberOfLines);

  for(var i=0;i < numberOfLines; i++){
    line = lines[i];
    line.setSpacing(spacing);
    line.setHeight(1+getAmplitude(numberOfLines, shift, i) / maxAmplitude * maxLineHeight);
    line.apply();
  }
}


function toggleAnimations(){
  bottomGraph.innerHTML = '';
  // animations = window.localStorage.getItem('animations') != 'false';
  if(window.localStorage.getItem('animations') == 'false'){
    window.localStorage.setItem('animations','true');
  }else{
    window.localStorage.setItem('animations','false');
  }
  updateToggleAnimationButton();

  if( (!animations) || mobile){
    showAnimations = false;
  }else{
    showAnimations = true;
  }
  init();	
}
