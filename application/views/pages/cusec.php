<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $css; ?>
<title>Software Engineering Club - <?php echo $title; ?></title>
</head>

<body id="cusec">
	<div id="page">
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
        <div id="page_title">
        	<span id="cusec_text"><?php echo strtoupper($title); ?></span>
        </div> -->
        <div id="content">
        	<?php foreach ($qAndA as $q_item): ?>
        				<div id="qAItem">
                            <span id="question"><?php echo $q_item['question'] ?></span> <br/><br/>
                            <span id="answer"><?php echo $q_item['answer'] ?></span>
                        </div>
             <?php endforeach ?>
        </div>
    </div>
</body>
</html>