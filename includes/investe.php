<!-- 
 <div class="form-group form-inline">
        <label for="pd">Investigation Parameters: </label><br>
        <input type="text" name="ipdropdown" class="form-control" id="ipdropdown" list="hal">--
<datalist id="hal">
  <option value="Headache">
  <option value="Fever">
  <option value="ChickenPox">
  <option value="Diabetis">
  <option value="Safari">
</datalist>

        <input type="text" name="iptext" class="form-control" id="iptext" >-
        <input type="submit" name="addbtn" class="form-control" id="addbtn">

    </div>


<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>

 -->


<style type="text/css">
   
    
    .tables{
        width: 100%;
        margin-bottom: 20px;
		border-collapse: collapse;
    }
    .tables, th, td{
        border: 1px solid #cdcdcd;
    }
    .tables th, table td{
        padding: 10px;
        text-align: left;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>

    <form>
        <input type="text" id="name" placeholder="Name">
        <input type="text" id="email" placeholder="Email Address">
    	<input type="button" class="add-row" value="Add Row">
    </form>
    <table class="tables">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" name="record"></td>
                <td>Peter Parker</td>
                <td>peterparker@mail.com</td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="delete-row">Delete Row</button>
