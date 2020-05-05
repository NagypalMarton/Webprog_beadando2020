function ellenoriz() {
  var rendben = true;
  var fokusz = null;

  var orokbefogado_neve = document.getElementById("orokbefogado_neve");
  if (orokbefogado_neve != null) {
    if (orokbefogado_neve.value.length > 6 && orokbefogado_neve.value.length <= 30) {
      rendben = false;
      orokbefogado_neve.style.background = '#f00';
      fokusz = orokbefogado_neve;
    } else {
      orokbefogado_neve.style.background = '#f99';
    }
  }

  var orokbefogado_cime = document.getElementById("orokbefogado_cime");
  if (orokbefogado_neve != null) {
    if (orokbefogado_cime.value.length > 7 && orokbefogado_cime.value.length <= 20) {
      rendben = false;
      orokbefogado_cime.style.background = '#f00';
      fokusz = orokbefogado_cime;
    } else {
      orokbefogado_cime.style.background = '#f99';
    }
  }

  var orokbefogado_telefonszama = document.getElementById("orokbefogado_telefonszama");
  if (orokbefogado_telefonszama) {
    if (orokbefogado_telefonszama.value.length !=9) {
      rendben = false;
      orokbefogado_telefonszama.style.background = '#f00';
      fokusz = orokbefogado_telefonszama;
    } else {
      orokbefogado_telefonszama.style.background = '#f99';
    }
  }

  if (fokusz) {
    fokusz.focus();
  }

  return rendben;
}
