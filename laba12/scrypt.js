var price;
function check(text){
    if(text=="Apple")
        price=30;
    else if(text=="Orange")
        price=50;
    else if(text=="Pineapple")
        price=200;
    else 
        price=150;
    
    return price;
    
}

function sum(price,num){
price=price*num;

return price;

}

function fun1() {
    var sel=document.getElementById('mySelect').selectedIndex;
    var options=document.getElementById('mySelect').options;
    var num=parseInt(document.getElementById('numb').value);
    price=check(options[sel].text);
    
    
    alert('Выбрана опция '+options[sel].text+' '+options[sel].value+' Общяя цена покупки: '+sum(price,num));
  }

function fun2(){
    var count,str=document.getElementById('string').value;
    count=str.split("а").length-1;
    alert('Количество вхождений А в строке : '+count);

}

function fun3(){
    var password=document.getElementById('password').value;
    var login=document.getElementById('login').value;
    if (password.length>6 && password!=login) {
        alert('Вы успешно зарегистрировались!!!');
    }
    else alert('Ошибка ввода логина или пароля');
}

function makecity(name, people){
    return{
        name: name,
        people: people
    };

}