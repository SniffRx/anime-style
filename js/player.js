var audio = document.getElementById("audioplayer");
audio.volume = 0.1;

function play_audio(task) {
      if(task == 'play'){
           $("#audioplayer").trigger('play');
      }
      if(task == 'stop'){
           $("#audioplayer").trigger('pause');
           $("#audioplayer").prop("currentTime",0);
      }
 }