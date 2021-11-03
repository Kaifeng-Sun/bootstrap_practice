$(function () {
    var localData = JSON.parse(localStorage.getItem("myData"));
    var tableHTML = '';
    $.each(localData, function(index, value){
        tableHTML += '<tr><th scope="row">'+ (index + 1) + '</th><td id=first'+(index+1)+'>' + 
                        value[0] + '</td><td id=second'+(index+1)+'>'+value[1]+ '</td><td>' + 
                        '<button type="button" class="btn btn-secondary btnAdd" id="add'+(index+1)+'">+</button>'+
                        '<button type="button" class="btn btn-secondary btnSub" id="subtract'+(index+1)+'">-</button>'+
                        '<button type="button" class="btn btn-secondary btnMulti" id="multiply'+(index+1)+'">*</button>'+
                        '<button type="button" class="btn btn-secondary btnDiv" id="divide'+(index+1)+'">/</button></td>'
    });
    $("#tbody1").html(tableHTML);
});