<?php include_once('myheader.php');?>
<div class="main-container">
<h2>Vehicle Registration Form</h2>
    <form action="storedata.php" method="POST">
        <div class="left-div">
            <h3>Vehicle General Information</h3>
            <fieldset>
                <label>Vehicle No.:</label><br><input type="text" name="vehicleno" required/><span>*</span><br>
                <label>Vehicle Owner :</label><br><input type="text" name="ownername" required/><span>*</span><br>
                <label>Owner License No :</label><br><input type="number" name="licenseno" required/><span>*</span><br>
                <label>Purchase Date :</label><br><input type="date" name="pur_date" required/><span>*</span><br>
                <label>Register Date :</label><br><input type="date" name="reg_date" required/><span>*</span><br>
                <label>Category :</label><br>
        <select class="select_opt" name="vehicle_category">
        <option>--Select--</option>
        <option>Two Wheeler</option>
        <option>Three Wheeler</option>
        <option>Four Wheeler</option>
      </select><span>*</span><br>
            </fieldset>
            <fieldset>
                <label>Bill No :</label><br><input type="text" name="bill_no" required /><span>*</span><br>
                <label>Model :</label><input type="text" name="model" required/><span>*</span><br>
                <input type="checkbox" name="rcbook" />RC Book<br>
                <label>Engine No :</label><br><input type="text" name="engineno" required/><span>*</span><br>
                <label>Chasis No :</label><br><input type="text" name="chasisno" required/><span>*</span><br>
                <label>Empty Weight :</label><br><input type="text" name="emptyweight" required/><span>*</span><br>
                <label>Tank No :</label><br><input type="text" name="tankno" required/><span>*</span><br>
            </fieldset>           
        </div>
        <div class="right-div">
        <fieldset>                    
                    <label>Total Amount :</label><br><input type="number" name="tot_amount" required/><span>*</span><br>
                    <input type="radio" value="cash" name="cash_type"/>Cash&nbsp;&nbsp;<input type="radio" value="install" name="cash_type"/>Installment<br>
                    <div class="installment">
                            <label>Amount per Month :</label><br><input type="number" name="amtpermonth" required/><span>*</span><br>
                            <label>Number of Months :</label><br><input type="number"  name="noofmonth" required/><span>*</span><br>
                    </div>
                    <label>Bill No :</label><br><input type="text" required/><span>*</span><br>
            </fieldset>
        <h3>Tax Expiry Dates</h3>
            <fieldset>               
                <label>Passing Date :</label><br><input type="date" name="passdate" required/><span>*</span><br>
                <label>Insurance Date :</label><br><input type="date" name="insurancedate" required/><span>*</span><br>
                <label>State Permit Date :</label><br><input type="date" name="statepermit" required/><span>*</span><br>            </fieldset>
           <div class="btn-collect">
               <div class="div-col"> <input type="submit" value="Register Vehicle" class="bgbtn"/></div>
            <div class="div-col"><input type="button" value="Cancel" class="bgbtn"/></div></div>
        </div>
    </form>
</div>
<?php include_once('myfooter.php');?>