
<form action="http://copyrightqa.ieee.org/ECTT/IntroPage.jsp" method="post"><br/>
Publication title that the paper will appear: <input type="text" name="PubTitle"><br/>
Article Title: <input type="text" name="ArtTitle" ><br/>
Authors of the paper: <input type="text" name="AuthName"><br/>
Date that the article was accepted for publication:  <input type="text" name="ArtDate" ><br/>
Unique article identifier: <input type="text" name="ArtId"><br/>
Three-letter code: <input type="text" name="ArtSource" ><br/>
Authors e-mail address: <input type="text" name="AuthEmail" ><br/>
URL referring back to the source web site: <input type="text" name="rtrnurl" ><br/>
</form>

<form action="http://copyrightqa.ieee.org/ECTT/IntroPage.jsp" method="post"><br/>
<input type="hidden" name="PubTitle" value="<?php echo $_POST['PubTitle']; ?>"><br/>
<input type="hidden" name="ArtTitle" value="<?php echo $_POST['ArtTitle']; ?>"><br/>
<input type="hidden" name="AuthName" value="<?php echo $_POST['AuthName']; ?>"><br/>
<input type="hidden" name="ArtDate" value="<?php echo $_POST['ArtDate']; ?>"><br/>
<input type="hidden" name="ArtId" value="<?php echo $_POST['ArtId']; ?>"><br/>
<input type="hidden" name="ArtSource" value="<?php echo $_POST['ArtSource']; ?>"><br/>
<input type="hidden" name="AuthEmail" value="<?php echo $_POST['AuthEmail']; ?>"><br/>
<input type="hidden" name="rtrnurl" value="<?php echo $_POST['rtrnurl']; ?>"><br/>
<input name="Submit" type="submit" value="Copyright Submission">
</form>


