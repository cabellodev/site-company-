


$('#adminUser').on('click',function()
{

    let xhr = new XMLHttpRequest();
    xhr.open("get", `${host_url}/adminUser`);
    if(xhr.status== 200){
        console.log("se obtuvo la pagina ");
    }else {
        console.log('se cerro la pagina')
    }
    xhr.send();
   
});