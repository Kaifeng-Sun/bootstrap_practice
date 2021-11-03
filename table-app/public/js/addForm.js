$('#addData').on('click' ,function(){
    var firstNum = $('#firstNum').val();
    var secondNum = $('#secondNum').val();
    var table1HTML = '';
    var table2HTML = '';
    console.log(firstNum);
    console.log(secondNum);
    if(firstNum=='' || secondNum == ''){
        alert("Both numbers must be filled");
        return false;
    }
    var localData = JSON.parse(localStorage.getItem("myData"));
    localData.push([firstNum,secondNum]);
    localStorage.setItem("myData", JSON.stringify(localData));

    $("#table1 > tbody").children().remove();

    $.each(localData, function(index, value){
        table1HTML += '<tr><th scope="row">'+ (index + 1) + '</th><td id=first'+(index+1)+'>' + 
                    value[0] + '</td><td id=second'+(index+1)+'>'+value[1]+ '</td><td>' + 
                    '<button type="button" class="btn btn-secondary btnAdd" id="add'+(index+1)+'">+</button>'+
                    '<button type="button" class="btn btn-secondary btnSub" id="subtract'+(index+1)+'">-</button>'+
                    '<button type="button" class="btn btn-secondary btnMulti" id="multiply'+(index+1)+'">*</button>'+
                    '<button type="button" class="btn btn-secondary btnDiv" id="divide'+(index+1)+'">/</button></td>'
    });
    $("#tbody1").html(table1HTML);

    $("#table2 > tbody").children().remove();
    $.each(localData, function(index, value){
        table2HTML += '<tr><th scope="row" id='+(index+1)+'>'+ (index + 1) + '</th><td id='+(index+1)+'sum></td>'+
                    '<td id='+(index+1)+'diff></td>'+'<td id='+(index+1)+'pro></td>'+
                    '<td id='+(index+1)+'quo></td>'
    });
    $("#tbody2").html(table2HTML);
})