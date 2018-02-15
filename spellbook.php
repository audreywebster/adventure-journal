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


<form action="https://docs.google.com/forms/d/1OFT7WUxcjQno8CT-QjhMpEZK7nctTuNEiKIUQalYak4/formResponse" method="POST" onsubmit="">

<label for="entry_1583958707"><h3>Source</h3></label>
<select name="entry.1583958707" id="entry_1583958707">
	<option value="Felurian">Felurian</option>
	<option value="Miran">Miran</option>
	<option value="Titiana">Titiana</option>
	<option value="Scroll">Scroll</option>
	<option value="Potion">Potion</option>
	<option value="Wand" selected>Wand</option>
</select>

<label for="entry_961400766"><h3>Spell Level</h3></label>
<select name="entry.961400766" id="entry_961400766">
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

<label for="entry_564942114"><h3>Spell Name</h3>
<input type="text" name="entry.564942114" value="" id="entry_564942114" placeholder="Magic Missile" required>

<label for="entry_339236736"><h3>Class</h3></label>
<ul class="checkboxes">
	<li><label><input type="checkbox" name="entry.323278248" value="Cleric / Oracle" id="group_323278248_1">Cleric / Oracle</label></li>
	<li><label><input type="checkbox" name="entry.323278248" value="Wizard / Sorcerer" id="group_323278248_2">Wizard / Sorcerer</label></li>
	<li><label><input type="checkbox" name="entry.323278248" value="Ranger / Druid" id="group_323278248_3">Ranger / Druid</label></li>
	<li><label><input type="checkbox" name="entry.323278248" value="Bard" id="group_323278248_4">Bard</label></li>
	<li><label><input type="checkbox" name="entry.323278248" value="__other_option__" id="group_323278248_5">Other:</label><input type="text" name="entry.323278248.other_option_response" value="" id="entry_323278248_other_option_response"></li>
</ul>

<label for="entry_1357197955"><h3>Casting Time</h3></label>
<select name="entry.1357197955" id="entry_1357197955">
	<option value="Standard Action" selected>Standard Action</option>
	<option value="Full Round">Full Action</option>
	<option value="Swift Action">Swift Action</option>
	<option value="Free Action">Free Action</option>
	<option value="Concentration">Concentration</option>
	<option value="Other">Other</option>
</select>

<label><h3>Duration</h3></label>
<input type="text" name="entry.1261230852" value="" id="entry_1261230852" placeholder="Instantaneous">

<label for="entry_1721810680"><h3>Dice Needed</h3></label>
<input type="text" name="entry.1721810680" value="" id="entry_1721810680" placeholder="1d8+1/level (max +5)">

<label for="entry_272596823"><h3>Range</h3></label>
<select name="entry.272596823" id="entry_272596823">
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
<select name="entry.86191844" id="entry_86191844">
	<option value="None" selected>None</option>
	<option value="Fort">Fortitude</option>
	<option value="Ref">Reflex</option>
	<option value="Will">Will</option>
</select>

<label for="entry_74857103"><h3>Spell Resistance</h3></label>
<select name="entry.74857103" id="entry_74857103">
	<option value="No">No</option>
	<option value="Yes" selected>Yes</option>
</select>

<label for="entry_1884732273"><h3>Special Effects</h3>
<ul class="checkboxes">
	<li><label><input type="checkbox" name="entry.147665909" value="Class" id="group_147665909_1">Class Ability</label></li>
	<li><label><input type="checkbox" name="entry.147665909" value="Good" id="group_147665909_2">Good Aligned Spell</label></li>
	<li><label><input type="checkbox" name="entry.147665909" value="Evil" id="group_147665909_3">Evil Aligned Spell</label></li>
	<li><label><input type="checkbox" name="entry.147665909" value="Living Target" id="group_147665909_4">Target Must Be Living</label></li>
	<li><label><input type="checkbox" name="entry.147665909" value="Spell-like" id="group_147665909_5">Spell-like Ability</label></li>
	<li><label><input type="checkbox" name="entry.147665909" value="Supernatural" id="group_147665909_6">Supernatural Ability</label></li>
	<li><label><input type="checkbox" name="entry.147665909" value="__other_option__" id="group_147665909_7" >Other:</label><input type="text" name="entry.147665909.other_option_response" value="" id="entry_147665909_other_option_response"></li>
</ul>

<label for="entry_1271085438"><h3>Description</h3></label>
<textarea name="entry.1271085438" id="entry_1271085438" rows="5" cols="80" placeholder="Be brief but accurate."></textarea>

<input type="hidden" name="draftResponse" value="[,,&quot;2942658163526562292&quot;]">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fbzx" value="2942658163526562292">
<br /><br />
<input type="submit" name="submit" value="Submit">
</form>
      <?php include_once('./design/footer.php'); ?>