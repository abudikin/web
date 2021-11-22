<form action="index.php"  method="POST">
<dl>
  <dt>Имя:
    <dd><input  type="text"  name="name">
  <dt>Адрес email
    <dd><input  type="text"  name="mail">
 <dt>Примечание:
    <dd><textarea rows="5"  cols="20" name="comment">
    </textarea> 
</dl>
 <p><b>Кто выиграет финал major</b></p>
    <p><input name="pobeda" type="radio" value="Sng">СНГ</p>
    <p><input name="pobeda" type="radio" value="europa"> Европа</p>
    <p><input name="pobeda" type="radio" value="asia"> Азия</p>
    <p><input name="pobeda" type="radio" value="america" checked> Америка</p>
<p><b>Кто выйдет на финал major</b></p>
<input type="checkbox" name="NAVI" value="yes">NAVI<br>
<input type="checkbox" name="G2" value="yes" checked="checked">G2<br>
<input type="checkbox" name="VP" value="yes">VP<br>
<input type="checkbox" name="Entropiq" value="yes" checked="checked">Entropiq<br>
<input type="checkbox" name="Heroic" value="yes">Heroic<br>
<input type="checkbox" name="Furia" value="yes" checked="checked">Furia<br>
<p><b>MVP турнира?</b></p>
<select  name="MVP" size="1">
  <option>ZywOo</option>
  <option>S1mple</option>
  <option>B1T</option>
  <option>Sh1ro</option>
  <option>Niko</option>
  <option>Hobbit</option>
  <option selected="selected">cadiaN</option>
</select>
<p><input type="submit"></p>
</form>
