<?php
	require_once('../controller/eventC.php');

	session_start();


	$eventC = new EventC;

	if(isset($_GET['search']))
    {
        if(!empty($_GET['search']))
        {
        	if($_GET['search'] != "")
            	$data = $eventC->findEventByAll($_GET['search']);
            else
            	$data = $eventC->getEvents();
        }
        else
            $data = $eventC->getEvents();
    }
	else if(isset($_GET['val']))
    {
        if (!empty($_GET['val'])) {
        	if((int) $_GET['val'] == 1)
        	{
        		if((int) $_GET['ord'] == 2)
            		$data = $eventC->findEventByName(2);
            	else
            		$data = $eventC->findEventByName(1);
        	}
        	else if((int) $_GET['val'] == 2)
        	{
        		if((int) $_GET['ord'] == 2)
	        		$data = $eventC->findEventByDate(2);
	        	else
	        		$data = $eventC->findEventByDate(1);
        	}
	        else if((int) $_GET['val'] == 3)
	        {
	        	if((int) $_GET['ord'] == 2)
	        		$data = $eventC->findEventByAuthor(2);
	        	else
	        		$data = $eventC->findEventByAuthor(1);
	        }
	        else
	        	$data = $eventC->getEvents();
	    }
	    else
	    	$data = $eventC->getEvents();
	}
	else
	    $data = $eventC->getEvents();
	if(isset($_GET['subs']))
    {
        if(!empty($_GET['subs']))
            $eventC->eventSubscribe((int) $_SESSION['userID'], (int) $_GET['subs']);
    }
	?>


	<script src="themekit/scripts/pagination.min.js"></script>
	<div class="grid-list gap-60 eventCs-list" data-columns="1" data-gap="60">
		<div class="grid-box">

			<?php
			$found = 0;
		    foreach ($data as $rows) 
		    {
		    	$found = 1;
		    ?>
			<?php if(isset($_SESSION['userID'])) { 
	        	$data = $eventC->eventSearchSubscribre($_SESSION['userID'], $rows['eventID']);
	        	if($data->fetch()) {?>
	        		<div class="grid-item bg-light">
	        	<?php } else { ?>
	        		<div class="grid-item">
	    		<?php } }else {?>
	    			<div class="grid-item">
	    	<?php } ?>
			    <div class="cnt-box cnt-box-side">
			        <a href="makeEvent.php?idEvent=<?php echo $rows['eventID']; ?>" class="img-box"><img src="<?php echo $rows['eventPhoto']; ?>" alt="" /></a>
			        <div class="caption">
			            <h2> <?php echo $rows['eventName']; ?> </h2>             
			            <div class="cnt-box cnt-box-info" data-href="#">  
			                <div class="bottom-info">
			                    <?php echo $rows['eventPlace']; ?>
			                </div>
			            </div>
			            <span class="extra-field"> 
			            	<?php echo $rows['eventDate']; ?>  
			            </span>
			            <p>
			                <?php echo $rows['eventContent']; ?>
			            </p>
			            <?php if(isset($_SESSION['userID'])) { 
			            	$data = $eventC->eventSearchSubscribre($_SESSION['userID'], $rows['eventID']);
			            	if($data->fetch()) {?>
			            		<button class="btn btn-sm btn-vert"> Déjà Abonné :)</button>
			            	<?php } else { ?>
			            		<a href=javascript:void(0); onclick=eventDisplay(<?php echo $rows['eventID']; ?>)> <button class="btn btn-sm btn-orange"> Participer</button> </a>
			        		<?php } }else {?>
			        			<button class="btn btn-sm btn-orange"> Participer</button>
			        	<?php } ?>
			            <div class="align-bottom align-right title">
			                <p class="quote-author"> <span style="font-weight: bold; font-size: larger;">Author : </span> <span style="font-size: larger;"><?php echo $rows['eventAuthor']; ?> </span></p>
			            </div>			            
			        </div>
			    </div>
			</div>

		    <?php
		    }

		    if(!$found)
		    {	
		    	?>
		    	<div class="grid-item">
			    	<div class="cnt-box cnt-box-side">
			    		<img src="media/sorry.svg" style=" margin-left: auto; margin-right: auto"/>				    		
			    	</div>
			    	<p style=" text-align: center"> This event not Found!!! </p>
			    </div>
			    <?php
		    }
			?>

    	</div>
	    <div class="list-pagination">
	        <ul class="pagination" data-page-items="4" data-pagination-anima="fade-bottom" data-options="scrollTop:true"></ul>
	    </div>
	</div>