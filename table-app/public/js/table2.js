$(function () {
    var localData = JSON.parse(localStorage.getItem("myData"));
    var tableHTML = '';
    $.each(localData, function(index, value){
        tableHTML += '<tr><th scope="row" id=t2row'+(index+1)+'>'+ (index + 1) + '</th><td id='+(index+1)+'sum></td>'+
                    '<td id='+(index+1)+'diff></td>'+'<td id='+(index+1)+'pro></td>'+
                    '<td id='+(index+1)+'quo></td>'
    });
    $("#tbody2").html(tableHTML);
});