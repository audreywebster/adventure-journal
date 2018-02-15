  <?php
    //Set values for page
    $page_title = "Group Loot";
    $current_page = "Loot";

    //Load header
    include_once('.././design/header.php');
  ?>




<div class="cash">
<h2>Group Cash On Hand</h2>
<p><em>Excludes Loot Bag Items' Value</em></p>

<table>
	<tr>
		<td><h3>Cash / Person</h3></td>
		<td><div id="Gold_indiv"></div></td>
	</tr>
	<tr>
		<td><h3>Total Cash</h3></td>
		<td><div id="Gold_cash_sums"></div></td>
	</tr>
	<tr>
		<td>Total Gold</td>
		<td><div id="Gold_gold"></div></td>
	</tr>
	<tr>
		<td>Total Gems</td>
		<td><div id="Gold_gems_sum"></div></td>
	</tr>
</table>
<br />

<h2>Add Gold or Gem</h2>
<form action="https://docs.google.com/forms/d/1yLapfpPG_QhgdNZ-jaxN7NXzDLLzr-WE8yZ1vGiI5_0/formResponse" method="POST" target="_self" onsubmit="">
<label for="entry_2089047529"><h3 class="inline">Value:</h3></label>
<input type="text" name="entry.2089047529" id="entry_2089047529" size="8" placeholder="100" required>
<br />
<label><input type="radio" name="entry.1777098952" value="Gold" id="group_1777098952_1" checked>Gold
</label>
<br /><label><input type="radio" name="entry.1777098952" value="__other_option__" id="group_1777098952_2">or Gem:</label>
<input type="text" name="entry.1777098952.other_option_response" value="" size="12" placeholder="Type of Gem">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fbzx" value="3342545128303634696">
<br />
<input type="submit" name="submit" value="Submit">
</form>

<h3>Gems List</h3>
<div id="Gold_gems"></div>
</div>

<h2>Group Loot Bag Contents</h2>

<div id="Loot"></div>
</div>

<div class="content">

<div class="character">
<img src="./rotate.php"" alt="Loot" />
</div>

<h2>Add to the Loot Bag</h2>
<p>
	<a href="http://www.d20pfsrd.com/magic-items">Learn about Magic Items.</a>
</p>


<form action="https://docs.google.com/forms/d/1LpQpU-KL8AFE4c0jFKbp_WuHW4Gb4ej7ic0yMuxf0Rk/formResponse" method="POST" onsubmit="">

<label for="entry_1603746694"><h3>Full Value (g)</h3></label>
<input type="text" name="entry.1603746694" value="" id="entry_1603746694" title="" placeholder="100% Gold Value">

<label for="entry_1591237352"><h3>Item</h3></label>
<input type="text" name="entry.1591237352" value="" id="entry_1591237352" title="" placeholder="Full Item Name" required>

<label for="entry_555945258"><h3>Item Slot</h3></label>
<select name="entry.555945258" id="entry_555945258">
	<option value="Armor">Armor</option>
	<option value="Belt">Belt</option>
	<option value="Bracers">Bracers/Wrists</option>
	<option value="Cloak">Cloak/Cape</option>
	<option value="Clothing">Clothing</option>
	<option value="Feet">Feet/Boots/Shoes</option>
	<option value="Hands">Hands/Gloves</option>
	<option value="Head">Head/Headband/Eyes</option>
	<option value="Neck">Necklace/Neck</option>
	<option value="Ring">Ring</option>
	<option value="Potion">Potion</option>
	<option value="Scroll">Scroll</option>
	<option value="Shoulders">Shoulders</option>
	<option value="Wand/Rod">Wand/Rod</option>
	<option value="Weapon">Weapon</option>
	<option value="Other" selected>Other</option>
</select>

<label for="entry_41066676"><h3>Item Size</h3></label>
<select name="entry.41066676" id="entry_41066676">
	<option value="N/A" selected>Not Applicable</option>
	<option value="Small">Small Humanoid</option>
	<option value="Medium">Medium Humanoid</option>
	<option value="Large">Large Humanoid</option>
	<option value="Animal">Animal</option>
	<option value="Other">Other</option>
</select>

<label><h3>Attributes</h3></label>
<ul class="checkboxes">
	<li><label><input type="checkbox" name="entry.1492186746" value="Art" id="group_1492186746_1" role="checkbox">Art</label></li>
	<li><label><input type="checkbox" name="entry.1492186746" value="Magic" id="group_1492186746_2" role="checkbox">Magic</label></li>
	<li><label><input type="checkbox" name="entry.1492186746" value="__other_option__" id="group_1492186746_3" role="checkbox">Other:</label><input type="text" name="entry.1492186746.other_option_response" value="" class="ss-q-other" id="entry_1492186746_other_option_response"></li>
</ul>

<label for="entry_1150367993"><h3>Looted From</h3></label>
<input type="text" name="entry.1150367993" value="" id="entry_1150367993" title="" placeholder="Place or Event">

<label for="entry_2010092471"><h3>Special Properties/Description</h3></label>
<textarea name="entry.2010092471" value="" id="entry_2010092471" rows="3" cols="60" placeholder="Be brief but accurate."></textarea>

<input type="hidden" name="draftResponse" value="[,,&quot;1892013873681673466&quot;]">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fbzx" value="1892013873681673466">
<br /><br />
<input type="submit" name="submit" value="Submit">
</form>




      <?php include_once('.././design/footer.php'); ?>