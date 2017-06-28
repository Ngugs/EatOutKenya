<?php //if user has clicked the Post button and text is available, start analysis
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['text2'])){
   //create an array of words.
   $words=explode(' ',$_POST['text2']);
   $repl=array('');
   //remove all punctuation marks eg ,:
   foreach ($words as $s){
     $repl[]=str_replace(array(',','.',';',':','"'),'',strtolower($s));
   }   
   //arrays to hold unique words and unique counts
   $unique_words=array('');$unique_counts=array('');
   //create new array of unique words and count how many times they appear
   foreach ($repl as $s){
     if(array_count_values($unique_words)[$s]==0){
       $unique_words[]=$s;$unique_counts[]=array_count_values($repl)[$s];
     }
   }
   //print out xml doc of analysis
   header('Content-type: text/xml');header('Pragma: public');header('Cache-control: private');header('Expires: -1');echo '<?xml version="1.0" encoding="utf-8"?><xml>';$index=0;
   foreach ($unique_words as $s){
      echo'<uniqueword><word>'.$s.'</word><count>'.$unique_counts[$index].'</count></uniqueword>';
      $index++;
   }
   echo '</xml>';return;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>EatOut - Kenya</title>
<link href="https://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet"> 
<style type="text/css">body{font-family: 'Raleway', sans-serif;}a{text-decoration:none;border-radius:5px;display:block;padding:20px;width:100px;color:#fff;background:#2b71b1;}body>div{color:#000;background:#ebeced;max-width:960px;width:960px;margin-left:auto;margin-right:auto;padding:50px;margin:100px;border:solid 1px #441111;border-radius:5px}textarea{width:800px;height:300px;padding:5px}input{margin-top:10px;color:#fff;border:none;border-radius:5px;display:block;padding:10px 50px;background:#8892BF}</style>
</head>
<body><div><p>This Solution Counts The Number Of Times A Word Appears In The Provided Text.</p>
<p>Please Click The Post Button Below To Analyse The Document</p>
<p>Document 1</p><form action="one.php" accept-charset="utf-8" method="post" ><textarea name="text2">There he sat, twirling his personal, stylized mustache. It was avant garde, just like he wanted to be. The man, as he was so, just wanted a place in this world for his art. He continues to stare at the easel, thinking.

After a while he felt a firm, calming hand on his shoulder. He sighed, hanging his head wearily. "Are you yet another man come to end my life, if you can even see it that way?" The hand didn't answer, as it had no mouth. However, it's owner did, speaking the soft, assuaging tones that had come to make him famous.

"No sir. I've seen too much death and war to want to do another such thing. Instead, I have come as a tutor. Here, grab that 2 inch brush and dip it in some titanium white and prussian blue."

Hitler did such a thing, and the man behind him nodded. "Good. Now, mix them together, until you have a rather nice pale blue..."

Adolf did so, his brush strokes trembling across the pallette. "Easy there tiger, try to keep yourself calm, now. Painting is all about being steady, confident." Adolf nodded again, and went this time, albeit a bit slower, and mixed another selection. After he had done this the stranger patted his shoulder. "Good, now let's see you paint a nice, open sky." "But how? I can barely paint the ground, let allow what lies above it!" Sighing, the man grabbed a firm hold of his arm and lifted it up.

"All you have to do is nice, tiny Xs, like so.." A portion, the top left hand corner was soon filled with a nice layer of blue. "Now go ahead, try it." Adolf sighed and attempted this, and, to his surprise, mimicked the man's stroke almost perfectly.

"Ah! There ya go! Now, wash that brush off in your water and beat the devil out of it on your wood there..."

At this point, adolf couldn't help but turn around in surprise. "You want me to beat my easel with it..?"

The afro'd figure behind him nodded, pulling off his woolen hood. "Yes sir I Do. Go on. It won't hurt it."

"Tell me who you are first, then maybe I will..." The figure smiled a bright smile, as a squirrel popped out of his hair. "Why, I'm Bob. Bob Ross. And I heard you wanted to be a painter."</textarea><input type="submit" value="Post"></form></div>
</body>
</html>
