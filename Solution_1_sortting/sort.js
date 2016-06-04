$(document).ready(function(){
    $('#sorted_element').hide();
    $("#submit").click(function()
	{
	var number_of_string=$('#num_of_string').val();	
    $('#sort_element').empty();
    $('#sort_element').append('Please enter your strings</br>');

    for(var i=0; i<number_of_string;++i)
    {
    $('#sort_element').append('Input string '+i+ '    </br><input type="text" name="string_'+i+'" id="string_'+i+'"></br>');
    }
    $('#sort_element').append('</br><input type="submit" value="Sort" id="sort">');
    return false;
    });
	
	$("#sort").live("click", function()
	{
	var strings=[];
	$.each($('#sort_element').serializeArray(), function() 
	{
    strings.push(this.value);
    });
    var final_arry=strings.sort(function(a, b)
	{
        var a1=a.toLowerCase();
        var b1=b.toLowerCase();
        if(a1 < b1) return -1;
        if(a1 > b1) return 1;
        return 0;
    });
    $('#sort_element').hide();
    $('#sorted_element').show();
    $('#sorted_element').append('<span>SORTED STRINGS</span></br>'+final_arry);
	return false;
	});
	
});