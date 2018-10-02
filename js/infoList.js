$(function()
{
    //doesn't display input boxes until needed 
    $("div#add_county").hide();    
    $("div#add_town").hide();
    
    //Getting the input for country options from the user 
    $(document).off("keyup", "input#country").on("keyup", "input#country", function()
    {
        var term = $(this).val().trim();
        
        //doesn't start displaying country options until user has entered some characters 
        if($(this).val() === '')
        {
            $("div#add_county").hide();    
            $("#add_town").hide();
            $("#lists").hide();
        }
        else 
        {
            //uses the prepared statement in countryList.php, using the SQL query and the binding of 'keyword' to display the relevant country lists 
            //the JavaScript code requests the counrtyList.php URL, then handling the response
            //ajax code continuously works in the background
            $.ajax({
                type: "POST",
                url: "countryList.php",
                data: { keyword: term },
                success: function(data)
                {        
                    $("#lists").html(data);
                    $("#lists").show();
                }
            });
        }
    });
    
    //gets the relevant country from the text entered by user
    $(document).off("click", "li.liCountry").on("click", "li.liCountry", function()
    {
        var country = $(this).text();
        $("input#country").val(country);
        $("div#lists").html('');
        $("div#add_county").show();
        getCounties();
    });
        
    //getting the input for the counties  
    $(document).off("change", "select#county").on("change", "select#county", function()
    {
        getTowns();
    });
    
    //uses the prepared statement from countiesList.php page to get the counties relevant to the chosen country
    function getCounties()
    {
        var country = $('input#country').val().trim();

        $.ajax({
            type: "POST",
            url: "countiesList.php",
            data: { country: country, keyword: '' },
            
            success: function(data)
            {
                $("select#county").html(data);
                getTowns();
            }
        });
    }
    
    //Getting town input
    $(document).off("change", "select#county").on("change", "select#county", function()
    {
        //shows the list of towns for the chosen county
        $("div#add_town").show();  
        getTowns();
    });
    
    //uses the prepared statement from townsList.php page to get the towns relevant to the chosen county
    function getTowns()
    {
        var county = $('select#county').val().trim(); //remoces whitespace
        
        $.ajax({
            type: "POST",
            url: "townsList.php",
            data: { county: county, keyword: '' },
            
            success: function(data)
            {
                $("select#town").html(data);
            }
        });
    }    
});

