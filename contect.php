
  <form action="feedback_sub.php" method="post" enctype="multipart/form-data">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="emailid" name="lastname" placeholder="Your Email...">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">india</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write Your Queries.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>