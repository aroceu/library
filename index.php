<html lang="en">
    
    <head>
        
        <title>aroceu's library (main)</title>
        
        <script type="text/javascript">// <![CDATA[
		function ShowHide(divId)
		{
		if(document.getElementById(divId).style.display == 'none')
		{
		document.getElementById(divId).style.display='block';
		}
		else
		{
		document.getElementById(divId).style.display = 'none';
		}
		}
	// ]]></script>
        
        <link rel="stylesheet" href="library.css" type="text/css" media="screen" />
        
<?php include('header.php');?>

	<h1>aroceu's library</h1>

            <div id="blurb"><p>Welcome to my media library! Below is a non-comprehensive yet historically thorough list of media that has entertained me to some significance once, if not right now. Many I no longer enjoy, but they used to mean something to me at one point, and I feel no shame in that. Others, meanwhile, have a place in my heart forever.</p> 
        	<p>Movies and books are my favorite, because though I'm as much of a sucker for serialization as anyone else, I prefer a full story being told from beginning to end in a more concise format. I love a story told in one shot that makes me think about it for the rest of my life.</p> 
            <p>I abide by the principle that if I don't enjoy something, I don't have to finish it.</p>

            <blockquote><onhold></onhold> in progress and on hold (because I'm lazy) but will return to<br />
            	<dropped></dropped> dropped (likely will never become relevant to me again)
<br /> <favorite></favorite> favorites (may still be relevant to me even today)</blockquote></div>

            <ul id="medialist">
                
                <?php include('shelves/animanga.php');?>
                <?php include('shelves/asianql.php');?>
                <?php include('shelves/books.php');?>
                <?php include('shelves/cartoons.php');?>
                <?php include('shelves/comics.php');?>
                <?php include('shelves/ccs.php');?>
                <?php include('shelves/movies.php');?>
                <?php include('shelves/music.php');?>
                <?php include('shelves/musicals.php');?>
                <?php include('shelves/podcasts.php');?>
                <?php include('shelves/tv.php');?>
                <?php include('shelves/games.php');?>
	
	
	        </ul>
	        
	        <?php include('footer.php');?>
	        