$("#table1").on('click','.btnAdd',function(){
    var index = $(this).closest("tr").find("th:eq(0)").text(); 
    var currentRow=$(this).closest("tr"); 
    var col1=currentRow.find("td:eq(0)").text(); 
    var col2=currentRow.find("td:eq(1)").text(); 
    var col3=currentRow.find("td:eq(2)").text(); 
    var data=col1+"\n"+col2+"\n"+col3;
    // alert(data);
    var firstnum=Number(col1);
    var secondnum=Number(col2);
    var sumCol = "#"+index+"sum"
    $(sumCol).empty();
    $(sumCol).append(firstnum+secondnum);
});
