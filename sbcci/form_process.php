<html>
<body>
Publication title that the paper will appear: <?php echo $_POST['PubTitle']; ?><br/>
Article Title:<?php echo $_POST['PubTitle']; ?><br/>
Authors of the paper: <?php echo $_POST['PubTitle']; ?><br/>
Date that the article was accepted for publication:  <?php echo $_POST['PubTitle']; ?><br/>
Unique article identifier: <?php echo $_POST['PubTitle']; ?><br/>
Three-letter code: <?php echo $_POST['PubTitle']; ?><br/>
Authors e-mail address: <?php echo $_POST['PubTitle']; ?><br/>


<form action="http://copyrightqa.ieee.org/ECTT/IntroPage.jsp" method="post">
<input type="hidden" name="PubTitle" value="<?php echo $_POST['PubTitle']; ?>">
<input type="hidden" name="ArtTitle" value="<?php echo $_POST['ArtTitle']; ?>">
<input type="hidden" name="AuthName" value="<?php echo $_POST['AuthName']; ?>">
<input type="hidden" name="ArtDate" value="<?php echo $_POST['ArtDate']; ?>">
<input type="hidden" name="ArtId" value="<?php echo $_POST['ArtId']; ?>">
<input type="hidden" name="ArtSource" value="<?php echo $_POST['ArtSource']; ?>">
<input type="hidden" name="AuthEmail" value="<?php echo $_POST['AuthEmail']; ?>">
<input type="hidden" name="rtrnurl" value="<?php echo $_POST['rtrnurl']; ?>">
<input name="Submit" type="submit" value="Confirm Submission">
</form>

</html>
</body>