<?php
session_start();
?>

<html>
<?php
		//remember to put all not set values to no.png
		//also remember to put in the item variables
		//also maybe remember the fight counter if you have time
		$maps = [
			//now we begin suffering with all of the maps for all of the choices in the game
			//now we begin suffering with all of the maps for all of the choices in the game
			"bg1" => [
			"name" => "BEGIN",
			"1" => "bg2",
			"2" => "bg2",
			"3" => "bg2",
			"4" => "bg2",
			"text" => "Enter any command to begin.",
			],
			"bg2" => [
			"name" => "HOME",
			"1" => "bg3",
			"2" => "bg3b",
			"text" => "It is the distant future. The world is ruled with an iron fist by the EVIL MEMELORD. It's up to you alone to stop this tyrant. 
			Everyone else is far too scared and/or doesn't care enough. Eh, I can't really blame them.
			Will you take up this challenge? Enter 1 for yes and 2 for no.",
			],
			"bg3" => [
			"name" => "BYSTANDER",
			"1" => "bg4a",
			"2" => "bg4b",
			"text" => "Your adventure begins in your hometown. You're ready to begin your quest when you run into an innocent bystander. Enter 1 to ask for directions, enter 2 to FIGHT HIM.",
			],
			"bg3b" => [
			"name" => "BABY",
			"1" => "bg3",
			"2" => "bg3",
			"3" => "bg3",
			"4" => "bg3",
			"text" => "Wow, okay. You're a real baby, huh? But if you don't stop the evil memelord then who will? 
			You're going on this adventure whether you like it or not. Enter any command to continue",
			],
			"bg4a" => [
			"name" => "DIRECTIONS",
			"1" => "south1",
			"2" => "east1",
			"3" => "west1",
			"4" => "bg4b",
			"text" => "You ask the bystander for directions to the capital building. He says that no one knows exactly where it is, but he thinks that it's in the far west. 
			Although, he recalls that he heard from a friend that it was in the far east. 
			Enter 1 to ignore him and go to the south, enter 2 to go to the far east, enter 3 to go to the far west, and enter 4 to FIGHT THE BYSTANDER AND HIS FRIEND.",
			],
			"bg4b" => [
			"name" => "FIGHT 1",
			"1" => "bg5b1",
			"2" => "bg5b1",
			"3" => "bg5b1",
			"4" => "bg5b1",
			"text" => "You FIGHT the innocent bystander and WIN. Enter any command to continue.",
			],
			"bg5b1" => [
			"name" => "SPY",
			"1" => "sword1",
			"2" => "north1",
			"text" => "Turns out the not-so-innocent bystander was a government spy. 
			He tells you that the capital building is in the far north, but you'll never survive without a sword. 
			Because in the distant future, people went back to using swords. Swords are really cool. 
			You know theres a sword shop downtown. But you don't need a sword, do you? You don't need anything but your FISTS. 
			Enter 1 to go get a sword, enter 2 to go straight to the north.",
			],
			"sword1" => [
			"name" => "SWORD SHOP OUTSIDE",
			"1" => "sword2",
			"2" => "sword2",
			"3" => "sword2",
			"4" => "sword2",
			"text" => "You go to the sword shop. Enter any command to continue.",
			],
			"sword2" => [
			"name" => "SWORD SHOP",
			"1" => "sword3a",
			"2" => "sword3b",
			"3" => "sword3c",
			"text" => "You go inside, and meet the swordmaster. 
			He tells you that if you want to FIGHT the Evil Memelord, you need some proper training with a blade first. 
			He refuses to sell you a sword unless you accept his training. But you don't need training, you're already a master swordfighter. 
			Enter 1 to accept his training, enter 2 to refuse and leave, and enter 3 to FIGHT HIM. RIGHT NOW. IN THE SHOP.",
			],
			"sword3a" => [
			"name" => "TRAINING",
			"1" => "north1",
			"2" => "north1",
			"3" => "north1",
			"4" => "north1",
			"text" => "You accept his training, and the sword master provides you with a free basic sword and a few lessons. Enter any command to continue and head north."
			//sword=1;
			],
			"sword3b" => [
			"name" => "LEAVING",
			"1" => "north1",
			"2" => "north1",
			"3" => "north1",
			"4" => "north1",
			"text" => "You decide to leave the sword master. You don't need him. All you need is your FISTS and your DETERMINATION. Enter any command to continue and head north."
			],
			"sword3c" => [
			"name" => "FIGHT 2",
			"1" => "north1",
			"2" => "north1",
			"3" => "north1",
			"4" => "north1",
			"text" => "You FIGHT the sword master. You win easily. You told him you were already a master. 
			He respects your initiative and gifts you with a very powerful enchanted sword that is very durable. Enter any command to continue."
			//fancysword=1;
			],
			"south1" => [
			"name" => "SOUTH",
			"1" => "south2",
			"2" => "south2",
			"3" => "south2",
			"4" => "south2",
			"text" => "You decide to not listen to the bystander, who's probably just trying to lead you astray. You head to the far south instead.
			However, as soon as you do this, you find out that it was a very bad idea, as there is nothing in the south but desert. 
			No people, no memes, no nothing. There's just nothing. It's quite the sobering place. No one's here. 
			You wonder if you're alone in the world. Or even the universe. You would never know out here. "
			],
			"south2" => [
			"name" => "SOUTH",
			"1" => "south3",
			"2" => "south3",
			"3" => "south3",
			"4" => "south3",
			"text" => "You begin to get kind of sad. You're all alone, and what have you accomplished? Nothing. 
			Your whole quest is probably pointless. While you briefly ponder your existance, you see a figure in the distance. 
			There's not suppose to be anyone down here but you. You know no one is crazy enough to actually LIVE down here. 
			As the figure approaches, you can make out who it is. Enter any command to continue."
			],
			"south3" => [
			"name" => "DANNY DEVITO",
			"1" => "south4",
			"2" => "west1",
			"3" => "east1",
			"text" => "Why, it's Danny Devito. You ask why he's here, but he shushes you. 
			He's the guardian of the South, here to turn away anyone who dares enter this miserable wasteland. 
			He offers you a nice egg in this trying time. 
			He also offers you a choice. To head East or West. 
			Enter 3 to go East, enter 2 to go West, and enter 1 to FIGHT Danny Devito"
			],
			"south4" => [
			"name" => "THE FIGHT",
			"1" => "end0",
			"2" => "end0",
			"3" => "end0",
			"4" => "end0",
			"text" => "You FIGHT Danny Devito. He smiles at you. He knows you don't want to do this. But you must. 
			There's no rules down in the South. You can do anything you want. You can kill Danny Devito if you want to. 
			Danny Devito just keeps smiling, though, he's proud of you, even if no one else ever is. 
			You kill Danny Devito, and he dies with a smile on his face. 
			You're a monster, but it had to be done. Your journey ends here, friend. Before it even could truly begin."
			],
			"end0" => [
			"name" => "BAD END",
			"1" => "surprise",
			"text" =>  "Enter 1 to play again."
			],
			"surprise" => [
			"name" => "BAD END",
			"1" => "surprise",
			"text" =>  "You know what, on second thought, no, you don't get to play again. Why should you? You just killed Danny Devito, you monster. 
			You don't get to play again. You get to sit here and think about what you've done. I hope you're happy."
			],
			"west1" => [
			"name" => "THE WEST",
			"1" => "west2a",
			"2" => "west2b",
			"text" => "You decide to go to the West. The west is a dry, mountainous area, with little life. 
			When the world was taken over by the Evil Memelord, the west retained it's aged feel, while still keeping modern meme influences. The result, a classy area of older memes.
			<br><br>The place abosolutely disgusts you.<br>Enter 1 to go through the mountains, and enter 2 to find some townsfolk."
		],
		"west2b" => [
			"name" => "TOWN",
			"1" => "west2b2",
			"2" => "west2b1b",
			"text" => "You spy a town just up the road and venture in.  However, upon coming closer to the town, you see that no one is around. 
			You go into a saloon, and you see a crowd of people all gathered in the center of town. 
			They seem to all be gathered for some event or sorts.<br>
			You see a girl leaning up against a wall, and for some reason she seems awfully important. 
			Enter 1 to ask her what's up, and enter 2 to fight her."
		],
		"west2b1b" => [
			"name" => "FIGHT 3",
			"1" => "west2b2",
			"2" => "west2b2",
			"3" => "west2b2",
			"4" => "west2b2",
			"text" => "No"
		],
		"west2b2" => [
			"name" => "WHAT'S UP",
			"1" => "west2a",
			"2" => "west2a",
			"3" => "west2a",
			"4" => "west2a",
			"text" => "You ask the girl what's up. She says that she's just here hanging out with her SQUAD. 
			She says she used to think that they were annoying, but now she think's they're mostly pretty cool.
			She asks what you're up to, and you tell her about your quest. She says that that sounds pretty cool, and gifts you with a shield to aid you in your battles. 
			It's pink. You think it's quite pretty. She wishes you luck and advises you go up Brokeback mountain, as it is the quickest way to the capital building.<br>
			Enter any command to continue."
			//shield=1;
		],
		"west2a" => [
		"name" => "BROKEBACK MOUNTAIN",
		"1" => "west3b",
		"2" => "west3a",
		"text" => "You decide to head up Brokeback mountain. Brokeback mountain is a very dangerous area of the west, highly populated by giant anthopomorphic animals, known as furries. 
		You think they're really weird, and kinda creepy looking. You try to stay away from them. 
		You try to avoid the furries and just climb the mountain, but they keep glaring at you. 
		You wonder if your jacket is like, made of some animal or something and is offending them.
		Enter 1 to keep climbing, and enter 2 to FIGHT A FURRY."
		],
		"west3b" => [
		"name" => "NOPE",
		"1" => "west3a",
		"2" => "west3a",
		"3" => "west3a",
		"4" => "west3a",
		"text" => "You try to keep climbing, but the furries attack you anyway. You wonder what the deal is with them. 
		They probably just plain don't like humans climbing their mountain. Enter any command to continue."
		],
		"west3a" => [
		"name" => "FIGHT 4",
		"1" => "west4",
		"2" => "west4",
		"3" => "west4",
		"4" => "west4",
		"text" => "You have no choice but to FIGHT the furries. Or, well, you try to, but it's very hard to fight giant wolf/tiger creatures while hanging onto a mountain. 
		And besides, attempting to fight them only makes them angrier, because 'YOU CAN'T FIGHT HATE WITH HATE'
		They push you off the mountain, but at the last minute, as you're falling to your death, a hand reaches down and saves you from certain death. 
		You look up at your savior, thankful, only to realize that you were saved by none other than..."
		],
		"west4" => [
		"name" => "KANYE WEST",
		"1" => "west5",
		"2" => "west5",
		"3" => "west5",
		"4" => "west5",
		"text" => "Kanye West!!"
		],
		"west5" => [
		"name" => "KANYE",
		"1" => "west6a",
		"2" => "west6b",
		"text" => "He tells you that he is the keeper of the West, Kanye West. And that he's been watching you on your Kanye Quest. 
		And your courage has brought a tear to his eye and a feeling to his Kanye Chest. So he thought he'd better put your moves to the Kanye Test. 
		And that he will never Kanye Rest until he has been proven the Kanye Best. 
		He hopes that you're feeling Kanye Blessed because you're probably going to get pretty Kanye Stressed when he wipes out this Kanye Pest. 
		Enter 1 to have an epic rap battle with Kanye West, and enter 2 to just FIGHT HIM."
		],
		"west6a" => [
		"name" => "RAP BATTLE",
		"1" => "west6a1a",
		"2" => "west6a1b",
		"text" => "You have an epic rap battle with Kanye West. It's quite the event, you're not terrible at rapping, and Kanye West is Kanye West. 
		But it's clear that you're the underdog. The furry dj seems to be favoring Kanye, 
		and giving him the sickest of beats. You need to think of something, and quick.
		Enter 1 to call upon the gods of rap for assistance, and enter 2 to FIGHT Kanye West."
		],
		"west6a1a" => [
		"name" => "SNOOP",
		"1" => "west6a2",
		"2" => "west6a2",
		"3" => "west6a2",
		"4" => "west6a2",
		"text" => "You need to a little help here, so you call upon the gods of rap to give you guidence. You see a bright light from above. 
		Have your prayers been answered? Snoop Dogg decends from the heavens, and asks if you are the one with the noble quest. You reply yes. 
		Snoop Dogg says very well, he will assist you in this rap battle. 
		Snoop walks over to Kanye West, and begins to throw down the sickest of rhymes, and the hottest of beats. 
		You shield your eyes, not worthy to be witness such a battle. Kanye fought hard, but no one can survive an onslaught from Snoop Dogg himself."
		],
		"west6a2" => [
		"name" => "YOU WIN",
		"1" => "north1",
		"2" => "north1",
		"3" => "north1",
		"4" => "north1",
		"text" => "After defeating Kanye, Snoop wishes you luck on your quest, you ask him to say hello to Nicki Manaj, 
		and he says 'aight dog', and ascends back up to the heavens. The display brings a tear to your eye. 
		You have defeated Kanye West. He says that you have truly been proven the Kanye Best, that now he has to Kanye Rest. 
		He grants you safe passage to the north, where the Evil Memelord's capital building awaits. Enter any command to contine."
		],
		"west6a1b" => [
		"name" => "TOO LATE",
		"1" => "west6b",
		"2" => "west6b",
		"3" => "west6b",
		"4" => "west6b",
		"text" => "You can't fight Kanye, not now. You started this rap battle and you have to see it through to the end. 
		You continue to rap, but you're obviously losing. You're a FIGHTER, to a rapper. 
		You get significantly burned, and lose to Kanye West. You're not physically hurt, but you self-esteem took a hit. 
		Kanye West seems disappointed that you lost the rap battle, but decides you give you another chance. 
		He realized that you're a FIGHTER, and decided that he'll let you pass if you can beat him in a real fight. Now's your time to shine."
		],
		"west6b" => [
		"name" => "FIGHT 5",
		"1" => "north1",
		"2" => "north1",
		"3" => "north1",
		"4" => "north1",
		"text" => "You FIGHT Kanye West. It's truly quite the battle. Kanye has the ability to switch his microphone to battle mode, 
		Which makes his sick raps deadly. Kanye fights hard, but in the end he can't best you in a fight. You take his microphone, without which he is powerless. You have won.
		You have defeated Kanye West. He says that you have truly been proven the Kanye Best, that now he has to Kanye Rest. 
		He grants you safe passage to the north, where the Evil Memelord's capital building awaits."
		],
		"east1" => [
		"name" => "EAST",
		"1" => "east2a",
		"2" => "east2b",
		"text" => "You decide to go to the East. The east is war-torn area, and is mostly large lakes and rivers with cities built around them. 
		After the great meme war, the east got the brunt of society's changes. 
		It is now a heavily populated urban area, filled with many modern memes.
		The place abosolutely disgusts you.
		Enter 1 to look for some people and enter 2 to look for some transportation."
		],
		"east2a" => [
		"name" => "BINGLE",
		"1" => "east2a2",
		"2" => "east2a2",
		"3" => "east2a2",
		"4" => "east2a2",
		"text" => "You look around and see a figure in the distance. Why, it's Bingle, the basil salesmen. ",
		],
		"east2a2" => [
		"name" => "BINGLE",
		"1" => "east2b",
		"2" => "east2a3",
		"text" => "Bingle asks you if you would like any basil from his bindle, or perhaps some basil on a bagle, 
		to which you reply that you would love some, but are too busy with your quest at the moment and will come back later. 
		Bingle asks you which crazy quest you're going on this time, to which you reply that you're going to FIGHT the Evil Memelord. 
		Bingle laughs and says that if you want to do that, you'd better take a cruise north to the capital building. 
		Enter 1 to go on a cruise, and enter 2 to FIGHT BINGLE."
		],
		"east2a3" => [
		"name" => "FIGHT 6",
		"1" => "east2b",
		"2" => "east2b",
		"3" => "east2b",
		"4" => "east2b",
		"text" => "No, you could never fight Bingle. Bingle has done nothing wrong, and doesn't deserve any harm. 
		You feel ashamed for even thinking such a thing, so instead you buy a bagel with a bit of bindle basil from Bingle 
		and continue your quest. Enter any command to continue."
		],
		"east2b" => [
		"name" => "CRUISE",
		"1" => "east3a",
		"2" => "east3b",
		"text" => "You decide that the docks are probably the quickest way to get some info on the location of the Evil Memelord's capital building, 
		so you head down there to look for a boat to take you to the capital building. Once there, you see a large cruise ship. 
		You buy a ticket and hop aboard. Once on the boat, you see Leonardo Dicaprio. Enter 1 to make a bad titantic joke, enter 2 to FIGHT HIM."
		],
		"east3a" => [
		"name" => "JACK IS DEAD",
		"1" => "east4",
		"2" => "east4",
		"3" => "east4",
		"4" => "east4",
		"text" => "You make a bad titanic joke. Leonardo Dicaprio throws you overboard."
		],
		"east3b" => [
		"name" => "FIGHT 7",
		"1" => "east4",
		"2" => "east4",
		"3" => "east4",
		"4" => "east4",
		"text" => "You FIGHT Leonardo Dicaprio. You lose and he throws you overboard. At least his Oscar loves him."
		],
		"east4" => [
		"name" => "OVERBOARD",
		"1" => "east5",
		"2" => "east5",
		"3" => "east5",
		"4" => "east5",
		"text" => "Well, you're stuck in the ocean now. Nice going."
		],
		"east5" => [
		"name" => "OVERBOARD",
		"1" => "east6a",
		"2" => "east6b",
		"3" => "east6c",
		"text" => "You look around for help. You see a small boat off in the distance. It just so happens to be none other than Skrillex. 
		He tells you that he's the keeper of the East, but is on vacation right now. He deicded to try fishing, but he's not very good at it because he always drops the<br>
		...salmon.<br>You swim up to his boat. Skrillex waves hello, and politely asks if you would to join him in fishing. 
		Enter 1 to join him, enter 2 to fight him, and enter 3 to DROP THE BASS."
		],
		"east6a" => [
		"name" => "GUYS BEIN DUDES",
		"1" => "north1",
		"2" => "north1",
		"3" => "north1",
		"4" => "north1",
		"text" => "You climb into Skrillex's boat and join him in fishing. He's really a sweet guy and not at all like you expected him to be. 
		The whole experience was really quite enjoyable, and he even gives you a gift. 
		It's a secret code that he says will help you get into the Evil Memelord's capital building. 
		You ask him how he got this, and he simply replies that he knows people. He wishes you luck on your journey and takes you to the nearest shore. 
		You then head north towards the capital. Enter any command to continue."
		//remember to code item code
		],
		"east6b" => [
		"name" => "FIGHT 8",
		"1" => "north1",
		"2" => "north1",
		"3" => "north1",
		"4" => "north1",
		"text" => "You fight Skrillex. Or at least, you try to. You punch him in the face and he starts crying. 
		You feel kind of bad now. You just beat up a scrawny emo kid. He didn't deserve this. He was just being nice to you. You're a real monster. 
		You don't really know how to deal with this. You jump back in the water and swim to shore yourself.
		You then head north towards the capital. Enter any command to continue."
		],
		"east6c" => [
		"name" => "DROP THE BASS",
		"1" => "north1",
		"2" => "north1",
		"3" => "north1",
		"4" => "north1",
		"text" => "You take Skrillex's BASS and DROP IT BACK IN THE WATER. 
		He asks you why you did that. He says that it took him all day to catch that bass. 
		 He calls you a real jerk, but still gives you a ride back to shore. The ride is really awkward though. 
		 You then head north towards the capital. Enter any command to continue."
		],
		"north1" => [
		"name" => "NORTH",
		"1" => "north2",
		"2" => "north1b",
		"text" => "You now head north.The far north is a barren wasteland, mostly inhabited by the snake people (or Sneople) and compulsive meme addicts. 
		You can't walk two feet without getting 'trolled' or 'memed on'. It's a horrible place, and not many survive. The place abosolutely disgusts you. 
		Enter 1 to look for the capital building, and enter 2 to find a memer and FIGHT THEM."
		],
		"north1b" => [
		"name" => "FIGHT 9",
		"1" => "north2",
		"2" => "north1b2",
		"text" => "You find a random guy and punch them in the face. You're now one step coser to achieving your goal. You are truly an American hero. 
		Now that you got that out of your system, you can go find the capital building....<br>or, maybe you could keep doing his for a while. 
		Enter 1 to look for the capital building, an enter 2 to find another memer and FIGHT THEM TOO."
		],
		"north1b2" => [
		"name" => "FIGHT 9",
		"1" => "north2",
		"2" => "north1b",
		"text" => "You find a random guy and punch them in the face. You're now one step coser to achieving your goal. You are truly an American hero. 
		Now that you got that out of your system, you can go find the capital building....<br>or, maybe you could keep doing his for a while. 
		Enter 1 to look for the capital building, an enter 2 to find another memer and FIGHT THEM TOO."
		],
		"north2" => [
		"name" => "UH",
		"1" => "snake1",
		"2" => "cat1",
		"text" => "Uh, yeah, you WOULD do that. If you knew where the capital building even is. You didn't exactly get the most reliable directions. 
		Time to look for a little assistance on your quest. Enter 1 to look for someone on the roads, and enter 2 to look for someone in the forest."
		],
		"snake1" => [
		"name" => "ROADS",
		"1" => "snake2a",
		"2" => "snake2b",
		"text" => "You look on the roads and see a snake person off in the distance. Enter 1 to ponder why there is a snake person??? Enter 2 to FIGHT THE SNAKE."
		],
		"snake2a" => [
		"name" => "SNERSON",
		"1" => "snake3a",
		"2" => "snake3b",
		"3" => "snake2b",
		"text" => "In the future, snake people (or Sneople) are very common in the north. Not to be confused with furries, Sneople are really no different from any of us. 
		Snake-Americans have full rights, and live peacefully amongst humans in the north. However, not everyone likes the peaceful Sneople. 
		Years of predjudices have caused the Sneople to grow a bit defensive towards humans. Enter 1 to stay away from the possibly aggressive snake person, (or snerson), 
		enter 2 to risk approaching and ask for advice, and enter 3 to FIGHT THE SNAKE."
		],
		"snake3a" => [
		"name" => "STAY AWAY",
		"1" => "capital1",
		"2" => "capital1",
		"3" => "capital1",
		"4" => "capital1",
		"text" => "It's probably too dangerous to go near the snerson. You don't really want to fight a giant snake, and the snerson was just minding their own business anyway. 
		Time to continue on your quest. Enter any command to continue."
		],
		"snake3b" => [
		"name" => "SNERSON",
		"1" => "capital1",
		"2" => "capital1",
		"3" => "capital1",
		"4" => "capital1",
		"text" => "Fortunately, this snerson is friendly. You ask the snerson about the location of the capital building. 
		The snerson replies that the Sneople control the government on the highest level, so of course he knows the exact location. 
		He directs you to the capital building, and wishes you luck on your quest. Enter any command to continue."
		],
		"snake2b" => [
		"name" => "FIGHT",
		"1" => "capital1",
		"2" => "capital1",
		"3" => "capital1",
		"4" => "capital1",
		"text" => "You FIGHT the snake person. And wow, that was a big mistake. You don't fight giant anthopomorphic snake, are you crazy? 
		He beats you up, and takes all your money. Nice going."
		],
		"cat1" => [
		"name" => "FOREST",
		"1" => "cat2",
		"2" => "cat1b",
		"text" => "You look around in the forest when suddenly, the ground starts to shake. A hole in the ground opens up before you. You look down it. You cannot see the bottom. 
		You notice the hole is oddly person shaped, and draws you toward it. This is your hole. This hole was made for you. Enter 1 to jump down the hole, and enter 2 to not do that."
		],
		"cat1b" => [
		"name" => "JUMP",
		"1" => "cat2",
		"2" => "cat2",
		"3" => "cat2",
		"4" => "cat2",
		"text" => "Why would you jump down the hole? Seems dangerous to you, and besides, you have a quest to get back to. 
		Unfortunately, an aftershock of the earthquake just so happens to throw you into the hole anyway. Enter any command to continue."
		],
		"cat2" => [
		"name" => "HOLE",
		"name" => "HOLE",
		"1" => "cat3a",
		"2" => "cat3b",
		"text" => "Well, that was stupid. You're just in a hole now. You try to jump out, but it's too late. You're stuck. 
		You look around. This hole was a lot bigger than you thought it was. Looks to you like it's actually some kind of underground catacomb system. 
		You found a way in, so there must be a way out, right? Enter 1 to call for help, enter 2 to look for another way out."
		],
		"cat3a" => [
		"name" => "CALL FOR HELP",
		"1" => "cat4",
		"2" => "cat4",
		"3" => "cat4",
		"4" => "cat4",
		"text" => "You call for help, but it doesn't do much. No one can hear you down here. Or, so you thought. 
		Suddenly, you hear a loud noise coming from all around you. It sounds like...hundreds, no, thousands, of cats."
		],
		"cat3b" => [
		"name" => "LOOK FOR A WAY OUT",
		"1" => "cat4",
		"2" => "cat4",
		"3" => "cat4",
		"4" => "cat4",
		"text" => "You look around for another way out. You think you see a light in the distance, so you head towards it. 
		Something soft brushes up against your leg. When you go to touch it, you hear the subtle noise of...purring?"
		],
		"cat4" => [
		"name" => "CATacombs",
		"1" => "cat5",
		"2" => "cat5b",
		"text" => "My god, it's worse than you thought. You're not in any normal catacombs, but the CATacombs. 
		This is where all cat memes go once they stop being popular. They live hear, in harmony, with other old cat memes. 
		The small felines have you surrounded. This is terrible. You have to get out of here. Ceiling cat pokes it's head out of the ceiling and meows at you.<br>
		On second thought, this is adorable, and the exact opposite of a problem. Enter 1 to look for the eternal lolcat sages, enter 2 to FIGHT A CAT."
		],
		"cat5b" => [
		"name" => "ARE YOU NUTS",
		"1" => "cat5",
		"1" => "cat5",
		"1" => "cat5",
		"1" => "cat5",
		"text" => "Are you crazy? Why on Earth would you want to fight a cat? They're so soft and cute, and they aren't bothering anybody. 
		Besides, you would probably lose anyway. There's like 5000 of them and they're all kinda dangerous when provoked."
		],
		"cat5" => [
		"name" => "HAS CHEEZBERGER",
		"1" => "cat6",
		"1" => "cat6",
		"1" => "cat6",
		"1" => "cat6",
		"text" => "You ask the cats if their leaders, the eternal lolcat sages, are here. 
		Most of them don't really speak English though. And the ones that do mostly speak really broken English, 
		such as 'has cheezberger' and such. It's kind of hard to understand them, but man are they adorable."
		],
		"cat6" => [
		"name" => "CAT SAGES",
		"1" => "cat7",
		"1" => "cat7",
		"1" => "cat7",
		"1" => "cat7",
		"text" => "After a few moments of asking around and deciphering broken cat-english, you find the eternal lolcat sages. 
		You approach them cautiously, asking for advice on your quest. Unsure of whether or not they will help you. 
		They are memes, so does that mean that they would like the memelord? But, they're harmless, and have been around since long before the memelord took control of the world.
		Enter any command to continue."
		 ],
		 "cat7" => [
		"name" => "ESCAPE",
		"1" => "capital1",
		"2" => "capital1",
		"3" => "capital1",
		"4" => "capital1",
		"text" => "Luckily, the lolcat sages think that your quest is noble, and that the memelord has tainted the good name of memes. 
		Memes like the lolcats wish to live in peace, on 40 year old suburban moms' facebook pages. 
		The lolcats want no part of the meme wars that the Evil Memelord has started. They lead you out of the CATacombs and wish you luck on your quest."
		],
		"capital1" => [
		"name" => "OUTSIDE AGAIN",
		"1" => "capital2",
		"2" => "capital1b",		
		"text" => "You once again gaze out onto the large capital building before you. You've finally made it. 
		It was a long journey, but it's not ever yet. The Evil Memelord is at the top of the capital building. 
		You have to survive the journey up there if you want to face the tyrant. Enter 1 to go inside, and enter 2 to stay outside for a little while."
		],
		"capital1b" => [
		"name" => "OUTSIDE AGAIN",
		"1" => "capital2",
		"2" => "capital1b",		
		"text" => "You decide to stay out here for a little while longer.<br>...<br>...<br>...<br>Well, that was fufilling. Enter 1 to go inside now, and enter 2 to stay outside for a little while longer."
		],
		"capital2" => [
		"name" => "WAIT",
		"1" => "capital3",
		"2" => "capital3",
		"3" => "capital3",
		"4" => "capital3",
		"text" => "'Every journey begins with a single step.' You feel like someone important said that. You step inside. Wait, are those the Beatles?<br>
		Oh wow, those ARE The Beatles! They're just standing behind the front gate. Waiting for people to enter. That's kinda weird, you guess. 
		But hey, it's such an honor to meet The Beatles! They're practically your HEROS and--"
		],
		"capital3" => [
		"name" => "WAIT",
		"1" => "capital4b",
		"2" => "capital4a",
		"text" => "Ringo Starr just punches you in the face.<br> You have a tough decision ahead of you. 
		Enter 1 to accept defeat at the hands of Ringo Starr and The Beatles, and enter 2 to FIGHT THE BEATLES."
		],
		"capital4a" => [
		"name" => "YOU'RE A MONSTER",
		"1" => "capital5",
		"2" => "capital5",
		"3" => "capital5",
		"4" => "capital5",
		"text" => "Wow, okay, you just beat up The Beatles, you monster. You think that fighting everyone gets you a prize? Well too bad, it doesn't. 
		It just gets you the guilt of having beat up music icons. Whatever though, being realistic here, those probably weren't the real Beatles. I mean, probably anyway. 
		You can tell yourself that. Whatever helps you sleep at night. Time to continue on your quest. Enter any command to continue."
		],
		"capital4b" => [
		"name" => "YOU'RE A LOSER",
		"1" => "capital4b2",
		"2" => "capital4b2",
		"3" => "capital4b2",
		"4" => "capital4b2",
		"text" => "Wow, okay, you admit defeat, huh? After all this, you just can't bear the thought of hurting the great and mighty 'Beatles'?
		I bet you think you're about to win some prize for being so 'peaceful' and 'noble' for not fighting music legends. 
		Well too bad, you don't. You could've taken them easy. I bet Paul McCartney can't even take a punch. 
		George Harrison handcuffs you and leads you to gay baby jail, the dungeon. Enter any commmand to continue."
		],
		"capital4b2" => [
		"name" => "GAY BABY JAIL",
		"1" => "capital4b3a",
		"2" => "capital4b3b",
		"text" => "You are now in gay baby jail, the dungeon. Well this sure does stink. You haven't been in the capital building for 5 minutes and you already got caught. 
		Enter 1 to try and work together with the other prisoners, and enter 2 to FIGHT another prisoner."
		],
		"capital4b3b" => [
		"name" => "FIGHT",
		"1" => "capital4b3a",
		"2" => "capital4b3b",
		"text" => "You FIGHT another prisoner. Nothing really happens though. You fight him, but there's no real lasting effect. 
		That's probably some kind of commentary on how the prison system works, but you don't really feel like thinking about it too deeply. 
		Enter 1 to try and work together with the other prisoners, and enter 2 to FIGHT another prisoner."
		],
		"capital4b3a" => [
		"name" => "JAILBREAK",
		"1" => "capital5",
		"2" => "capital5",
		"3" => "capital5",
		"4" => "capital5",
		"text" => "Since you're stuck in gay baby jail with a bunch of hardened war criminals, teamwork is probably the best idea. You stand up on a table and call everyone's attention. 
		You begin to make an inspiring speech about teamwork and how you all want to destroy the evil memelord, so why not do it together. 
		The speech is really quite inspiring. You rally your troops and storm the guards. You quest is coming to an end, and the final battle is almost upon you. Enter any command to continue."
		],
		"capital5" => [
		"name" => "SJW GUARDS",
		"1" => "capital6",
		"2" => "capital6b",
		"text" => "You fight your way though hoards of Memeguards. You are fueled by your passion and hatred for the Evil Memelord. Measley Memeguards are no match for your power--
		<br>Oh no, is that...?<br>It is. It's the social justice warrior police. The Evil Memelord's last line of defense. Enter 1 to FIGHT the sjw police, and enter 2 to remember something important."
		],
		"capital6" => [
		"name" => "FIGHT",
		"1" => "capital7",
		"2" => "capital7",
		"3" => "capital7",
		"4" => "capital7",
		"text" => "You FIGHT the sjw police. You win. Wow, that was a lot easier than you thought it would be. 
		But you suppose that that's because this battle was virtually pointless in the grand scheme of things, 
		and that at this point everyone's just waiting for the final battle with the Evil Memelord. 
		You try not to dwell on this, and continue ahead."
		 ],
		 "capital6b" => [
		"name" => "IMPORTANT",
		"1" => "capital7",
		"2" => "capital7",
		"3" => "capital7",
		"4" => "capital7",
		"text" => "You can't remember what you were trying to remember. This means that you probably did not make the right choice on your quest. 
		You just fight the sjw police. Yeah, you could have done that all along, but it was more fun to do it in a cool way. You continue on. Enter any command to continue."
		 ],
		 "capital7" => [
		"name" => "DOOR",
		"1" => "capital8",
		"2" => "end1",
		"text" => "You continue up to the door of the Evil Memelord's throne room. Unfortunately, it's locked, you need a secret code to enter. 
		Enter 1 to use the secret code, and enter 2 to try and break the lock."
		],
		"end1" => [
		"name" => "BAD END",
		"1" => "bg1",
		"2" => "bg1",
		"3" => "bg1",
		"4" => "bg1",
		"text" => "You cannot break the lock, and you waste too much time trying. Well, this is it. You can't fight the Evil Memelord if you cannot reach the Evil Memelord. 
		The sjw police take you to the dungeon. You tried so hard, and got so far, but in the end, it doesn't even matter.<br><br>Enter any command to play again."
		],
		"capital8" => [
		"name" => "MEMELORD",
		"1" => "end2",
		"2" => "capital9",
		"text" => "You've made it. You stand before the Evil Memelord at the top of the capital building. 
		The Evil Memelord congratulates you for getting this far, and says that not many have what it takes to face them. 
		So the Evil Memelord offers you a deal. You can join the meme side, and have everything you've ever wanted, or to FIGHT the Evil Memelord, and risk losing it all. 
		Enter 1 to join the meme side, and enter 2 to FIGHT THE EVIL MEMELORD."
		],
		 "end2" => [
		"name" => "BAD END",
		"1" => "bg1",
		"2" => "bg1",
		"3" => "bg1",
		"4" => "bg1",
		"text" => "The Evil Memelord is right. You could never defeat a power as great as this. You were just fooling yourself. 
		You take the Evil Memelord's hand. It's time for you to take your rightful place among the meme side. 
		You and the Evil Memelord tule side by side for the rest of your lives. 
		Until years later, when the Evil Memelord poisons your caesar salad, and you die.<br>Enter any command to play again."
		 ],
		"capital9" => [
		"name" => "FIGHT",
		"1" => "capital10",
		"2" => "capital10",
		"3" => "capital10",
		"4" => "capital10",
		"text" => "After all you've been through, you can't stop here. You came here to FIGHT the Evil Memelord, and that's just what you'll do. 
		You let out a battle cry as you refuse the Evil Memelord's offer and rush towards the tyrant. Enter any command to continue."
		],
		"capital10" => [
		"name" => "FIGHT",
		"1" => "capital11",
		"2" => "capital11",
		"3" => "capital11",
		"4" => "capital11",
		"text" => "You FIGHT the Evil Memelord. It's really quite the epic battle. And you're right in the middle of it. 
		
		You hope someone's filming this because the recording needs to be put in a museum under greatest battle of all time. 
		And passed down for generations. It needs to be mandetory in schools to watch it every day, because you have not truly lived until you see this battle, 
		and anyone who will never have the priviledge to see it will die an unfilled, empty shell of a human.<br><br>Seriously, it's a really, really cool fight."
		],
		"capital11" => [
		"name" => "MERCY",
		"1" => "end3",
		"2" => "capital12",
		"text" => "You are unable to finish off the Evil Memelord. The Evil Memelord kneels before you, nearly defeated, and begs you to spare them. 
		However, may simply be a trick to get you to let your guard down. Enter 1 to have mercy on the Evil Memelord, and enter 2 to FINISH HIM."
		],
		"end3" => [
		"name" => "END",
		"1" => "bg1",
		"2" => "bg1",
		"3" => "bg1",
		"4" => "bg1",
		"text" => "You have mercy and allow the Memelord to escape, banished from the Meme Kingdom. However, the Evil Memelord just goes downstairs to get the sjw police to arrest you. 
		You shouldn't have trusted the Evil Memelord. You knew this would happen. And now you're in the dungeon, where you will remain for eternity.<br><br>Enter any command to play again."
		],
		"capital12" => [
		"name" => "FIGHT",
		"1" => "enda",
		"2" => "end4",
		"text" => "You've done it, you've defeated the evil memelord. What are you going to do now? The world is without a leader. 
		You take the crown from the defeated Evil Memelord. It's your responsibility now. Our journey ends here, my friend. 
		You're the leader now.<br>...<br>....Or ar you? Enter 1 to rule over the Meme Kingdom yourself, and enter 2 to not do that."
		],
		"end4a" => [
		"name" => "OKAY END",
		"1" => "end4",
		"2" => "end4",
		"3" => "end4",
		"4" => "end4",
		"text" => "...On second thought, you don't really want to be a leader. You've come this far to liberate the world if an evil tyrant, so you don't want to risk becoming one yourself. 
		You tried to fight as few people as you could on the way here, after all. You should probably talk with the sjw police about forming some kind of democracy, 
		and maybe form a senate of sorts."
		],
		"end4" => [
		"name" => "OKAY END",
		"1" => "bg1",
		"2" => "bg1",
		"3" => "bg1",
		"4" => "bg1",
		"text" => "You are a real diplomat. Which is cool, you guess. I mean, no one writes sci-fi novels about the wonders of democracy. 
		This story just stopped being a cool adventure and is now something out of a history textbook. But hey, at least no one is going to get hurt this way, so you guess you did alright.
		<br><br>Enter any command to play again."
		],
		"enda" => [
		"name" => "END",
		"1" => "endb",
		"2" => "endb",
		"3" => "endb",
		"4" => "endb",
		"text" => "You decided to rule over the Meme Kingdom yourself. Years later, you look down from your throne. 
		You're the Evil Memelord now. Power has corrupted you. Your minions fear you, as they should. 
		You now reign over the world with an evil regime far worse than your predesessor ever did. 
		You walk outside to your balcony and gaze over your empire. It's truly beautiful. But, you grow tired with ruling over a kingdom of memes. They're all weak. Not like you. 
		But it's lonely at the top. You long for someone to fight, as you once did. 
		You look out upon the world. Your world."
		],
		"endb" => [
		"name" => "END",
		"1" => "end",
		"2" => "end",
		"3" => "end",
		"4" => "end",
		"text" => "What's that? That big ball of fire in the sky. You don't like the way it's looking at you. You stare at it for a moment, and your eyes begin to hurt. 
		Did that thing just hurt you? That's high treason, and you will not stand for it. 
		You don't have to take this. You fought the Evil Memelord, and won. You can do anything you want. 
		And you want that thing gone.<br><br>Enter any command to fight the sun."
		],
		"end" => [
		"name" => "END",
		"1" => "bg1",
		"2" => "bg1",
		"3" => "bg1",
		"4" => "bg1",
		"text" => "Enter any command to play again."
		],
		
		];
		$_SESSION['maps']=$maps;
		
		//use serialize on $maps
		//use file_put_contents with the serialized data to put it into a new text file
		$string=serialize($maps);
		$file=fopen("maps.txt", "a");
		fclose($file);
		file_put_contents("maps.txt",$string);
		?>
		</html>