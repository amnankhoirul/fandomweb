<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body{
            margin:0;
            padding:0;
            width: 100%;
            height:100%;
        }
        .navbar{
            width:101%;
            height:100%;
            background-color:rgba(212, 212, 212, 0.29);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .logoaj img{
           
        z-index: 2;
        width:280px;
        height: 90px;
        opacity: 100%; 
    margin-left: 2%;
    margin-top: 1%;
        }
        .content{
            width: 100%;
            height:100%;
            padding:10px;
            position: relative;
        }

        .image-event{
            justify-content:center;
            
        }

        .image-event img{
            justify-content:center;
            margin-left:25%;
            margin-top:5%;
            
        }
        .side-content{
            position:absolute;
            height:100%;
            width:20%;
            background-color:rgba(212, 212, 212, 0.29);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            right:0;
        }
        .title-content{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color:grey;
            font-size:20px;
            margin-left:32%;
        }
        body::-webkit-scrollbar-track{
    background-color: #03030354;
    display: none;
}
  
body::-webkit-scrollbar-thumb{
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.2), rgb(82, 82, 163), rgba(255, 255, 255, 0.2));
    display: none;
}

body::-webkit-scrollbar{
    width: 0.50rem;
    display: none;
  }
 

.audio-player {
    display: flex;
    align-items: center;
    gap: 10px;
    font-family: Arial, sans-serif;
    width: 40%;
    margin-left:23%;
}

.btn {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

.progress-container {
    flex-grow: 1;
    margin: 0 10px;
}

.progress-bar {
    width: 100%;
    cursor: pointer;
    height: 5px;
    background-color: #ccc;
    border-radius: 5px;
    outline: none;
    -webkit-appearance: none;
    appearance: none;
}

.progress-bar::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 15px;
    height: 15px;
    background: #007BFF;
    border-radius: 50%;
    cursor: pointer;
}

.progress-bar::-moz-range-thumb {
    width: 15px;
    height: 15px;
    background: #007BFF;
    border-radius: 50%;
    cursor: pointer;
}

.back1{
    width:80vh;
    height:100vh;
    margin-top:5%;
    margin-left:20%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    border-width:2px;
    border-style:double;
    border-color:rgba(197, 186, 255, 0.79);
}
.isi-back1{
    padding:10px;
}

.isi-back1 p{
    font-family: Arial, sans-serif;
}

.backlog{
    width: 90%;
    margin-left:3%;
    height:30px;
    background: linear-gradient(to bottom,  rgb(12, 77, 255, 0.5), rgba(12, 77, 255, 0.2));
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.backlog1{
    width: 90%;
    margin-top:8%;
    margin-left:3%;
    height:300px;
    background-color: rgba(197, 197, 197, 0);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home#page2">
        <div class="logoaj">
			<img src="<?= base_url('sneebf')?>/img/pjsk-logo.png" alt class="" />
		</div>
        </a>
    
    </div>

    <div class="content">
        <div class="side-content">

        </div>
        
        <div class="image-event">
            <img src="<?= base_url('sneebf')?>/img/event1.png" alt="">
        </div>
        <div class="mid-content">
            <div class="title-content"><h2><b>GROW GLORIUS GLOW</b></h2></div>
        </div>
        <div class="audio-player">
    <audio id="audio">
        <source src="<?= base_url('sneebf')?>/audio/event1.ogg" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    
    <!-- Play/Pause Button -->
    <button id="play-pause" class="btn">
        <i id="play-icon" class="fas fa-play"></i>
    </button>
    
    <!-- Progress Bar -->
    <div class="progress-container">
        <input type="range" id="progress" class="progress-bar" value="0" min="0" max="100">
    </div>
    
    <!-- Mute/Unmute Button -->
    <button id="mute-unmute" class="btn">
        <i id="mute-icon" class="fas fa-volume-up"></i>
    </button>
</div>
<div class="back1">
    <div class="isi-back1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam sint suscipit omnis voluptas, odit quidem natus, vero error cumque neque eum totam laboriosam, minus repellat beatae dolor? Voluptatum, quae.</p>
    </div>
    <div class="backlog"></div>
    <div class="backlog1"></div>
    <div class="isi-back1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam sint suscipit omnis voluptas, odit quidem natus, vero error cumque neque eum totam laboriosam, minus repellat beatae dolor? Voluptatum, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit culpa tempora expedita blanditiis nesciunt ipsa praesentium quibusdam modi, necessitatibus architecto consequatur numquam, consequuntur veniam. Minima perferendis natus eum. Delectus, praesentium.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam sint suscipit omnis voluptas, odit quidem natus, vero error cumque neque eum totam laboriosam, minus repellat beatae dolor? Voluptatum, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit culpa tempora expedita blanditiis nesciunt ipsa praesentium quibusdam modi, necessitatibus architecto consequatur numquam, consequuntur veniam. Minima perferendis natus eum. Delectus, praesentium.</p>
        
    </div>
    
    
</div>
</body>
</html>
