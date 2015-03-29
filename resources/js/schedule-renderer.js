			function fillRectangle(context, offsetX, offsetY, sizeX, sizeY, color){
				context.beginPath();
				context.rect(offsetX, offsetY, sizeX, sizeY);
				context.fillStyle=color;
				context.fill();
				context.closePath();
			}
			
			function drawLine(context, beginX, beginY, endX, endY, color, width){
				context.beginPath();
				context.moveTo(beginX, beginY);
				context.lineTo(endX, endY);
				context.strokeStyle=color;
				context.lineWidth=width;
				context.stroke();
				context.closePath();
			}
			
			function drawText(context, beginX, beginY, text, style, color){
				context.beginPath();
				context.font=style;
				context.fillStyle=color;
				context.fillText(text,beginX, beginY);
				context.closePath();
			}
			
			function drawTextCentered(context, beginX, beginY, sizeX, sizeY, text, size, font, color){
				context.beginPath();
				context.font=size + "px " + font;
				context.fillStyle=color;
				context.fillText(text, beginX + (sizeX/2 - context.measureText(text).width/2), beginY + (sizeY/2) + (size/2));
				context.closePath();
			}
			
			function drawSchedTop(context, colWidth, rowHeight, day, time){
				var minutes = time%1.0;
				var hours = Math.floor(time);
				var offsetX = colWidth*(day+1);
				var offsetY = rowHeight*(hours+1);
				var top = offsetY;
				if(minutes==0.0){
					context.moveTo(offsetX, offsetY);
					context.lineTo(offsetX+colWidth, offsetY);
				}
				else if(minutes<=0.25){
					context.moveTo(offsetX, offsetY);
					context.lineTo(offsetX+(colWidth/2), offsetY+(rowHeight/2));
					context.lineTo(offsetX+colWidth, offsetY);
				}
				else if(minutes<=0.5){
					context.moveTo(offsetX, offsetY+rowHeight);
					context.lineTo(offsetX+colWidth, offsetY);
				}
				else{
					top=offsetY+(rowHeight/2);
					context.moveTo(offsetX, offsetY+rowHeight);
					context.lineTo(offsetX+(colWidth/2), offsetY+(rowHeight/2));
					context.lineTo(offsetX+colWidth, offsetY+rowHeight);
				}
				return top;
			}
			
			function drawSchedBottom(context, colWidth, rowHeight, day, time){
				var minutes = time%1.0;
				var hours = Math.floor(time);
				var offsetX = colWidth*(day+1);;
				var offsetY = rowHeight*(hours+1);
				var bottom = offsetY;
				if(minutes==0.0){
					context.lineTo(offsetX+colWidth, offsetY);
					context.lineTo(offsetX, offsetY);
				}
				else if(minutes<=0.25){
					bottom = offsetY+(rowHeight/2);
					context.lineTo(offsetX+colWidth, offsetY);
					context.lineTo(offsetX+(colWidth/2), offsetY+(rowHeight/2));
					context.lineTo(offsetX, offsetY);
				}
				else if(minutes<=0.5){
					bottom = offsetY+rowHeight;
					context.lineTo(offsetX+colWidth, offsetY);
					context.lineTo(offsetX, offsetY+rowHeight);
				}
				else{
					bottom = offsetY+rowHeight;
					context.lineTo(offsetX+colWidth, offsetY+rowHeight);
					context.lineTo(offsetX+(colWidth/2), offsetY+(rowHeight/2));
					context.lineTo(offsetX, offsetY+rowHeight);
				}
				return bottom;
			}
			
			function drawSched(context, colWidth, rowHeight, day, timeStart, timeEnd, color, text, textSize, textFont, textColor){
				context.beginPath();
				var topBegin = drawSchedTop(context, colWidth, rowHeight, day, timeStart);
				var bottomEnd = drawSchedBottom(context, colWidth, rowHeight, day, timeEnd);
				context.fillStyle=color;
				context.fill();
				context.closePath();
				
				drawTextCentered(context, colWidth*(day+1), topBegin, colWidth, bottomEnd-topBegin, text, textSize, textFont, textColor);
			}
		
			function loadSched(sched){
				var c=sched.getContext("2d");
				
				rowHeight = sched.height/13;
				colWidth = sched.width/7;
				
				fillRectangle(c, 0, 0, sched.width, sched.height, "white");
				fillRectangle(c, 0, 0, sched.width/7, sched.height, "#0088CB");
				fillRectangle(c, 0, 0, sched.width, rowHeight, "#005F8E");
				
				for(var i=0;i<13;i++)
					drawLine(c, 0, (rowHeight)*i, sched.width, (rowHeight)*i, "#C2E0F5", 1);
					
				for(var i=0;i<7;i++)
					drawLine(c, (colWidth)*i, 0, (colWidth)*i, sched.height, "#Ccc", 1);
				
				var columns = new Array("Time","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
				for(var i=0;i<columns.length;i++)
					drawTextCentered(c, colWidth*i, 0, colWidth, rowHeight, columns[i], 12, "Sans", "#fff");
				
				for(var i=0;i<12;i++){
					s = i+1;
					var label = ((i<3||i>5)?"0":"") + ((i<5)?(i+7):(i==5)?"12":(i-5))  + ":00-" +  ((s<3||s>5)?"0":"") + ((s<5)?(s+7):(s==5)?"12":(s-5)) + ":00"; 
					drawTextCentered(c, 0, (rowHeight)*(i+1), colWidth, rowHeight, label, 12, "Sans", "#fff");
				}
				
				//c, colWidth, rowHeight, <Days since Monday>, <Starting in hours since 7AM>, <Ending in hours since 7AM>, <Color>, <Label>, <Label Size>, <Label Font>, <Label Color>
				drawSched(c, colWidth, rowHeight, 3, 1.5, 3.25, "#555", "CMSC128", 10, "Sans", "white");
				drawSched(c, colWidth, rowHeight, 2, 3.25, 5.5, "#C84", "CMSC128", 10, "Sans", "white");
				
			}