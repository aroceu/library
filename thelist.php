<!--add later: JJK, Pokemon Mystery Dungeon, Owl House, Dragon Prince, Infinity Train, Mob Psycho 100, Saiki Kusuo No Sai-Nan-->

<html lang="en">
    
    <head>
        
        <title>aroceu's library (list)</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="https://seas.ink/x/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="https://seas.ink/x/animatedcollapse.js"></script>

<script type="text/javascript">

animatedcollapse.addDiv('animanga', 'hide=1,fade=0,group=gay')
animatedcollapse.addDiv('music', 'hide=1, fade=1,group=gay')
animatedcollapse.addDiv('musicals', 'hide=1, fade=1,group=gay')
animatedcollapse.addDiv('movies', 'hide=1, fade=1,group=gay')
animatedcollapse.addDiv('series', 'hide=1, fade=1,group=gay')
animatedcollapse.addDiv('games', 'hide=1, fade=1,group=gay')
animatedcollapse.addDiv('books', 'hide=1, fade=1,group=gay')


animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()



</script>
        
        <link rel="stylesheet" href="list.css" type="text/css" media="screen" />
        
<?php include('header.php');?>

	<h1>aroceu's list</h1>

            <div id="blurb">

            	<p>Do you ever get recommended something and go "I'll add that to my list" and then never check it out?</p>

            	<p>This is the opposite of that. Though many things here have been recommended to me by others, this list is beyond just a to-do list (although it is) &mdash; it is also a collection of things I'm pretty sure I will have a good time with, perhaps even to the point of hyperfixation. Or at the very least, I can say that I'm familiar with enough to have an opinion. And I love having an opinion.</p>

            	<p>A few titles I have started in one way or another, but most I have never once touched in my life. Either way, I intend to absorb everything here eventually, whether into my soul or into my brain. Especially the books. Honestly, I made this entire library just to get myself to read books again.</p>

            	<p><i>Titles are listed in no particular order.</i></p>

            	<h4><b>TOTAL:</b> 21</h4>

            </div>

            <div id="categories">
            	<ul>
            		<li><a href="#animanga" rel="toggle[animanga]" class="animanga"> animanga (24)</a></li>
            		<li><a href="#books" rel="toggle[books]" class="books"> books (83)</a></li>
            		<li><a href="#games" rel="toggle[games]" class="games"> games (11)</a></li>
            		<li><a href="#movies" rel="toggle[movies]" class="movies"> movies (34)</a></li>
            		<li><a href="#music" rel="toggle[music]" class="music"> music (15)</a></li>
            		<li><a href="#musicals" rel="toggle[musicals]" class="musicals"> musicals (6)</a></li>
            		<li><a href="#series" rel="toggle[series]" class="series"> series (58)</a></li>
            		</ul>
            	</div>
            	
            	<?php include('todo/animanga.php');?>
            	<?php include('todo/books.php');?>
            	<?php include('todo/games.php');?>
            	<?php include('todo/movies.php');?>
            	<?php include('todo/music.php');?>
            	<?php include('todo/musicals.php');?>
            	<?php include('todo/series.php');?>
	        
	        <?php include('footer.php');?>
	        