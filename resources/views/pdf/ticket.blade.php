<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>


* {
	margin: 15px;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

body,
html {
	height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	position: relative;
	min-height: 100vh;
	
	/* background: #ccc; */
}
h1,
h2,
h3 {
	font-family: "Rye", cursive;
}
p {
	font-family: "Poppins", sans-serif;
	font-size: 0.7rem;
}
h3 {
	font-size: 1rem;
}

.ticket {
	width: 700px;
	max-width: 700px;
	background: #fff;
	border-radius: 20px;
	overflow: hidden;
	position: relative;
	margin-bottom: 150px ;

}
.ticket::before {
	content: "";
	position: absolute;
	left: 470px;
	height: 100%;
    top: 200px;
	width: 10px;
	/* background: #f21b38; */
	/* margin-bottom: 150px ; */

}
.ticket::after {
	content: "";
	position: absolute;
	bottom: 70px;
	height: 10px;
    
	width: 100%;
	/* background: #f21b38; */
	margin-bottom: 150px ;

}
.block {
	width: 470px;
	height: 270px;
	padding: 1em;
	background: #715fa4;
	color: #fff;
	position: relative;
}
.boarding {
	display: flex;
	justify-content: space-between;
}
.boarding h1 {
	letter-spacing: 1px;
}
.till {
	margin-top: 5px;
}
.till p {
	font-size: 1rem;
	letter-spacing: 1px;
}
.till span {
	display: block;
	font-size: 0.7rem;
}
.content {
	width: 75%;
	padding-left: 1em;
	margin-top: 1em;
	line-height: 1.6;
}
.to {
	display: flex;
	justify-content: space-between;
}
.airline {
	letter-spacing: 3px;
	font-weight: 700;
}
.scan {
	display: flex;
	align-items: center;
	justify-content: center;
	position: absolute;
	bottom: 70px;
	right: 30px;
}
.scan img {
	width: 100px;
	height: 100px;
}
.section-2 {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	width: 75%;
	padding: 1em 2em 1em 0;
	line-height: 1.6;
	text-align: center;
	color: #2e2c63;
}

.left-side {
	position: absolute;
	top: -11px;
	right: 6px;
    /* height: 100px; */
	color: #2e2c63;
    background-color: rgb(131, 165, 212) ;
	text-align: center;
	line-height: 1.6;
}
.left-side div {
	margin-top: 0.7em;
}
.left-side h3 {
	font-size: 0.8em;
}
.left-side .section-2 {
	padding: 0.2em;
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0 auto;
}

.left-side .section-2 div {
	padding: 0.3em;
	background: #715fa4;
	color: #fff;
	font-family: "Poppins", sans-serif;
}
.left-side .time {
	position: absolute;
	bottom: -90px;
	right: 0;
	text-align: center;
	margin: 0 auto;
}
.left-side .time p {
	font-weight: 600;
	letter-spacing: 2px;
}
.left-side .time span {
	font-family: "Rye", cursive;
}


    </style>
</head>
<body>
    
		
	<?php
	for ($i = 0; $i < $reservation->quantity; $i++) {
		$randomCode = rand(1000000000000000, 9999999999999999);

	?>


		
	

        <div class="ticket">
            <div class="block">
                <div class="boarding">
                    <h1>{{ $reservation->user->name }}</h1>
                    <div class="till">
                        <p>Date et heure</p>
                        <span>Start: {{ date("d M Y", strtotime($reservation->events->Date_start)) }} {{ \Carbon\Carbon::parse($reservation->events->Date_start)->format('H:i:s') }}</span>
                        <span>end   :  {{ date("d M Y", strtotime($reservation->events->Date_end)) }} {{ \Carbon\Carbon::parse($reservation->events->Date_end)->format('H:i:s') }}</span>
                    </div>
                </div>
              
           

                <div class="scan">
                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
                </div>
            </div>
    
           
    
            <div class="left-side">
                <div class="airline">
                    info 
                </div>
                <div class="name">
                    <h3>code</h3>
					<p>#<?php echo $randomCode; ?></p>
                </div>
                <div class="from">
                    <h3>city</h3>
                    <p>{{ $reservation->events->city }}</p>
                </div>
                <div class="from">
                    <div class="to-m">
                        <h3>Organisateur</h3>
                        <p>{{ $reservation->events->user->name }}</p>
                    </div>
                </div>
    
                    <div class="gate">
                        <h3>Gate</h3>
                    </div>
                
    
            
            </div>
        </div>
    
		<?php
	}
	?>

</body>
</html>