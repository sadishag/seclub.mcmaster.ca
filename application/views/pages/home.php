<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $css; ?>
<title>Software Engineering Club - <?php echo $title; ?></title>

</head>

<body id="home" >
	
    <!-- Page Content -->
	<div id="page">
    	
        <!-- Header : Contains the logo, admin login, navigation bar -->
    	<div id="header">
        	<div id="logo">
            	<?php echo $logo_link;?>
            </div>
            <div id="navigation">
            	<ul id="navUL">
                	<li> <?php echo $contact; ?></li>
                    <li> <?php echo $cusec; ?></li>
                    <li> <?php echo $gallery; ?></li>
                	<li> <?php echo $home; ?></li>
                </ul>
            </div>
            <div id="login">
            </div>
        </div>
        
        <!--
         Contains the title of the page, and fb, twitter, and g+ club page links
        <div id="page_title">
        	<span id="news_text"><?php echo strtoupper($title); ?></span>
        </div> -->
        
        <!-- Contains the content of the site, news, upcoming events, and banner for closest event -->
        <div id="content">
        	<div id="post">
					<?php foreach ($news as $news_item): ?>
        				<div id="singlePost">
                            <span id="newsTitle"><?php echo $news_item['title'] ?></span> <br/>
                            <span id="authorText"><?php echo "Posted by </span> <span id='author'>" .$news_item['author'] ?></span></span>
                            <div id="main">
                                <p id="postText"><?php echo $news_item['text'] ?> </p>
                            </div>
                        </div>
                    <?php endforeach ?>
                
            </div>
            <div id="upcoming">
            	<h4 id="titleOfUpcoming"> Upcoming Events </h4>
            	<?php foreach ($upcoming as $upcoming_item): ?>
        				<div id="singleUpcoming">
                            <span id="upcomingTitle"><?php echo "<b>Event Title: </b><i>" .$upcoming_item['eventName']."</i>" ?></span> <br/>
                            <span id="eventTime"><?php echo"<b>Date/Time:</b><i>". $upcoming_item['eventTime']."</i>" ?></span>
                        </div>
                <?php endforeach ?>
            </div>
            <div id="eventBanner">
            <?php echo $banner;?>
            </div>
        </div>
    </div>
</body>
</html>