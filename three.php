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
<p>Document 3</p><form action="three.php" accept-charset="utf-8" method="post" ><textarea name="text2">A prank? Barack stared at the letter. If it was a prank, it was a damn good one. The signature was exquisite--looping and elongated, a near mirror image of JFK's real signature. Well, if someone went through this much effort for a simple joke, he might as well entertain them.

He looked around to make sure neither his wife or daughter was around. He walked into the living room just in case and dialed the number.

It rang once and clicked. "Barack."

It was John's voice. For a second, Barack thought he was listening to old speeches played in fuzzy, warmly-colored screens.

"Who is this?" he asked.

"I'm John F. Kennedy, the 35th President of the United States. The time to serve your nation is now."

"No, you're not," Barack said. This was getting less and less funny with every word. It wasn't that funny to begin with. "Impersonating a President in any serious attempt is a grave offense."

"Look outside." The call cut.

Barack peeled back the drapes and peeked through the blinds at a sunny May day. Standing at the end of his driveway, right outside his gate, was John F. Kennedy. A jet black limo sat behind the man. He beckoned Barack and slipped back inside the tinted windows of his car.

The 44th President of the United States gripped the cool brass doorknob. Already, sweat was accumulating on his hands and neck. This was dumb. He shouldn't go, he knew, but JFK had been a personal hero to him. It was under his leadership that humanity reached the moon, he stood up to Russia at the height of their power, he was a man Obama would've given anything to meet. And now he had the chance.

He opened the door and stepped into the sunlight.

Secret Service agents watched him go. None tried to stop him. They wouldn't even meet his eyes. The front gate opened like curtains in a stage play, revealing the jet black of JFK's limousine.

The car door swung open. Barack licked his arid lips and swallowed what little moisture he had in his mouth. He got in.

The hum of the car was the only noise between the two Presidents. Obama simply stared. JFK looked exactly like in the photos. The man hadn't aged. He tried scanning John's face for any misplaced flap of skin, any misdrawn shadow, anything to give away the mask. There were none.

The car stopped and suddenly, the windows flickered to black. They had been TV screens, projecting fake streets and pedestrians!

"Barack Obama," John said turning to face him.

From this up close, there was no mistaking who that voice belonged to.

"Why did you get into this car?"

Barack's eyes flitted to the locked doors on either side of him and then faced John directly. "You said it was time to serve my nation."

Neither man blinked. At last, John spoke, "Well answered Mr. President. But I'm afraid that was a lie."

Obama's heart skipped. He clutched his leg, but refused to show weakness in the face of his captor.

"It is not time to serve America, but humanity as a whole."

"What do you mean?"

"In 1961, I gave a speech called We Choose to go to the Moon. Are you familiar with it?"

Barack nodded. Most historians claimed that was the moment that a moon landing was inevitable. With a few choice words, John had mobilized the unstoppable force of human will to reach a land that had always looked down upon them.

"I gave that speech for a very specific reason. Humanity needed to ascend, but not to a physical place. Initial probes of the moon had returned an element we are unfamiliar with, but this is the element that has kept me young, it grants me certain abilities that I have not shared with the world."

"So you did get shot?"

"I also did die."

Barack chewed on his lips. If this was still a prank, it was far more elaborate than anything he'd ever experienced. "So what is this element?"

"One without a name and soon it will be the only element worth mentioning. The Russians know its there. The Chinese probably have some idea. Already, there are factions within both countries, powerful enough to influence their space program. These factions are not in the best interests of humanity."

"So what is it that you want from me?"

"You have proven your devotion to our nation through your eight grueling years of Presidency. Because of its secrecy, we cannot employ our strengths at full capacity, rather, we must do so through single people willing to live and die for the protection of the human race."

"Like some sort of super hero?"

"Not like. Barack Obama, there exists a game far greater than any petty foreign politics. The winner of this game will dictate the future of our race. If you decline my offer, I will drop you off back home and we will never speak again. But if you so choose to accept, you will have the crushing weight of the human race on your shoulders, you will have none of the gratitude or reward. It will be a path through hell itself. So ask not whether you wish to be a hero, but whether you can survive as one."

Obama clenched his jaw. He had his wife and two daughters to think of. He had finally retired from the most stressful period of his life. But he had become the President not to leave a legacy, but to fulfill his duty.

He nodded. "I accept."

The doors of the car unlocked and automatically opened. There would be no turning back now.</textarea><input type="submit" value="Post"></form></div>
</body>
</html>
