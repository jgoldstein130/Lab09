function check(){
  let good = true;
  let text1 = document.getElementById('text1');
  let text2 = document.getElementById('text2');
  let text3 = document.getElementById('text3');
  if(text1.value < 0 || text2.value < 0 || text3.value < 0){
    alert('Cannot have negative quanities of shirts');
    good = false;
  }
  if(text1.value == '' || text2.value == '' || text3.value == ''){
    alert('Cannot leave quantity of shirts blank');
    good = false;
  }


  let pass = document.getElementById('pass');
  if(pass.value == ''){
    alert('Password cannot be blank');
    good = false;
  }

  let ship1 = document.getElementById('ship1');
  let ship2 = document.getElementById('ship2');
  let ship3 = document.getElementById('ship3');
  if(ship1.checked == false && ship2.checked == false && ship3.checked == false){
    alert('Must select a shipping option');
    good = false;
  }

  let email = document.getElementById('username');
  let emailFormat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (email.value.match(emailFormat)) {

  }
  else{
     alert('Enter a valid email address');
     good = false;
  }
  if(good == true){
    alert('Order is good to go!');
  }
}

function reset(){
  let ship1 = document.getElementById('ship1');
  let ship2 = document.getElementById('ship2');
  let ship3 = document.getElementById('ship3');
  ship1.checked = false;
  ship2.checked = false;
  ship3.checked = false;
  let text1 = document.getElementById('text1');
  let text2 = document.getElementById('text2');
  let text3 = document.getElementById('text3');
  text1.value = '0';
  text2.value = '0';
  text3.value = '0';
}
