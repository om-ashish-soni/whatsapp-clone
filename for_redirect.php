<!-- 
<form action="temp_to_redirect.php" enctype="multipart/form-data" method="POST">
<input type="file" accept="audio/*" name="audio">
<input type="submit" value="submit">
</form> -->
<!DOCTYPE html>
<html>
   <head>
    <script src="//lab.subinsb.com/projects/jquery/core/jquery-2.1.1.js"></script>
    <script src="//lab.subinsb.com/projects/jquery/voice/recorder.js"></script>
    <script src="//lab.subinsb.com/projects/jquery/voice/jquery.voice.min.js"></script>
    <script src="cdn/record.js"></script>
    <script>
    function restore(){
  $("#record, #live").removeClass("disabled");
  $(".one").addClass("disabled");
  Fr.voice.stop();
}
$(document).ready(function(){
  $(document).on("click", "#record:not(.disabled)", function(){
    elem = $(this);
    Fr.voice.record($("#live").is(":checked"), function(){
      elem.addClass("disabled");
      $("#live").addClass("disabled");
      $(".one").removeClass("disabled");
    });
  });
  
  $(document).on("click", "#stop:not(.disabled)", function(){
    restore();
  });
  
  $(document).on("click", "#play:not(.disabled)", function(){
    Fr.voice.export(function(url){
      $("#audio").attr("src", url);
      $("#audio")[0].play();
    }, "URL");
    restore();
  });
  
  $(document).on("click", "#download:not(.disabled)", function(){
    Fr.voice.export(function(url){
      $("<a href='"+url+"' download='MyRecording.wav'></a>")[0].click();
    }, "URL");
    restore();
  });
  
  $(document).on("click", "#base64:not(.disabled)", function(){
    Fr.voice.export(function(url){
      console.log("Here is the base64 URL : " + url);
      alert("Check the web console for the URL");
      
      $("<a href='"+ url +"' target='_blank'></a>")[0].click();
    }, "base64");
    restore();
  });
  
  $(document).on("click", "#mp3:not(.disabled)", function(){
    alert("The conversion to MP3 will take some time (even 10 minutes), so please wait....");
    Fr.voice.export(function(url){
      console.log("Here is the MP3 URL : " + url);
      alert("Check the web console for the URL");
      
      $("<a href='"+ url +"' target='_blank'></a>")[0].click();
    }, "mp3");
    restore();
  });
});
    </script>
   </head>
   <body>
    <div id="content">
      <h2>Record, Play & Download Microphone Voice</h2>
      <audio controls src="" id="audio"></audio>
      <div style="margin:10px;">
        <a class="button" id="record">Record</a>
        <a class="button disabled one" id="stop">Reset</a>
        <a class="button disabled one" id="play">Play</a>
        <a class="button disabled one" id="download">Download</a>
        <a class="button disabled one" id="base64">Base64 URL</a>
        <a class="button disabled one" id="mp3">MP3 URL</a>
      </div>
      <input class="button" type="checkbox" id="live"/>
      <label for="live">Live Output</label>
      <style>
      .button{
        display: inline-block;
        vertical-align: middle;
        margin: 0px 5px;
        padding: 5px 12px;
        cursor: pointer;
        outline: none;
        font-size: 13px;
        text-decoration: none !important;
        text-align: center;
        color:#fff;
        background-color: #4D90FE;
        background-image: linear-gradient(top,#4D90FE, #4787ED);
        background-image: -ms-linear-gradient(top,#4D90FE, #4787ED);
        background-image: -o-linear-gradient(top,#4D90FE, #4787ED);
        background-image: linear-gradient(top,#4D90FE, #4787ED);
        border: 1px solid #4787ED;
        box-shadow: 0 1px 3px #BFBFBF;
      }
      a.button{
        color: #fff;
      }
      .button:hover{
        box-shadow: inset 0px 1px 1px #8C8C8C;
      }
      .button.disabled{
        box-shadow:none;
        opacity:0.7;
      }
      </style>

    </div>
   </body>
</html>