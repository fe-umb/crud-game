function verificaSenhaAluno() {
  debugger;
  var s1 = document.getElementById('senhaaluno').value;
  var s2 = document.getElementById('senhaaluno2').value;
  
  if(s1.localeCompare(s2)===0) {
      document.getElementById('cadaluno').style.visibility='visible';
  } else {
      document.getElementById('cadaluno').style.visibility='hidden';
      alert('As senhas devem ser iguais');
  }
}

function verificaSenhaProfessor() {
  var s1 = document.getElementById('senhaprof').value;
  var s2 = document.getElementById('senhaprof2').value;
  
  if(s1.localeCompare(s2)===0) {
      document.getElementById('cadprof').style.visibility='visible';
  } else {
      document.getElementById('cadprof').style.visibility='hidden';
      alert('As senhas devem ser iguais');
  }
}