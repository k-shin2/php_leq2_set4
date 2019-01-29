    <form action="handle.php" method="post">

    <p>Name:<input type="text" name="name" size="20" maxlength="40" /></p>
    <p>Emal:<input type="text" name="email" size="20" maxlength="60" /></p>
    <p>Gender:<input type="radio" name="gender" value="M"  />Male
    <input type="radio" name="gender" value="F"  />Famele</p>
    <p>Age:<select name="age">
                <option value="0-29">Under30</option>
                <option value="30-60">Between 30 and 60</option>
           </select></p>
    <p>Comments:<textarea name="comments" row="3" cols="40"></textarea></p>
    <p><input type="submit" name="submit" value="submit"/></p>

    </form>