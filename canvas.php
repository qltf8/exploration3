<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
        <style>
            canvas {border: medium double black; margin: 4px}
        </style>
    </head>
    <body>
        <canvas id="canvas1" width="500" height="300">
            Your browser doesn't support the <code>canvas</code> element
        </canvas>
        <canvas id="canvas2" width="500" height="300">
            Your browser doesn't support the <code>canvas</code> element
        </canvas>
        <canvas id="canvas3" width="500" height="140">
            Your browser doesn't support the <code>canvas</code> element
        </canvas>
        <canvas id="canvas4" width="500" height="140">
            Your browser doesn't support the <code>canvas</code> element
        </canvas>
        <script>
             
            
             var ctx = document.getElementById("canvas1").getContext("2d");
            
            var offset = 10;
            var size = 50;
            var count = 5;
            
            for (var i = 0; i < count; i++) {
                ctx.fillRect(i * (offset + size) + offset, offset, size, size);
                ctx.strokeRect(i * (offset + size) + offset, (2 * offset) + size,
                               size, size);
                ctx.fillRect(i * (offset + size) + offset, (3 * offset) + (2 *size), size, size);
                ctx.clearRect(i * (offset + size) + offset, (3 * offset) + (2 *size) + 5, size, size -10);
            }

            
            var ctx = document.getElementById("canvas2").getContext("2d");
            
            var offset = 10;
            var size = 50;
            var count = 5;
            ctx.lineWidth = 3;            
            var fillColors = ["black", "grey", "lightgrey", "red", "blue"];
            var strokeColors = ["rgb(0,0,0)", "rgb(100, 100, 100)",
                                "rgb(200, 200, 200)", "rgb(255, 0, 0)",
                                "rgb(0, 0, 255)"];

            for (var i = 0; i < count; i++) {
                ctx.fillStyle = fillColors[i];
                ctx.strokeStyle = strokeColors[i];
                
                ctx.fillRect(i * (offset + size) + offset, offset, size, size);
                ctx.strokeRect(i * (offset + size) + offset, (2 * offset) + size,
                               size, size);                
            }
            
            var ctx = document.getElementById("canvas3").getContext("2d");

            var grad = ctx.createLinearGradient(0, 0, 500, 140);
            grad.addColorStop(0, "red");
            grad.addColorStop(0.5, "white");
            grad.addColorStop(1, "black");
            
            ctx.fillStyle = grad;
            ctx.fillRect(0, 0, 500, 140);
            
            var ctx = document.getElementById("canvas4").getContext("2d");

            var grad = ctx.createRadialGradient(250, 70, 20, 200, 60, 100);
            grad.addColorStop(0, "red");
            grad.addColorStop(0.5, "white");
            grad.addColorStop(1, "black");
            
            ctx.fillStyle = grad;
            ctx.fillRect(0, 0, 500, 140);

        </script>
    </body>
</html>
