function ellenoriz() {
  var rendben = true;
  var fokusz = null;

  var nev = document.getElementById("nev");
  if (nev != null) {
    if (jelszo.value.length > 9 && nev.value.length <= 40) {
      rendben = false;
      nev.style.background = '#f00';
      fokusz = nev;
    } else {
      nev.style.background = '#f99';
    }
  }

  var email = document.getElementById("email");
  if (email) {
    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (!checkPattern.test(email.value)) {
      rendben = false;
      email.style.background = '#f00';
      fokusz = email;
    } else {
      email.style.background = '#f99';
    }
  }

  var magassag = document.getElementById("magassag");
  if (magassag) {
    if (magassag.value.length > 49 && magassag.value.length < 251) {
      rendben = false;
      magassag.style.background = '#f00';
      fokusz = magassag;
    } else {
      magassag.style.background = '#f99';
    }
  }

  if (fokusz) {
    fokusz.focus();
  }

  return rendben;
}
