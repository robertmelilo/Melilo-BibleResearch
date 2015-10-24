<!DOCTYPE html>
<html>
<head>
	<title>Bible Research</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<script src="asset/js/jquery-1.11.3.min.js"></script>
  	<script src="asset/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src = "asset/js/style.js"></script>
</head>
<body>
<div class = "header-navigation">
	<div class="container">
		<div class="col-md-1">
			<img src="asset/img/Bible.png" class="bible-logo pull-left">
		</div>
		<div class="col-md-3">
			<h1 class = "font1 pull-right">Bible Research</h1>
		</div>
	</div>
</div>
<div class = "container">
	<div class="row">
		<div class = "col-md-5">
			<ul class = "nav nav-tabs">
				<li class = "active"><a data-toggle="tab" href="#old">Old Testament</a></li>
				<li><a data-toggle="tab" href="#new">New Testament</a></li>
			</ul>
			<div class="tab-content">
				<div id = "old" class="tab-pane active">
					<table class="table table-default">
					<?php 

						$old_testament = array(0,'Genesis', 'Exodus', 'Leviticus', 'Numbers', 'Deuteronomy','Joshua','Judges','Ruth',
						'1 Samuel', '2 Samuel', '1 Kings', '2 Kings', '1 Chronicles', '2 Chronicles', 'Ezra', 'Nehemiah', 'Esther', 
						'Job', 'Psalms', 'Proverbs', 'Ecclesiastes', 'Song of Solomon', 'Isaiah', 'Jeremiah', 'Lamentations', 
						'Ezekiel', 'Daniel', 'Hosea', 'Joel', 'Amos', 'Obadiah', 'Jonah', 'Micah', 'Nahum', 'Habakkuk', 'Zephaniah', 
						'Haggai', 'Zechariah', 'Malachi');

						$old_read = array(0, 'genesisRead', 'exodusRead', 'leviticusRead', 'numbersRead', 'deuteronomyRead', 'joshuaRead',
							'judgesRead', 'ruthRead', '1samuelRead', '2samuelRead', '1kingRead', '2kingRead', '1chroniclesRead', '2chroniclesRead',
							'ezraREad', 'nehemiahRead', 'estherRead', 'jobRead', 'psalmsRead', 'proverbsRead', 'ecclesiastesRead', 'songRead', 
							'isaiahRead', 'jeremiahRead', 'lamentationsRead','ezekielRead', 'danielRead', 'hoseaRead', 'joelRead', 'amosRead', 
							'obadiahRead', 'jonahRead', 'micahRead', 'nahumRead', 'habakkukRead', 'zephaniahRead', 'haggaiRead', 'zechariahRead', 
							'malachiRead');

						$old_info = array(0, 'genesisInfo', 'exodusInfo', 'leviticusInfo', 'numbersInfo', 'deuteronomyInfo', 'joshuaInfo',
							'judgesInfo', 'ruthInfo', '1samuelInfo', '2samuelInfo', '1kingInfo', '2kingInfo', '1chroniclesInfo', '2chroniclesInfo',
							'isaiahInfo', 'jeremiahInfo', 'lamentationsInfo', 'ezekielInfo', 'danielInfo', 'hoseaInfo', 'joelInfo', 'amosInfo',
							'obadiahInfo', 'jonahInfo', 'micahInfo', 'nahumInfo', 'habakkukInfo', 'zephaniahInfo', 'haggaiInfo', 'zechariahInfo',
							'malachiInfo');

						$old_watch = array(0, 'genesisW', 'exodusW', 'leviticusW', 'numbersW', 'deuteronomyW', 'joshuaW', 
							'judgesW', 'ruthW', '1samuelW', '2samuelW', '1kingW', '2kingW', '1chroniclesW', '2chroniclesW',
							'isaiahW', 'jeremiahW', 'lamentationsW', 'ezekielW', 'danielW', 'hoseaW', 'joelW', 'amosW',
							'obadiahW', 'jonahW', 'macahW', 'nahumW', 'habakkuW', 'zephaniahW', 'haggaiW', 'zechariahW',
							'malachiW');

						for ($i = 1; $i <= 39; $i++) {
					?>
						<tr>
							<td>
								<?php echo $old_testament[$i]; ?>
							</td>
							<td>
								<a id = "<?php echo $old_read[$i]; ?>" href="#" class="btn btn-primary">Read</a>
							</td>
							<td>
								<a id = "<?php echo $old_info[$i]; ?>"href="#" class="btn btn-info">Info</a>
							</td>
							<td>
								<a id = "<?php echo $old_watch[$i] ?>" href="#" class="btn btn-warning">Watch</a>
							</td>
						</tr>
					<?php
						}
					 ?>
					 </table>
				</div>
				<div id = "new" class="tab-pane fade">
					<table class='table table-default'>
					<?php 
						$new_testament = array(0,'Matthew', 'Mark', 'Luke', 'John', 'Acts (of the Apostles)', 'Romans', 
							'1 Corinthians', '2 Corinthians', 'Galatians', 'Ephesians', 'Philippians', 'Colossians', 
							'1 Thessalonians', '2 Thessalonians', '1 Timothy', '2 Timothy', 'Titus', 'Philemon', 'Hebrews', 
							'James', '1 Peter', '2 Peter', '1 John', '2 John', '3 John', 'Jude', 'Revelation');

						for ($x = 1; $x <= 27; $x++) {
					?>
						<tr>
							<td>
								<?php echo $new_testament[$x]; ?>
							</td>
							<td>
								<a href="#" class="btn btn-primary">Read</a>
							</td>
							<td>
								<a href="#" class="btn btn-info">Info</a>
							</td>
							<td>
								<a href="#" class="btn btn-warning">Watch</a>
							</td>
						</tr>
					<?php
						}

					 ?>
					 </table>
				</div>
			</div>
		</div>
		<div class = "col-md-7 resultAll">
			<div id = "imageBible">
				<img src="asset/img/holy_bible.png">
			</div>
			<div id = "resultgenesisRead" hidden>
				<h1>Genesis</h1>
				<p>
					1 : 1 In the beginning God created the heaven and the earth. <br/>

					1 : 2 And the earth was without form, and void; and darkness was upon the face of the deep. And the Spirit of God moved upon the face of the waters.<br/>

					1 : 3 And God said, Let there be light: and there was light.<br/>

					1 : 4 And God saw the light, that it was good: and God divided the light from the darkness. <br/>

					1 : 5 And God called the light Day, and the darkness he called Night. And the evening and the morning were the first day. <br/>

					1 : 6 And God said, Let there be a firmament in the midst of the waters, and let it divide the waters from the waters. <br/>

					1 : 7 And God made the firmament, and divided the waters which were under the firmament from the waters which were above the firmament: and it was so. <br/>

					1 : 8 And God called the firmament Heaven. And the evening and the morning were the second day. <br/>

					1 : 9 And God said, Let the waters under the heaven be gathered together unto one place, and let the dry land appear: and it was so. <br/>

					1 : 10 And God called the dry land Earth; and the gathering together of the waters called he Seas: and God saw that it was good. <br/>

				</p>
			</div>
			<div id = "resultexodusRead" hidden>
				<h1>Exodus</h1>
				<p>
					1 : 1 Now these are the names of the children of Israel, which came into Egypt; every man and his household came with Jacob. <br/>

					1 : 2 Reuben, Simeon, Levi, and Judah, <br/>

					1 : 3 Issachar, Zebulun, and Benjamin, <br/>

					1 : 4 Dan, and Naphtali, Gad, and Asher. <br/>

					1 : 5 And all the souls that came out of the loins of Jacob were seventy souls: for Joseph was in Egypt already. <br/>

					1 : 6 And Joseph died, and all his brethren, and all that generation. <br/>

					1 : 7 And the children of Israel were fruitful, and increased abundantly, and multiplied, and waxed exceeding mighty; and the land was filled with them. <br/>

					1 : 8 Now there arose up a new king over Egypt, which knew not Joseph. <br/>

					1 : 9 And he said unto his people, Behold, the people of the children of Israel are more and mightier than we: <br/>

					1 : 10 Come on, let us deal wisely with them; lest they multiply, and it come to pass, that, when there falleth out any war, they join also unto our enemies, and fight against us, and so get them up out of the land. <br/>
				</p>
			</div>
			<div id = "resultleviticusRead" hidden>
				<h1>Leviticus</h1>
				<p>
					1 : 1 And the Lord called unto Moses, and spake unto him out of the tabernacle of the congregation, saying, <br/>

					1 : 2 Speak unto the children of Israel, and say unto them, If any man of you bring an offering unto the Lord, ye shall bring your offering of the cattle, even of the herd, and of the flock. <br/>
					
					1 : 3 If his offering be a burnt sacrifice of the herd, let him offer a male without blemish: he shall offer it of his own voluntary will at the door of the tabernacle of the congregation before the Lord. <br/>

					1 : 4 And he shall put his hand upon the head of the burnt offering; and it shall be accepted for him to make atonement for him. <br/>

					1 : 5 And he shall kill the bullock before the Lord: and the priests, Aaron's sons, shall bring the blood, and sprinkle the blood round about upon the altar that is by the door of the tabernacle of the congregation. <br/>

					1 : 6 And he shall flay the burnt offering, and cut it into his pieces. <br/>

					1 : 7 And the sons of Aaron the priest shall put fire upon the altar, and lay the wood in order upon the fire: <br/>

					1 : 8 And the priests, Aaron's sons, shall lay the parts, the head, and the fat, in order upon the wood that is on the fire which is upon the altar: <br/>

					1 : 9 But his inwards and his legs shall he wash in water: and the priest shall burn all on the altar, to be a burnt sacrifice, an offering made by fire, of a sweet savour unto the Lord.1 : <br/>
		
					1 : 10 And if his offering be of the flocks, namely, of the sheep, or of the goats, for a burnt sacrifice; he shall bring it a male without blemish. <br/>
				</p>				
			</div>
			<div id = "resultnumbersRead" hidden>
				<h1>Numbers</h1>
				<p>
					1 : 1 And the Lord spake unto Moses in the wilderness of Sinai, in the tabernacle of the congregation, on the first day of the second month, in the second year after they were come out of the land of Egypt, saying, <br/>

					1 : 2 Take ye the sum of all the congregation of the children of Israel, after their families, by the house of their fathers, with the number of their names, every male by their polls; <br/>

					1 : 3 From twenty years old and upward, all that are able to go forth to war in Israel: thou and Aaron shall number them by their armies. <br/>

					1 : 4 And with you there shall be a man of every tribe; every one head of the house of his fathers. <br/>

					1 : 5 And these are the names of the men that shall stand with you: of the tribe of Reuben; Elizur the son of Shedeur. <br/>

					1 : 6 Of Simeon; Shelumiel the son of Zurishaddai. <br/>

					1 : 7 Of Judah; Nahshon the son of Amminadab. <br/>

					1 : 8 Of Issachar; Nethaneel the son of Zuar. <br/>

					1 : 9 Of Zebulun; Eliab the son of Helon. <br/>

					1 : 10 Of the children of Joseph: of Ephraim; Elishama the son of Ammihud: of Manasseh; Gamaliel the son of Pedahzur. <br/>
					</p>
			</div>
			<div id = "resultgenesisInfo" hidden>
					<h1>Genesis</h1>
				<p>
					The Book of Genesis (from the Latin Vulgate, in turn borrowed or transliterated from Greek γένεσις, meaning "origin"; Hebrew: 
					"In [the] beginning") is the first book of the Hebrew Bible (the Tanakh) and the Christian Old Testament.
					The basic narrative expresses the central theme: God creates the world (along with creating the first man and woman) and appoints man as his regent, 
					but man proves disobedient and God destroys his world through the Flood. The new post-Flood world is equally corrupt, but God does not destroy it, instead calling one man, Abraham, 
					to be the seed of its salvation. At God's command Abraham descends from his home into the land of Canaan, given to him by God, where he dwells as a sojourner, as does his son Isaac and his grandson Jacob. 
					Jacob's name is changed to Israel, and through the agency of his son Joseph, the children of Israel descend into Egypt, 70 people in all with their households, and God promises them a future of greatness.
					Genesis ends with Israel in Egypt, ready for the coming of Moses and the Exodus. The narrative is punctuated by a series of covenants with God, successively narrowing in scope from all mankind (the covenant with Noah) 
					to a special relationship with one people alone (Abraham and his descendants through Isaac and Jacob).
				</p>
			</div>
			<div id = "resultexodusInfo" hidden>
				<h1>Exodus</h1>
				<p>
					The Book of Exodus or, simply, Exodus (from Greek ἔξοδος, exodos, meaning "going out"; Hebrew:, Sh'mot, "Names"), is the second book of the Torah and the Hebrew Bible (the Old Testament).
					The book tells how the Israelites leave slavery in Egypt through the strength of Yahweh, the God who has chosen Israel as his people. Led by their prophet Moses they journey through the wilderness to Mount Sinai, 
					where Yahweh promises them the land of Canaan (the "Promised Land") in return for their faithfulness. Israel enters into a covenant with Yahweh who gives them their laws and instructions for the Tabernacle, the means 
					by which he will dwell with them and lead them to the land, and give them peace.
				</p>
			</div>
			<div id = "resultleviticusInfo" hidden>
				<h1>Leviticus</h1>
				<p>
					The Book of Leviticus (/lɪˈvɪtɪkəs/; from Greek Λευιτικόν, Leuitikon, meaning "relating to the Levites") is the third book of the Hebrew Bible, and the third of five books of the Torah (or Pentateuch). 
					Its Hebrew name, Hebrew: ויקרא‎, Vayikra/Wayiqra, comes from its first word, "And He called." The English name is from the Latin Leviticus, taken in turn from Greek and a reference to the Levites, the tribe of Aaron, 
					from whom the priests descended. The book, however, addresses all the people of Israel (1:2) though some passages address the priests specifically (6:8). Most of its chapters (1–7, 11–27) consist of God's speeches to Moses
					which he is commanded to repeat to the Israelites. This takes place within the story of the Israelites' Exodus after they escaped Egypt and reached Mt. Sinai (Exodus 19:1). The book of Exodus narrates how Moses led the Israelites in
					building the Tabernacle (Exodus 35–40) based on God's instructions (Exodus 25–31). Then in Leviticus, God tells the Israelites and their priests how to make offerings in the Tabernacle and how to conduct themselves while camped around
					the holy tent sanctuary. Leviticus takes place during the month or month-and-a-half between the completion of the Tabernacle (Exodus 40:17) and the Israelites' departure from Sinai (Numbers 
				</p>
			</div>
			<div id = "resultnumbersInfo" hidden>
				<h1>Numbers</h1>
				<p>
					The Book of Numbers (from Greek Ἀριθμοί, Arithmoi; Hebrew: במדבר‎, Bəmidbar, "In the desert [of]") is the fourth book of the Hebrew Bible, and the fourth of five books of the Jewish Torah.
					Numbers begins at Mount Sinai, where the Israelites have received their laws and covenant from God and God has taken up residence among them in the sanctuary. The task before them is to take possession of the Promised Land.
					The people are numbered and preparations are made for resuming their march. The Israelites begin the journey, but they "murmur" at the hardships along the way, and about the authority of Moses and Aaron. For these acts, God destroys approximately 
					15,000 of them through various means. They arrive at the borders of Canaan and send spies into the land, but upon hearing the spies' fearful report concerning the conditions in Canaan the Israelites refuse to take possession of it, and God condemns 
					them to death in the wilderness until a new generation can grow up and carry out the task. The book ends with the new generation of Israelites in the Plain of Moab ready for the crossing of the Jordan River.
				</p>
			</div>	
		</div>
	</div>
</div>   
</body>
</html>
