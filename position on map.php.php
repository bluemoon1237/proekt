 
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Battle ship</title> 
        <meta charset="UTF-8"> 
    </head> 
    <body> 

        <canvas id="myCanvas" width="420" height="420" style="border:1px solid #d3d3d3;"> 
            Your browser does not support the HTML5 canvas tag.</canvas> 

        <form method="post" action> 
            <div> 
                <label>Ship 1</label> 
                <select class="SHIP" name="ship[1][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[1][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[1][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
            <div> 
                <label>Ship 2</label> 
                <select class="SHIP" name="ship[2][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[2][row]"> 
                    <option>A</option> 
                    <option selected>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[2][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 3</label> 
                <select class="SHIP" name="ship[3][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[3][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[3][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 4</label> 
                <select class="SHIP" name="ship[4][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="schepen" name="ship[4][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[4][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 5</label> 
                <select class="SHIP" name="ship[5][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[5][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[5][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 6</label> 
                <select class="SHIP" name="ship[6][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[6][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[6][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 7</label> 
                <select class="SHIP" name="schip[7][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[7][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[7][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 8</label> 
                <select class="SHIP" name="ship[8][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[8][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[8][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 9</label> 
                <select class="SHIP" name="ship[9][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[9][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[9][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 10</label> 
                <select class="SHIP" name="ship[10][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[10][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[10][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
             <div> 
                <label>Ship 11</label> 
                <select class="SHIP" name="ship[11][col]"> 
                    <option>1</option> 
                    <option>2</option> 
                    <option>3</option> 
                    <option>4</option> 
                    <option>5</option> 
                    <option>6</option> 
                    <option>7</option> 
                    <option>8</option> 
                    <option>9</option> 
                    <option>10</option> 
                </select> 
                <select class="SHIP" name="ship[11][row]"> 
                    <option>A</option> 
                    <option>B</option> 
                    <option>C</option> 
                    <option>D</option> 
                    <option>E</option> 
                    <option>F</option> 
                    <option>G</option> 
                    <option>H</option> 
                    <option>I</option> 
                    <option>J</option> 
                </select> 
                <select class="SHIP" name="ship[11][dir]"> 
                    <option>Horizontal</option> 
                    <option>Vertical</option> 
                </select> 
            </div> 
            <div> 
                <button>  Start game!</button> 
            </div> 
        </form> 
         
        <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script> 
        <script> 
            $( document ).ready(function() { 
                 
                var shiplengths = [2,2,2,3,3,4,5]; 
                var canvas = document.getElementById("myCanvas"); 
                var ctx = canvas.getContext("2d"); 
                ctx.font = "12px Arial"; 
                 
                $('.SHIP').change( function() {  
                    draw(); /* teken alles opnieuw! */ 
                }); 
                 
                function charToNum(character) { 
                    return character.charCodeAt(0) - 64; 
                } 
                 
                function drawGameBoard() 
                { 
                    ctx.fillStyle = 'black'; 
                     
                    ctx.beginPath(); 
                    for (var i = 0; i < 10; i++) { 
                        ctx.fillText(i + 1, i * 40 + 35, 12); 
                    } 
                    for (var i = 0; i < 10; i++) { 
                        ctx.fillText(String.fromCharCode(65 + i), 5, i * 40 + 45); 
                    } 

                    for (var i = 0; i <= 10; i++) { 
                        ctx.moveTo(20, i * 40 + 20); 
                        ctx.lineTo(420, i * 40 + 20); 
                    } 
                    for (var i = 0; i <= 10; i++) { 
                        ctx.moveTo(i * 40 + 20, 20); 
                        ctx.lineTo(i * 40 + 20, 420); 
                    } 

                    ctx.stroke(); 
                } 
                 
                function drawShips() 
                { 
                    for(var ship = 1 ; ship <= shiplengths.length ; ship++) { 
                        var col = $('select[name="ship['+ship+'][col]"]').val(); 
                        var row = $('select[name="ship['+ship+'][row]"]').val(); 
                        var dir = $('select[name="ship['+ship+'][dir]"]').val(); 
                        var len = shiplengths[ship-1]; 
                        drawShip(col, row, dir, len); 
                    } 
                } 
                 
                function drawShip(col, row, dir, len) 
                { 
                    ctx.beginPath(); 
                    if(dir == 'Horizontal') 
                        ctx.rect(col*40-16, charToNum(row)*40-16, len*40-8, 32); 
                    else 
                        ctx.rect(col*40-16, charToNum(row)*40-16, 32, len*40-8); 
                    ctx.fillStyle = 'yellow'; 
                    ctx.fill(); 
                    ctx.lineWidth = 2; 
                    ctx.strokeStyle = 'black'; 
                    ctx.closePath(); 
                    ctx.stroke(); 
                } 
                 
                function draw() 
                { 
                    ctx.clearRect(0, 0, canvas.width, canvas.height); 
                    drawGameBoard(); 
                    drawShips(); 
                } 
                 
                draw(); 
            }); 
        </script> 
    </body> 
</html>