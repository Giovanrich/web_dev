<!doctype html>
<html>
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Radley' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">


body{
  font-family: 'Radley', serif;
}
#doughnut,#doughnut2,#doughnut3,#doughnut4{
  position: absolute;
}
#skill1,#skill2,#skill3,#skill4{
  position: relative;
}

</style>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-center">
            <h1>Skill 1</h1>
            <canvas id="doughnut" width="120" height="120"></canvas>
            <canvas id="skill1" width="120" height="120" class=""></canvas>
            <p>Bacon ipsum dolor amet meatloaf ham hock ground round capicola cow kielbasa, ball tip pork loin.
              <br>Ham hock doner pork loin swine, filet mignon ham rump.</p>
            </div>
            <div class="col-md-3 text-center">
              <h1>Skill 2</h1>
              <canvas id="doughnut2" width="120" height="120"></canvas>
              <canvas id="skill2" width="120" height="120" class=""></canvas>
              <p>Bacon ipsum dolor amet meatloaf ham hock ground round capicola cow kielbasa, ball tip pork loin.
                <br>Ham hock doner pork loin swine, filet mignon ham rump.</p>
              </div>
              <div class="col-md-3 text-center">
                <h1>Skill 3</h1>
                <canvas id="doughnut3" width="120" height="120"></canvas>
                <canvas id="skill3" width="120" height="120" class=""></canvas>
                <p>Bacon ipsum dolor amet meatloaf ham hock ground round capicola cow kielbasa, ball tip pork loin.
                  <br>Ham hock doner pork loin swine, filet mignon ham rump.</p>
                </div>
                <div class="col-md-3 text-center">
                  <h1>Skill 4</h1>
                  <canvas id="doughnut4" width="120" height="120"></canvas>
                  <canvas id="skill4" width="120" height="120" class=""></canvas>
                  <p>Bacon ipsum dolor amet meatloaf ham hock ground round capicola cow kielbasa, ball tip pork loin.
                    <br>Ham hock doner pork loin swine, filet mignon ham rump.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </body>

        <script type="text/javascript">
          

//draw the doughnut
var doughnutArray = [document.getElementById('doughnut').getContext('2d'), document.getElementById('doughnut2').getContext('2d'), document.getElementById('doughnut3').getContext('2d'), document.getElementById('doughnut4').getContext('2d')];
for (var i = 0; i < doughnutArray.length; i++) {
  doughnutArray[i].lineWidth = 5; //thickness of the line
  doughnutArray[i].fillStyle = '#eaeaea';
  doughnutArray[i].strokeStyle = "#eaeaea";
  doughnutArray[i].beginPath();
  doughnutArray[i].arc(60, 60, 55, 4.72, 15, false); //.arc(x, y , radius, startAngle, endAngle, anticlockwise)
  doughnutArray[i].stroke();
}
window.onload = function() {
  loadSkills1();
  loadSkills2();
  loadSkills3();
  loadSkills4();
}
/*Load skills one function*/
function loadSkills1() {
  var ctx = document.getElementById('skill1').getContext('2d');
  var al = 0;
  var start = 4.72;
  var cw = ctx.canvas.width;
  var ch = ctx.canvas.height;
  var diff;

  function progressSim() {
    diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2); //change the arc by multiplying .. * Math.PI*2* --> 7.5=75, 5=50 etc.
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 5; //thickness of the line
    ctx.fillStyle = '#E84855';
    ctx.strokeStyle = "#E84855";
    ctx.textAlign = 'center';
    ctx.font = "30px Radley";
    ctx.fillText(al + '%', cw * .5 + 2, ch * .5 + 8, cw);
    ctx.beginPath();
    ctx.arc(60, 60, 55, start, diff / 10 + start, false); //.arc(x, y , radius, startAngle, endAngle, anticlockwise)
    ctx.stroke();
    if (al >= 100) { // stop the recreation at your desired point, i.e change 100 to 75 if you need just 75%.
      clearTimeout(sim);
      // Add scripting here that will run when progress completes
    }
    al++;
  }
  var sim = setInterval(progressSim, 20); //speed   
}
/*loadSkills2 function*/
function loadSkills2() {
  var ctx = document.getElementById('skill2').getContext('2d');
  var al = 0;
  var start = 4.72;
  var cw = ctx.canvas.width;
  var ch = ctx.canvas.height;
  var diff;

  function progressSim() {
    diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2); //change the arc by multiplying .. * Math.PI*2* --> 7.5=75, 5=50 etc.
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 5; //thickness of the line
    ctx.fillStyle = '#E84855';
    ctx.strokeStyle = "#E84855";
    ctx.textAlign = 'center';
    ctx.font = "30px Radley";
    ctx.fillText(al + '%', cw * .5 + 2, ch * .5 + 8, cw);
    ctx.beginPath();
    ctx.arc(60, 60, 55, start, diff / 10 + start, false); //.arc(x, y , radius, startAngle, endAngle, anticlockwise)
    ctx.stroke();
    if (al >= 90) { // stop the recreation at your desired point, i.e change 100 to 75 if you need just 75%.
      clearTimeout(sim);
      // Add scripting here that will run when progress completes
    }
    al++;
  }
  var sim = setInterval(progressSim, 30); //speed
}

/* loadSkill3 function*/
function loadSkills3() {
  var ctx = document.getElementById('skill3').getContext('2d');
  var al = 0;
  var start = 4.72;
  var cw = ctx.canvas.width;
  var ch = ctx.canvas.height;
  var diff;

  function progressSim() {
    diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2); //change the arc by multiplying .. * Math.PI*2* --> 7.5=75, 5=50 etc.
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 5; //thickness of the line
    ctx.fillStyle = '#E84855';
    ctx.strokeStyle = "#E84855";
    ctx.textAlign = 'center';
    ctx.font = "30px Radley";
    ctx.fillText(al + '%', cw * .5 + 2, ch * .5 + 8, cw);
    ctx.beginPath();
    ctx.arc(60, 60, 55, start, diff / 10 + start, false); //.arc(x, y , radius, startAngle, endAngle, anticlockwise)
    ctx.stroke();
    if (al >= 80) { // stop the recreation at your desired point, i.e change 100 to 75 if you need just 75%.
      clearTimeout(sim);
      // Add scripting here that will run when progress completes
    }
    al++;
  }
  var sim = setInterval(progressSim, 40); //speed
}
/* loadSkill4 function*/
function loadSkills4() {
  var ctx = document.getElementById('skill4').getContext('2d');
  var al = 0;
  var start = 4.72;
  var cw = ctx.canvas.width;
  var ch = ctx.canvas.height;
  var diff;

  function progressSim() {
    diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2); //change the arc by multiplying .. * Math.PI*2* --> 7.5=75, 5=50 etc.
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 5; //thickness of the line
    ctx.fillStyle = '#E84855';
    ctx.strokeStyle = "#E84855";
    ctx.textAlign = 'center';
    ctx.font = "30px Radley";
    ctx.fillText(al + '%', cw * .5 + 2, ch * .5 + 8, cw);
    ctx.beginPath();
    ctx.arc(60, 60, 55, start, diff / 10 + start, false); //.arc(x, y , radius, startAngle, endAngle, anticlockwise)
    ctx.stroke();
    if (al >= 75) { // stop the recreation at your desired point, i.e change 100 to 75 if you need just 75%.
      clearTimeout(sim);
      // Add scripting here that will run when progress completes
    }
    al++;
  }
  var sim = setInterval(progressSim, 50); //speed
}


</script>
</html>
