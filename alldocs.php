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
<p>Document 3</p><form action="alldocs.php" accept-charset="utf-8" method="post" ><textarea name="text2">There he sat, twirling his personal, stylized mustache. It was avant garde, just like he wanted to be. The man, as he was so, just wanted a place in this world for his art. He continues to stare at the easel, thinking.

After a while he felt a firm, calming hand on his shoulder. He sighed, hanging his head wearily. "Are you yet another man come to end my life, if you can even see it that way?" The hand didn't answer, as it had no mouth. However, it's owner did, speaking the soft, assuaging tones that had come to make him famous.

"No sir. I've seen too much death and war to want to do another such thing. Instead, I have come as a tutor. Here, grab that 2 inch brush and dip it in some titanium white and prussian blue."

Hitler did such a thing, and the man behind him nodded. "Good. Now, mix them together, until you have a rather nice pale blue..."

Adolf did so, his brush strokes trembling across the pallette. "Easy there tiger, try to keep yourself calm, now. Painting is all about being steady, confident." Adolf nodded again, and went this time, albeit a bit slower, and mixed another selection. After he had done this the stranger patted his shoulder. "Good, now let's see you paint a nice, open sky." "But how? I can barely paint the ground, let allow what lies above it!" Sighing, the man grabbed a firm hold of his arm and lifted it up.

"All you have to do is nice, tiny Xs, like so.." A portion, the top left hand corner was soon filled with a nice layer of blue. "Now go ahead, try it." Adolf sighed and attempted this, and, to his surprise, mimicked the man's stroke almost perfectly.

"Ah! There ya go! Now, wash that brush off in your water and beat the devil out of it on your wood there..."

At this point, adolf couldn't help but turn around in surprise. "You want me to beat my easel with it..?"

The afro'd figure behind him nodded, pulling off his woolen hood. "Yes sir I Do. Go on. It won't hurt it."

"Tell me who you are first, then maybe I will..." The figure smiled a bright smile, as a squirrel popped out of his hair. "Why, I'm Bob. Bob Ross. And I heard you wanted to be a painter."Caius was grabbed from his bunk and pulled out of the tent into the dark of night. With a hood over his face, he could only hear the thwunk sounds of a helicopter coming closer. He felt the wind begin to pick up, swirling around his bare skin, as he hadn't even been allowed an opportunity to dress. As soon as it landed, he was dragged aboard, and it took off again.

His hood was removed. He sat before a man in formal white robes, who sat in silence studying him. The dull red lights that lit the back of the helicopter gave him a devilish appearance. He tapped his fingertips together as he soaked in every inch of Caius' appearance.

"Caius, I'm afraid that I have very little time to bring you up to speed. I am your advocate," the man said without introducing himself. "Do you know what that is?"

"Sir," Caius barked, "An advocate is one who speaks for the accused in court, Sir."

"Excellent military form, Caius. This will be a big plus when reviewing you. But I'm talking about a very special type of advocate, Caius. You have been accused of no crime. Rather, you are up for a promotion, let's say. And I will be the one to speak for your qualities."

Caius nodded slowly. The swaying helicopter made him sick. Looking out the window, he could see the dawn breaking over the sea, with the islands of Japan disappearing in the distance. They were bringing him back to the mainland for something.

"Caius, you have had a peculiar life so far, haven't you? Born to wealthy parents who died suddenly and mysteriously? Educated at the finest schools, orphaned without a penny to your name, apprenticed to an engineer, and now a soldier?"

Caius affirmed without question.

"Have you ever wondered why your peers never experienced such turmoil?"

Caius paused, then replied emotionless: "Sir, I wonder that every day."

"Well, Caius," the advocate said, "They have never had your troubles because they were never candidates. You have been bred from birth to lead the Empire. Your genetic makeup was hand-picked by the Emperor himself, in consultation with the greatest scientists. You were given every advantage as a child, to weed out those who would become indolent and lazy with wealth. And you must remember what every citizen strives for. You were sent to the finest schools, with the most difficult subjects, to weed out those without the intellect to run the empire. And you must remember that research and science is the heart of a strong empire. You had everything taken from you, cast out into the streets, to weed out those who would not retain their compassion. And you must never forget to take care of those who have the least. You were apprenticed, to weed out those who could not work hard and put in effort. And you must always know the plight of the working man. Finally, you were trained in the military, to weed out those who would not make a good solider or leader. And as emperor, you must know the horrors or war before sending your own men to fight."

Caius sat silent, like a stone pillar.

"Cauis, you are one of the few remaining candidates. Your last trial shall be before the Senate Tribunal. Your every move, throughout all these years of your life, has been taped and recorded. Every moment of weakness or instance of misbehavior. And there is a team of inquisitors now delving into the depths of your mind, trying to find any weakness in this evidence. I will advocate for you, but they will advocate against you. If you are better than the other candidates, you will be crowned Emperor."

"Sir," Caius started, hesitant. "I do not understand. Should the new emperor not be the son of the current emperor?"

"Technically, you are!" the advocate answered. "As I said, you were born and bred from your first moment to fill this role. The emperor donated his own sperm, and you were conceived through in-vitro fertilization and implanted an an acceptable host. You see, The empire suffered for centuries through wars of succession and strife, as each distant relative of every emperor tried to prove their worth as soon as the old emperor died. It practically tore us apart, many different times. Eventually, Emperor Creiphus decreed in 1341 that succession would no longer be determined by who had the largest army, but who passed the trial of the Senate Tribunal, thus continuing Rome's long history of Democracy. Creiphus also resumed the use of the title "First Citizen" officially, though subjects still referred to him (and every successor since) as emperor."

"Over the years, we have gotten more and more detailed. At first, we simply voted on the candidates as soon as the old emperor died. But in the 1700s, great Senate leaders decreed that we must not just vet candidates, but actually shape them. And so the trials began, where the descendants of the emperor were put through tests to determine their worth. We began the tests earlier and earlier, taking babes from their mothers and raising them in different circumstances to test their mettle. As our technology has improved, we've been able to improve their physical and intellectual capabilities, and improve our monitoring."

Caius nodded slowly.

"Of course, none of this is public information," the advocate said with a short laugh. "To the citizens, the emperor is flawless, and so are his heirs. The children are conceived in secret, and the public is never told of their identities until the emperor is ready to announce his heir. The public never learns of the many rejected heirs."

"Why is that," Caius asked. "Don't they speak about the trials after they have been rejected?"

"Don't worry about that for now," the advocate said, staring off into the distance of the Asian mainland. "We'll cross that bridge if we have to."

The advocate walked to a cabinet on the other side of the helicopter's compartment. He pulled out a formal suit and tossed it to Caius. "Put this on," he said. "You'll need to be more presentable for the Senate Tribunal." He reached back into the cupboard and pulled out stacks of books and binders. "And we have two days for you to get caught up on the current events of the empire; the Tribunal will quiz you on what you would do in each situation, and any number of hypotheticals." Reaching into the cupboard one last time, he pulled out a ceremonial, gold-plated sword and a standard military-issue rifle. "And of course, the trials of combat."

With a grimace, Caius accepted the load of materials and went to work. Less than an hour ago, he'd never thought of what it would be like to be emperor. Now, he was determined to be crowned or die trying.A prank? Barack stared at the letter. If it was a prank, it was a damn good one. The signature was exquisite--looping and elongated, a near mirror image of JFK's real signature. Well, if someone went through this much effort for a simple joke, he might as well entertain them.

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
