<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Add / Remove Table Rows Dynamically</title>
<style type="text/css">
   
    form input, button{
        padding: 5px;
    }
    table{
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-rowa").click(function(){
            var namee = $("#namee").val();
            var emaill = $("#emaill").val();
            var markupl = "<tr><td><input type='checkbox' name='recorda'></td><td>" + namee + "</td><td>" + emaill + "</td></tr>";
            $("tablea tbodya").append(markupl);
        });
        
        // Find and remove selected table rows
        $(".delete-rowa").click(function(){
            $(".tablea tbodya").find('input[name="recorda"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
</head>
<body>
    <form>
        <input type="text" id="namee" placeholder="Name">
        <input type="text" id="emaill" placeholder="Email Address">
        <input type="button" class="add-rowa" value="Add Row">
    </form>
    <table class="tablea">
        <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody class="tbodya">
            <tr>
               <!--  <td><input type="checkbox" name="record"></td>
                <td>Peter Parker</td>
                <td>peterparker@mail.com</td> -->
            </tr>
        </tbody>
    </table>
    <button type="button" class="delete-rowa">Delete Row</button>
</body> 
</html>                            