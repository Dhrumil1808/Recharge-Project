<h2>Recharge Datacard</h2>

<form action="submit-datacard.php" method="post">

<label>Choose Operator:</label><br/>
<select name="operator">
             <option value="RL1" selected="yes">Reliance NetConnect 1X</option>
               <option value="RL2">Reliance NetConnect+</option>
                <option value="RL3">Reliance NetConnect 3G</option>
               <option value="TI1">Tata Photon Whiz</option>
               <option value="TI2">Tata Photon+</option>
               <option value="MS1">MTS MBlaze</option>
               <option value="MS2">MTS MBrowse</option>
                <option value="VFD">Vodafone 3G</option>
              <option value="ALD">Aircel Pocket Internet</option>
              <option value="MTDD">MTNL Delhi</option>
               <option value="MTMD">MTNL Mumbai</option>
              <option value="BSD">BSNL</option>   
</select>
<br/>

<label>Enter Mobile Number:</label><br/>
<input type="text" name="servicenumber" maxlength="10"/></span>
<br/>

<label>Enter Amount:</label><br/>
<input type="text" name="amount"/></span>
<br/>
<br/>
<input type="submit" value="Recharge">

</form>
