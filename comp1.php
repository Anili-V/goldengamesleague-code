<?php
 session_start();
 $teams = array();
 $teams[] = $_SESSION['s_name'];
 shuffle($teams);
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>/*
 *  Flex Layout Specifics
*/
main{
  display:flex;
  flex-direction:row;
}
.round{
  display:flex;
  flex-direction:column;
  justify-content:center;
  width:200px;
  list-style:none;
  padding:0;
}
  .round .spacer{ flex-grow:1; }
  .round .spacer:first-child,
  .round .spacer:last-child{ flex-grow:.5; }
  .round .game-spacer{
    flex-grow:1;
  }
/*
 *  General Styles
*/
body{
  font-family:sans-serif;
  font-size:small;
  padding:10px;
  line-height:1.4em;
}
li.game{
  padding-left:20px;
}
  li.game.winner{
    font-weight:bold;
  }
  li.game span{
    float:right;
    margin-right:5px;
  }
  li.game-top{ border-bottom:1px solid #aaa; }
  li.game-spacer{ 
    border-right:1px solid #aaa;
    min-height:40px;
  }
  li.game-bottom{ 
    border-top:1px solid #aaa;
  }
</style>
</head>
<body>
	<h1>All Delhi Pithoo Tournament</h1>
<main id="tournament">
	<ul class="round round-1">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[0]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[1]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[2]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[3]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top "><?php echo $teams[4]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><?php echo $teams[5]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[6]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[7]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[8]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[9]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[10]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[11]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[12]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[13]; ?></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"><?php echo $teams[14]; ?></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><?php echo $teams[15]; ?></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-2">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "> </li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top "> </li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top "> </li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-3">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "> </li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top "></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-4">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "> </li>
		
		<li class="spacer">&nbsp;</li>
	</ul>		
</main>

<?php include 'footer.php'; ?>