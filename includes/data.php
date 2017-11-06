<?php

// ===== NAV ITEMS =====
	$navItems = array(
		array(
			"slug"	=> "index.php",
			"title"	=> "Home"
		),
		array(
			"slug"	=> "rides.php",
			"title"	=> "Coasters"
		),
		array(
			"slug"	=> "sights.php",
			"title"	=> "Sights"
		),
		array(
			"slug"	=> "contact.php",
			"title"	=> "Contact"
		),
	);


	// ===== SIGHTS =====
	$sights = array(

		array(
			"name" => "Entrance",
			"location" => "Main Entrance",
			"blurb" => "The sight of those words filled me with such joy when I was little. My parents always took us on \'GE Day\' and it was the highlight of my year, every year.",
			"image"	=> "sign-at-entrance-300x180"
		),

		array(
			"name" => "The Eiffel Tower",
			"location" => "Park Center",
			"blurb" => "One-third the size of the real-deal, this was where my parents always told us to go if we ever got lost at the park. Great views from the platform at the top.",
			"image"	=> "eiffel-night-300x180"
		),

		array(
      "name" => "Festhaus",
      "location" => "Oktoberfest",
      "blurb" => "The inside of this place is kind of sad, now (it hosts walk-up counters for purchasing fast food from couple of chain restaurants). The photo was so cool, though, that I had to include it.",
			"image"	=> "festhaus-300x180"
			 ),

		array(
      "name" => "The Fountains",
      "location" => "International Street",
      "blurb" => "This part of the park hasn\'t changed much since I was a kid (though, happily, one of the modern additions to this area is a <em>Graeter\'s</em>).",
			"image"	=> "fountains-day-300x180"
			 ),

			 array(
 	      "name" => "Games & Arcades",
 	      "location" => "Old Coney",
 	      "blurb" => "This part of the park hasn't changed much since I was a kid. Strolling along here, you will find funnel-cake stands, tchotchke-vendors, and old-timey games of skill where you can win a stuffed animal.",
 				"image"	=> "coney-300x180"
 				 ),

	 		 array(
				"name" => "The Monster",
				"location" => "Coney Mall",
				"blurb" => "This, the Scrambler and the Dodgem bumper cars were three non-coaster rides that I enjoyed as a kid. I tried this one out again when I visited the park last summer, and it had lost none of its luster.",
			 "image"	=> "monster-300x180"
		 ),

		 array(
				 "name" => "K.I. & Miami Valley Railroad",
				 "location" => "Rivertown",
				 "blurb" => "Every visit to Kings Island had to include some downtime on the very chill railroad. Back then, it had animatronic attackers hidden in the brush. Nowadays, it provides transportation to and from the water park.",
				 "image"	=> "railroad-300x180"
			 )



   );


	// ===== RIDES =====
	$rides = array(

		"backlot" => array(

			"name"	=> "Backlot Stunt Coaster",
      "max-speed"	=> "40 mph",
      "duration"	=> "1 minute 4 seconds",
      "location"	=> "Coney Mall",
      "blurb"	=> "This is pretty mellow as far as the Kings Island coasters go, but it\'s a blast (literally - gigantic flames shoot out at you during part of it).",
			"image"	=> "rc-backlot-300x180"
		),

		"banshee" => array(

			"name"	=> "Banshee",
      "max-speed"	=> "68 mph",
      "duration"	=> "2 minutes 40 seconds",
			"location"	=> "Action Zone",
      "blurb"	=> "This coaster is so intense, they require you to empty all loose items into nearby lockers before boarding. Even fanny packs.",
			"image"	=> "rc-banshee-300x180"
		),

		"bat" => array(

			"name"	=> "The Bat",
      "max-speed"	=> "51 mph",
      "duration"	=> "1 minute 52 seconds",
			"location"	=> "Action Zone",
      "blurb"	=> "So. Much. Fun. This is a hanging/swinging coaster, and it looks like you are going to crash into the uprights at every turn. Best of all, because it\'s at the far corner of the park, the line is often ridiculously short.",
			"image"	=> "rc-bat-300x180"
		),

    "beast" => array(

      "name"	=> "The Beast",
      "max-speed"	=> "64.78 mph",
      "duration"	=> "4 minutes 10 seconds",
			"location"	=> "Rivertown",
      "blurb"	=> "Ah, the Beast. Enormous. Roaringly loud. Terrifying. FUN! No one who has been on it can forget the teeth-rattling experience of blasting into the wooden spirals. Always a long line. Always worth it.",
      "image"	=> "rc-beast-300x180"
    ),

		"delirium" => array(

			"name"	=> "Delirium",
      "max-speed"	=> "n/a",
      "duration"	=> "2 minutes 30 seconds",
			"location"	=> "Action Zone",
      "blurb"	=> "Yes, it looks like a giant immersion blender and, no, it isn\'t technically a coaster...but it\'s so much fun! I noticed with dismay, though, that a ride just like this one broke free and killed someone at a the Ohio State Fair last year.",
			"image"	=> "rc-delirium-300x180"
		),

		"diamondback" => array(

			"name"	=> "Diamondback",
      "max-speed"	=> "80 mph",
      "duration"	=> "3 minutes",
			"location"	=> "Rivertown",
      "blurb"	=> "This coaster is insane. The initial drop looks concave from its crest, and it hits a peak speed of 80 mph. The splash of water at the end is a nice touch. I think I rode this one more than any of the others when I visited the park last summer.",
			"image"	=> "rc-diamondback-300x180"
		),

		"firehawk" => array(

			"name"	=> "Firehawk",
      "max-speed"	=> "50 mph",
      "duration"	=> "2 minutes 10 seconds",
			"location"	=> "Coney Mall",
      "blurb"	=> "When I talked my friend Joe into trying this one, he spent the entire ride screaming, \'WHAT?!?!?!\' with a mixture of horror, anger and dismay. Good times.",
			"image"	=> "rc-firehawk-300x180"
		),

		"fear" => array(

			"name"	=> "Flight of Fear",
      "max-speed"	=> "54 mph",
      "duration"	=> "2 minutes 24 seconds",
			"location"	=> "Coney Mall",
      "blurb"	=> "This is Kings Islands\' only indoor rollercoaster. It has a different feel from the others - a lot of the thrill comes from the darkness, and not being able to see what you are hurtling towards. I also expect that it\'s a great way to stay dry if a rainshower breaks out while you are visiting the park.",
			"image"	=> "rc-ffear-300x180"
		),

		"invertigo" => array(

			"name"	=> "Invertigo",
      "max-speed"	=> "50 mph",
      "duration"	=> "1 minute 30 seconds",
			"location"	=> "Action Zone",
      "blurb"	=> "Though it isn\'t as long as some of the other rides, this was probably my favorite. The shorter-than-average lines have something to do with it, yes, but it packs a big punch in a modest amount of time. A good strategy for this one is to have a friend go into the gate next to you on the loading platform: This allows you to be face-to-face during the ride so you can watch one another screaming.",
			"image"	=> "rc-invertigo-300x180"
		),

		"mystic" => array(

			"name"	=> "Mystic Timbers",
      "max-speed"	=> "53 mph",
      "duration"	=> "2 minutes (approx.)",
			"location"	=> "Rivertown",
      "blurb"	=> "This is the newest coaster at Kings Island. It was still under construction when I went last year. Totally plausible excuse to go back next summer.",
			"image"	=> "rc-mystic-300x180"
		),

		"racer" => array(

			"name"	=> "The Racer",
      "max-speed"	=> "53 mph",
      "duration"	=> "2 minutes",
			"location"	=> "Coney Mall",
      "blurb"	=> "This was the ultimate coaster when I was a little kid. The unique 2-track design still appeals: you never know if the red cars or blue cars will finish first. Loads of fun.",
			"image"	=> "rc-racer-300x180"
		),

		"vortex" => array(

			"name"	=> "Vortex",
			"max-speed"	=> "55 mph",
			"duration"	=> "2 minutes 30 seconds",
			"location"	=> "Coney Mall",
			"blurb"	=> "This is probably my fourth favorite coaster at Kings Island, behind Invertigo, Banshee and Diamondback. It\'s definitely right up there for sheer number of inversions (six, to Banshee\'s seven). They have cubbies at the ride platform to hold your loose items while you get tossed about. I actually got thrown so hard I lost an earring.",
			"image"	=> "rc-vortex-300x180"
		)
  ); // rides

?>
