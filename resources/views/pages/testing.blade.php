

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="timeline">
  <div class="container right">
    <div class="content">
      <p>submitted a request</p>
      <p class="move-left">25 Jan</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
    <p>request received</p>
    <p class="move-left">29 Jan</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
    <p>request assigned</p>
    <p class="move-left">30 Jan</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
    <p>request received</p>
    <p class="move-left">1 Feb</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
    <p>request resolved</p>
    <p class="move-left">1 Feb</p>
    </div>
  </div>
</div>
</body>
</html>









<style>

.move-left {
  position: absolute;
  top: 20px;
  left: -80px;
}

* {
  box-sizing: border-box;
}

/* Set a background color */
body {
  /* background-color: #474e5d; */
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
/* .timeline {
  position: relative;
  max-width: 500px;
  margin: 30px;
} */

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 3px;
  height: 330px;
  background-color: red;
  top: 30px;
  bottom: 0;
  left: 45.3%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 15px 20px;
  position: relative;
  top: 60px;
  /* background-color: inherit; */
  width: 15%;
  margin: -60px;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 15px;
  height: 15px;
  /* right: -10px; */
  /* left: 90px; */
  background-color: white;
  border: 4px solid #FF9F55;
  top: 50px;
  border-radius: 70%;
  /* margin: -20px; */
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 50px;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 10px;
  /* background-color: white; */
  position: relative;
  /* top: -30px; */
  left: -20px;
  /* border-radius: 6px; */
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
/* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }

/* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

/* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

/* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }

/* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
</style>