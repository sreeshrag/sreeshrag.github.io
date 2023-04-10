<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <style>
        

body {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100vh;
	flex-direction: column;
}

h1{
  margin:0px;
}

.reveal-text,
.reveal-text:after {
	animation-delay: 2s;
	animation-iteration-count: 1;
	animation-duration: 800ms;
	animation-fill-mode: both;
	animation-timing-function: cubic-bezier(0.0, 0.1, 1, 0);
}

.reveal-text {
  margin-top:20px;
	position: relative;
	font-size: 40px;
	user-select: none;
	animation-name: reveal-text;
	color: #000;
	white-space: nowrap;
  font-family: 'Work Sans', sans-serif;
	
	
	
}
:after {
		content: "";
		position: absolute;
		z-index: 999;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #000;
		transform: scaleX(0);
		transform-origin: 0 50%;
		pointer-events: none;
		animation-name: revealer-text;
	}

@keyframes reveal-text {
	from {
		clip-path: inset(0 100% 0 0);
	}
	to {
		clip-path: inset(0 0 0 0);
	}
}


@keyframes revealer-text {
	
	0%, 50% {
		transform-origin: 0 50%;
	}
	
	60%, 100% {
		transform-origin: 100% 50%;		
	}

	50% {
		transform: scaleX(1);
	}
	
	60% {
		transform: scaleX(1);
	}
	
	100% {
		transform: scaleX(0);
	}
}



    </style>
    <?php
    $x = 1;
    while ($x < 1) {
        echo "<h1 class='reveal-text'>
        ...
    </h1>
    <h1 class='reveal-text'>
        Title Animation
    </h1> ";
        $x++;
    }
    ?>

</body>

</html>