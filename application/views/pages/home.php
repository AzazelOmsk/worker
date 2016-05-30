<h2><?php echo $title ?></h2>

<div class="jackpot">
 <h3> Jack Pot </h3>
<div id="sum"> 1 000 000 rubles</div> 
 </div>

 
 
 <div class="box effect" id ="questblock">
 <button id="run">Начать</button>
<div class="intobox" id="name" style="display:none;"> 
<label> Как Вас зовут? </label>
<input type="text" size="20" value="" /><br />

<button id="goto_q1">Начать тест</button>
 </div>
 
 <div class="intobox" id="q1" style="display:none;"> 
<label> Первый вопрос</label>
<input type="text" size="20" value="" /><br />
<button id="goto_q2">Далее</button>
 </div>
 
 <div class="intobox" id="q2" style="display:none;"> 
<label> Второй вопрос </label>
<input type="text" size="20" value="" /><br />
<button id="goto_q3">Далее</button>
 </div>
 
 <div class="intobox" id="q3" style="display:none;"> 
<label> Третий вопрос</label>
<input type="text" size="20" value="" /><br />
<button id="finish">Закончить</button>
 </div>
 
 <div class="intobox" id="result" style="display:none;"> 
<label> Результат</label>
<input type="text" size="20" value="" /><br />
 </div>
 
 </div>
 
 <script>
	    $("button#run").click(function() {
        $("#run").fadeOut("slow");
		$("#name").delay(1000).fadeIn("slow");
		
      });
	  
	   $("button#goto_q1").click(function() {
        $("#name").fadeOut("slow");
		$("#q1").delay(1000).fadeIn("slow");
		
      });
	  
	   $("button#goto_q2").click(function() {
        $("#q1").fadeOut("slow");
		$("#q2").delay(1000).fadeIn("slow");
		
      });
	  
	  $("button#goto_q3").click(function() {
        $("#q2").fadeOut("slow");
		$("#q3").delay(1000).fadeIn("slow");
		
      });
	  
	   $("button#finish").click(function() {
        $("#q3").fadeOut("slow");
		$("#result").delay(1000).fadeIn("slow");
		
      });
	  
 </script>