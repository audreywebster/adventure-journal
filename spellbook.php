  <?php
    //Set values for page
    $page_title = "Add to the Spellbook";
    $current_page = "Form";

    //Load header
    include_once('./design/header.php');
  ?>

<div class="character">
<img src="./design/spellbook/rotate.php"" alt="Random Picture" />
</div>

<h2>Look-up your spell specifics.</h2>
<p>
	<ul>
		<li><a href="http://www.d20pfsrd.com/magic" target="_blank">General Magic Terms</a></li>
		<li><a href="http://www.d20pfsrd.com/magic/spell-lists-and-domains/spell-lists---cleric" target="_blank">Cleric/Oracle</a></li>
		<li><a href="http://www.d20pfsrd.com/magic/spell-lists-and-domains/spell-lists---sorcerer-and-wizard" target="_blank">Sorcerer/Wizard</a></li>
		<li><a href="http://www.d20pfsrd.com/magic/spell-lists-and-domains" target="_blank">Other Magic Classes</a></li>
		<li><a href="http://www.d20pfsrd.com/classes/core-classes/cleric/domains" target="_blank">Cleric Domains</a></li>
	</ul>
</p>


<form action="#your_google_form_url" method="POST" onsubmit="">

<label for="#form_elementID_source"><h3>Source</h3></label>
<select name="form.elementID_source" id="form_elementID_source">
	<option value="Felurian">Felurian</option>
	<option value="Miran">Miran</option>
	<option value="Titiana">Titiana</option>
	<option value="Scroll">Scroll</option>
	<option value="Potion">Potion</option>
	<option value="Wand" selected>Wand</option>
</select>

<label for="form_elementID_spelllevel"><h3>Spell Level</h3></label>
<select name="form.elementID_spelllevel" id="form_elementID_spelllevel">
	<option value="0" selected>0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="N/A">Class or N/A</option>
</select>

<label for="form_elementID_spellname"><h3>Spell Name</h3>
<input type="text" name="form.elementID_spellname" value="" id="form_elementID_spellname" placeholder="Magic Missile" required>

<label for="form_elementID"><h3>Class</h3></label>
<ul class="checkboxes">
	<li><label><input type="checkbox" name="form.elementID_spellname" value="Cleric / Oracle" id="form_groupID_1">Cleric / Oracle</label></li>
	<li><label><input type="checkbox" name="form.elementID_spellname" value="Wizard / Sorcerer" id="form_groupID_2">Wizard / Sorcerer</label></li>
	<li><label><input type="checkbox" name="form.elementID_spellname" value="Ranger / Druid" id="form_groupID_3">Ranger / Druid</label></li>
	<li><label><input type="checkbox" name="form.elementID_spellname" value="Bard" id="form_groupID_4">Bard</label></li>
	<li><label><input type="checkbox" name="form.elementID_spellname" value="__other_option__" id="form_groupID_5">Other:</label><input type="text" name="entry.323278248.other_option_response" value="" id="entry_323278248_other_option_response"></li>
</ul>

<label for="form_elementID_castingtime"><h3>Casting Time</h3></label>
<select name="form.elementID_castingtime" id="form_elementID_castingtime">
	<option value="Standard Action" selected>Standard Action</option>
	<option value="Full Round">Full Action</option>
	<option value="Swift Action">Swift Action</option>
	<option value="Free Action">Free Action</option>
	<option value="Concentration">Concentration</option>
	<option value="Other">Other</option>
</select>

<label><h3>Duration</h3></label>
<input type="text" name="form.elementID_duration" value="" id="form_elementID_duration" placeholder="Instantaneous">

<label for="form_elementID_dice"><h3>Dice Needed</h3></label>
<input type="text" name="form.elementID_dice" value="" id="form_elementID_dice" placeholder="1d8+1/level (max +5)">

<label for="form_elementID_range"><h3>Range</h3></label>
<select name="form.elementID_range" id="form_elementID_range">
	<option value="Personal" selected>Personal</option>
	<option value="Touched">Touched</option>
	<option value="Close">Close (25 ft. + 5 ft./2 levels)</option>
	<option value="Medium">Medium (100 ft. + 10 ft./level)</option>
	<option value="Long">Long (400 ft. + 40 ft./level)</option>
	<option value="Unlimited">Unlimited</option>
	<option value="15 ft. Cone">15 ft. Cone</option>
	<option value="30 ft. Radius">30 ft. Radius</option>
	<option value="50 ft. Radius">50 ft. Radius</option>
	<option value="Other">Other</option>
</select>

<label><h3>Save Type</h3></label>
<select name="form.elementID_save" id="form_elementID_save">
	<option value="None" selected>None</option>
	<option value="Fort">Fortitude</option>
	<option value="Ref">Reflex</option>
	<option value="Will">Will</option>
</select>

<label for="form_elementID_sr"><h3>Spell Resistance</h3></label>
<select name="form.elementID_sr" id="form_elementID_sr">
	<option value="No">No</option>
	<option value="Yes" selected>Yes</option>
</select>

<label for="form_elementID_special"><h3>Special Effects</h3>
<ul class="checkboxes">
	<li><label><input type="checkbox" name="form.elementID_special" value="Class" id="form_groupID_special1">Class Ability</label></li>
	<li><label><input type="checkbox" name="form.elementID_special" value="Good" id="form_groupID_special2">Good Aligned Spell</label></li>
	<li><label><input type="checkbox" name="form.elementID_special" value="Evil" id="form_groupID_special3">Evil Aligned Spell</label></li>
	<li><label><input type="checkbox" name="form.elementID_special" value="Living Target" id="form_groupID_special4">Target Must Be Living</label></li>
	<li><label><input type="checkbox" name="form.elementID_special" value="Spell-like" id="form_groupID_special5">Spell-like Ability</label></li>
	<li><label><input type="checkbox" name="form.elementID_special" value="Supernatural" id="form_groupID_special6">Supernatural Ability</label></li>
	<li><label><input type="checkbox" name="form.elementID_special" value="__other_option__" id="form_groupID_special7" >Other:</label><input type="text" name="entry.147665909.other_option_response" value="" id="entry_147665909_other_option_response"></li>
</ul>

<label for="form_elementID_description"><h3>Description</h3></label>
<textarea name="form.elementID" id="form_elementID" rows="5" cols="80" placeholder="Be brief but accurate."></textarea>

<input type="hidden" name="draftResponse" value="[,,&quot;formID&quot;]">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fbzx" value="formID">
<br /><br />
<input type="submit" name="submit" value="Submit">
</form>
      <?php include_once('./design/footer.php'); ?>
